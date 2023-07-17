<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VideoRequest;
use App\Http\Requests\Admin\VideoUpdateRequest;
use App\Models\Video;
use App\Services\VideoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    protected $videoService;
    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }
    public function index()
    {
        $videos = $this->videoService->getAll();
        return view('Admin_cp.Video.index',compact('videos'));
    }
    public function create()
    {
        return view('Admin_cp.Video.create');
    }
    public function postCreate(VideoRequest $request)
    {
       $video = $this->videoService->create($request);
        return redirect()->route('video')->with('success',trans('video.success-create'));
    }
    public function edit($id)
    {
        $video = $this->videoService->edit($id);
        return view('Admin_cp.Video.edit',compact('video'));
    }
    public function update($id,VideoUpdateRequest $request)
    {
        $video = $this->videoService->update($id,$request);
        return redirect()->route('video')->with('success',trans('video.success'));

    }
    public function delete($id)
    {
        return $this->videoService->delete($id);
    }
}
