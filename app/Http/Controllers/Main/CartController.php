<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\IShipService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use function Symfony\Component\String\s;

class CartController extends Controller
{
    protected $productService;
    protected $shipService;
    public function __construct(ProductService $productService,IShipService $shipService)
    {
        $this->productService = $productService;
        $this->shipService = $shipService;
    }


    public function index()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $ships = $this->shipService->getAll($locale);
        return view('Main.Cart.index',compact('ships'));
    }
    public function addToCart($id)
    {
        $product = $this->productService->showHomeById($id);
        $cart = session()->get('cart',[]);
        if (isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        }
        else
        {
            $cart[$id] = [
                'name' => $product->translate->name,
                'code' => $product->code,
                'quantity' => 1,
                'price' => $product->price,
                'image' => $product->image,
            ];
        }
        session()->put('cart',$cart);
        return response()->json(['status'=>true,'count'=>count((array) session('cart'))]);
    }
    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$cart);

            session()->flash('success',trans('cart.update-success'));
        }
    }
    public function remove(Request $request)
    {
        if ($request->id)
        {
            $cart = session()->get('cart');
            if (isset($cart[$request->id]))
            {
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
            session()->flash('success',trans('cart.remove-success'));
        }
    }
}
