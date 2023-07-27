<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Services\ProductService;
use App\Services\VideoService;
use Illuminate\Support\Facades\App;

class ReviewController extends Controller
{
    public function index()
    {
        $videos = Review::all();
        return view('Main.Review.index', compact('videos'));
    }
}
