<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\EventService;
use App\Services\ProductService;
use App\Services\SliderService;
use Illuminate\Support\Facades\App;

class DetailController extends Controller
{
    protected $productService;
    protected $eventService;

    protected $sliderService;

    public function __construct(ProductService $productService, EventService $eventService,SliderService $sliderService)
    {
        $this->productService = $productService;
        $this->eventService = $eventService;
        $this->sliderService = $sliderService;
    }

    public function index($id)
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $products = $this->productService->getAll($locale);
        $product = $this->productService->showHomeById($locale,$id);
        $sliders = $this->sliderService->getAll();
        return view('Main.Detail.index', compact('product', 'products','sliders'));
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
