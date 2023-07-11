<?php
namespace App\Repositories;
use App\Http\Requests\Admin\VideoRequest;
use App\Models\Video;
use App\Services\VideoService;
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
            'link' => $request->link,
            'status' => $request->status == 'on' ? 1 : 0
        ];
        return $this->model->create($data);
    }

    public function edit($id)
    {
        return $this->model->find($id);
    }

    public function update($id, VideoRequest $request)
    {
        $video = $this->model->find($id);
        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'link' => $request->link,
            'status' => $request->status == 'on' ? 1 : 0
        ];
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
