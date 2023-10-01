<?php

namespace App\Repositories;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTranslate;
use App\Models\Review;
use App\Services\ProductService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductRepository implements ProductService
{

    protected $product;
    protected $productTranslate;
    protected $productImage;
    protected $review;

    public function __construct(Product $product, ProductTranslate $productTranslate, ProductImage $productImage, Review $review)
    {
        $this->product = $product;
        $this->productTranslate = $productTranslate;
        $this->productImage = $productImage;
        $this->review = $review;
    }

    public function create(ProductRequest $request)
    {
        $userid = session()->get('user')->id;
        $productRequest = [
            'slug' => Str::slug($request->vi_name),
            'code'=> $request->code,
            'discount' => doubleval($request->discount),
            'price' => $request->price,
            'categoryid' => $request->categoryid,
            'branchid' => $request->branchid,
            'userid' => $userid,
            'quantity'=>intval($request->quantity),
            'count'=> 0,
            'status'=> $request->status =='on' ? 1: 0,
            'image'=>'',
            'hot' => $request->hot == 'on' ? 1: 0
        ];
        // Xử lý ảnh sản phẩm
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_new = rand().'_product.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/product/'.$request->code.'/'),$image_new);
            $productRequest['image'] = $image_new;
        }

        $product = $this->product->create($productRequest);

        if ($request->hasFile('files'))
        {
            foreach ($files = $request->file('files') as $file)
            {
                $image = $file;
                $image_new = rand().'_product.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload/product/'.$request->code.'/'),$image_new);
                $imageProduct = [
                    'productid' => $product->id,
                    'image'=> $image_new,
                    'status' => 1
                ];
                $this->productImage->create($imageProduct);
            }
        }
        // Lưu thông tin sản phẩm theo ngôn ngữ
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $productTranslate = [
                'productid' => $product->id,
                'languageid' => $language,
                'name' => $request->{$language.'_name'},
                'description' => $request->{$language.'_description'},
                'content' => $request->{$language.'_content'},
                'metakeyword' => $request->{$language.'_metakeyword'}
            ];
            $this->productTranslate->create($productTranslate);
        }
        return $product;
    }

    public function update(int $id, ProductRequest $request)
    {
        $iduser = session()->get('user')->id;
        $product = $this->product->find($id);
        $productRequest = [
            'slug' => Str::slug($request->vi_name),
            'code'=> $request->code,
            'discount' => doubleval($request->discount),
            'price' => $request->price,
            'categoryid' => $request->categoryid,
            'branchid' => $request->branchid,
            'userid' => $iduser,
            'quantity'=>intval($request->quantity),
            'count'=> 0,
            'status'=> $request->status =='on' ? 1: 0,
            'image'=>$product->image,
            'hot' => $request->hot == 'on' ? 1: 0
        ];
        // Xử lý ảnh sản phẩm
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_new = rand().'_product.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/product/'.$request->code.'/'),$image_new);
            $productRequest['image'] = $image_new;
        }

        $product->update($productRequest);
        if ($request->hasFile('files'))
        {
            foreach ($files = $request->file('files') as $file)
            {
                $image = $file;
                $image_new = rand().'_product.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload/product/'.$request->code.'/'),$image_new);
                $imageProduct = [
                    'productid' => $id,
                    'image'=> $image_new,
                    'status' => 1
                ];
                $this->productImage->create($imageProduct);
            }
        }
        // Lưu thông tin sản phẩm theo ngôn ngữ
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $productTranslate = [
                'productid' => $id,
                'languageid' => $language,
                'name' => $request->{$language.'_name'},
                'description' => $request->{$language.'_description'},
                'content' => $request->{$language.'_content'},
                'metakeyword' => $request->{$language.'_metakeyword'}
            ];
            $productTraslate = $this->productTranslate->where('productid','=',$id)->where('languageid',$language)->first();
            $productTraslate->update($productTranslate);
        }
        return $product;

    }

    public function delete(int $id)
    {
        $product = $this->product->with(['images', 'translates'])->find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        foreach ($product->images as $image) {
            Storage::delete('upload/product/'.$product->code.'/' . $image->filename); // Use filename instead of path
        }

        $product->images()->delete();
        $product->translates()->delete();
        $product->delete();

        return response()->json(['success' => 'Product deleted successfully']);
    }
    //Sử dụng cho edit
    public function getById(int $id)
    {
        $products = $this->product->with(['images', 'translates','category','branch'])->find($id);
        return $products;
    }

    public function getAll(string $locale)
    {
        $products = $this->product->with(['images', 'translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        },'category','branch'])->paginate(50);
        return $products;
    }

    public function showHomeById(string $locale,int $id)
    {
        $products = $this->product->with(['images', 'translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }, 'category', 'getCategory', 'branch', 'review'])->find($id);
        return $products;
    }

    public function showShopById(string $locale, int $id)
    {
        $products = $this->product->with(['images',
            'translate' => function ($query) use ($locale) {
                $query->where('languageid', $locale);
            },
            'category', 'branch','review'])->where('categoryid','=',$id)->paginate(12);
        return $products;
    }

    public function changeStatus(int $id)
    {
        $product = $this->product->find($id);

        if (!$product)
        {
            return response()->json(['status'=>false]);
        }
        $product->status = !$product->status;
        $product->save();
        return response()->json(['status'=>true,'data'=>$product]);
    }

    public function changeProductHot(int $id)
    {
        $product = $this->product->find($id);

        if (!$product)
        {
            return response()->json(['status'=>false]);
        }
        $product->hot = !$product->hot;
        $product->save();
        return response()->json(['status'=>true,'data'=>$product]);
    }

    public function deleteImage(int $idimage)
    {
        $image = $this->productImage->find($idimage);
        $product = $this->product->find($image->productid);
        $path = 'upload/product/' . $product->code . '/' . $image->image;
        if (Storage::disk('public')->delete($path)) {
            $this->productImage->destroy($idimage);
            return response()->json(['status' => true, 'data' => $product]);
        }
        return response()->json(['status' => false, 'data' => '']);
    }

    public function review($id, $request)
    {
        $userid = Auth::user()->id;
        $data = [
            'userid' => $userid,
            'productid' => $id,
            'rate' => $request->rating,
            'content'=> $request->contents,
            'name'=> $request->name
        ];
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $image_new = rand() . '_review.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/review/'), $image_new);
            $data['video'] = $image_new;
        }
        return $this->review->create($data);
    }
}
