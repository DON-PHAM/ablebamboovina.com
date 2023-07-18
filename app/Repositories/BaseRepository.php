<?php
namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
class BaseRepository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function getAll()
    {
        return $this->model->paginate(15);
    }
    public function getById($id)
    {
        return $this->model->find($id);
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
