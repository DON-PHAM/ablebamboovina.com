<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use App\Services\VideoService;
use Illuminate\Support\Facades\App;

class PromotionController extends Controller
{

    protected $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function index()
    {
        $videos = $this->videoService->getAll();
        return view('Main.Promotion.index', compact('videos'));
    }
}
