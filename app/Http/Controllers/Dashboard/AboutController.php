<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Services\AboutService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    protected $aboutService;
    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index(){
        $locale = session()->get('locale') ?? App::getLocale();
        $abouts = $this->aboutService->getAll($locale);
        return view('Admin_cp.About.index',compact('abouts'));
    }
    public function create()
    {
        return view('Admin_cp.About.create');
    }
    public function postCreate(AboutRequest $request)
    {
        $result = $this->aboutService->create($request);
        return redirect()->route('about');
    }
    public function edit($id) {
        $about =  $this->aboutService->getById($id);
        $about_ko = $about->translates->where('languageid','ko')->first();
        $about_vi = $about->translates->where('languageid','vi')->first();
        return view('Admin_cp.About.edit',compact(['about','about_vi','about_ko']));
    }
    public function update($id, AboutRequest $request)
    {
        $this->aboutService->update($id,$request);
        return redirect()->route('about');
    }

    public function delete($id)
    {
        return $this->aboutService->delete($id);
    }
}
