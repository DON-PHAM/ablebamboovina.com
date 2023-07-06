<?php

namespace App\Repositories;

use App\Models\Branch;
use App\Services\BranchService;

class BranchRepository implements BranchService
{
    protected $model;
    public function __construct(Branch $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        $bran = $this->model->find($id);
        return $bran->update($data);
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
}
