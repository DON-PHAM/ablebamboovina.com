<?php

namespace App\Repositories;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTranslate;
use App\Services\ProductService;
use Illuminate\Support\Str;

class ProductRepository implements ProductService {

    protected $product;
    protected $productTranslate;
    protected $productImage;
    public function __construct(Product $product, ProductTranslate $productTranslate,ProductImage $productImage)
    {
        $this->product = $product;
        $this->productTranslate = $productTranslate;
        $this->productImage = $productImage;
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
            'image'=>''
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
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
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
        },'category','branch'])->paginate(15);
        return $products;
    }

    public function showHomeById(int $id)
    {
        $products = $this->product->with(['images', 'translate','category','branch'])->find($id);
        return $products;
    }
}
