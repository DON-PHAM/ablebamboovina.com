<?php
namespace App\Repositories;
use App\Http\Requests\Admin\VideoRequest;
use App\Http\Requests\Admin\VideoUpdateRequest;
use App\Models\Video;
use App\Services\VideoService;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class VideoRepository implements VideoService
{
    protected $model;

    public function __construct(Video $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->paginate(15);
    }

    public function create(VideoRequest $request)
    {
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status == 'on' ? 1 : 0
        ];
        $video = $request->file('video');
        $video_new = rand().'_video.'.$video->getClientOriginalExtension();
        $video->move(public_path('upload/video/'),$video_new);
        $data['video'] = $video_new;
        return $this->model->create($data);
    }

    public function edit($id)
    {
        return $this->model->find($id);
    }

    public function update($id, VideoUpdateRequest $request)
    {
        $video = $this->model->find($id);
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status == 'on' ? 1 : 0
        ];
        if ($request->hasFile('video'))
        {
            $video = $request->file('video');
            $video_new = rand().'_video.'.$video->getClientOriginalExtension();
            $video->move(public_path('upload/video/'),$video_new);
            $data['video'] = $video_new;
        }
        return $video->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function changeStatus($id)
    {
        $video = $this->model->find($id);
        if (!$video)
        {
            return response()->json(['status'=>false]);
        }
        $video->status = !$video->status;
        $video->save();
        return response()->json(['status'=>true,'data'=>$video]);

    }
}
