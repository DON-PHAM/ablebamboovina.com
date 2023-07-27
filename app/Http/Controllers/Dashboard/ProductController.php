<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\ProductData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Services\BranchService;
use App\Services\CategoryProductService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    protected $productData;


    public function __construct(ProductData $productData)
    {
        $this->productData = $productData;

    }

    public function index()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $products = $this->productData->getAll($locale);
        return view('Admin_cp.Product.index', compact('products'));
    }

    public function create()
    {
        $data = $this->productData->getDataCreate();
        return view('Admin_cp.Product.create', $data);
    }

    public function postCreate(ProductRequest $request)
    {
        $this->productData->create($request);
        return redirect()->route('product-list');
    }

    public function edit($id)
    {
        $data = $this->productData->getDataEdit($id);
        return view('Admin_cp.Product.edit',$data);
    }

    public function update($id, ProductRequest $request)
    {
        $this->productData->update($id,$request);
        return redirect()->route('product-list')->with('success', 'Sửa thành công');
    }
    public function delete($id)
    {
        return $this->productData->delete($id);
    }

    public function changeStatus($id)
    {
        return $this->productData->changeStatus($id);
    }

    public function changeProductHot($id)
    {
        return $this->productData->changeProductHot($id);
    }

    public function deleteImage($idmage)
    {
        return $this->productData->deleteImage($idmage);
    }
    public function review($id, Request $request)
    {
        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,mp4,mov,ogg|max:30000'
        ]);
        $result = $this->productData->review($id,$request);
        return redirect()->back();
    }


}
