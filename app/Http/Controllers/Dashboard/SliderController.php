<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Services\SliderService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    protected $sliderRepository;
    public function __construct(SliderService $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    public function index() {
        $sliders = $this->sliderRepository->getAll();
        return view('Admin_cp.Slider.index',compact('sliders'));
    }

    public function create() {
        return view('Admin_cp.Slider.create');
    }
    public function postCreate(SliderRequest $request)
    {
        $image_new = "";
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_new = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/slider'),$image_new);
        }
        $data = [
            'image' => $image_new,
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name),
            'url'=>$request->url,
            'status' => $request->status == 'on' ? 1: 0
        ];
        $this->sliderRepository->create($data);
        return redirect()->route('slider-list');
    }
    public function edit($id) {
        $slider = $this->sliderRepository->getById($id);
        return view('Admin_cp.Slider.edit',compact('slider'));
    }
    public function update($id, SliderRequest $request)
    {

    }
}
