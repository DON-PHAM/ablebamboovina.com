<?php
namespace App\Repositories;
use App\Models\Slider;
use App\Services\SliderService;

class SliderRepository implements SliderService {

    protected $model;
    public function __construct(Slider $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        $slider = $this->model->find($id);
        return $slider->update($data);
    }

    public function delete(int $id)
    {
        return $this->model->destroy($id);
    }

    public function getById(int $id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->paginate(15);
    }

    public function changeStatus($id)
    {
        $data = $this->model->find($id);
        if (!$data)
        {
            return response()->json(['status'=>false,'data' => 'Item not found'], 404);
        }
        $data->status = !$data->status;
        $data->save();
        return response()->json(['status'=>true,'data'=>$data]);
    }
}
