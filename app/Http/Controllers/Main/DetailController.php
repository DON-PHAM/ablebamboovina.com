<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\EventService;
use App\Services\ProductService;
use Illuminate\Support\Facades\App;

class DetailController extends Controller
{
    protected $productService;
    protected $eventService;

    public function __construct(ProductService $productService, EventService $eventService)
    {
        $this->productService = $productService;
        $this->eventService = $eventService;
    }

    public function index($id)
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $products = $this->productService->getAll($locale);
        $product = $this->productService->showHomeById($id);
        return view('Main.Detail.index', compact('product', 'products'));
    }

    public function event($id)
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $product = $this->eventService->showHomeById($id,$locale);
        $products = $this->eventService->getAll($locale);
        return view('Main.Detail.Event.index',compact(['products','product']));


    }
}
