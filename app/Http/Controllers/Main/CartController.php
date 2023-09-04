<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\IShipService;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CartController extends Controller
{
    protected $productService;
    protected $shipService;

    public function __construct(ProductService $productService, IShipService $shipService)
    {
        $this->productService = $productService;
        $this->shipService = $shipService;
    }


    public function index()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        $ships = $this->shipService->getAll($locale);
        return view('Main.Cart.index', compact('ships'));
    }

    public function addToCart($id, Request $request)
    {
        $product = $this->productService->showHomeById($id);
        $size = $request->size;
        $discountPrice = 0;
        $cart = session()->get('cart', []);
        $existingItem = $this->findCartItem($cart, $id, $size);
        if ($existingItem != null) {
            $cart[$id."_".$size]['quantity']++;
        } else {
            if ($product->discount != 0) {
                $discountPrice =$product->price * $product->discount / 100;
            }
            $cart[$id."_".$size] = [
                'name' => $product->translate->name,
                'productid' => $id,
                'size' => $size,
                'code' => $product->code,
                'quantity' => 1,
                'price' => ($product->price - $discountPrice),
                'image' => $product->image,
            ];
        }
        session()->put('cart', $cart);
        return response()->json(['status' => true, 'count' => count((array)session('cart'))]);
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);

            session()->flash('success', trans('cart.update-success'));
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', trans('cart.remove-success'));
        }
    }

    private function findCartItem($cart, $productId, $size)
    {
        if (!empty($cart)) {
            foreach ($cart as $item) {
                if ($item['productid'] == $productId && $item['size'] == $size) {
                    return $item;
                }
            }
            return null;

        }
        return null;
    }
}
