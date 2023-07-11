<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\AboutService;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    protected $aboutService;

    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index()
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $abouts = $this->aboutService->getAll($locale);
        return view('Main.About.index', compact('abouts'));
    }
}
