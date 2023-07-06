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


}
