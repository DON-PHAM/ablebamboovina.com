<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $aboutService;
    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index(){
        $about = $this->aboutService->getById() ?? [];
    }
}
