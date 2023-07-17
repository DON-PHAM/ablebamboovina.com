<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\VideoService;

class ReviewController extends Controller
{
    protected $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function index()
    {
        $videos = $this->videoService->getAll();
        return view('Main.Review.index', compact('videos'));
    }
}
