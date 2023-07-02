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
        // TODO: Implement update() method.
    }

    public function delete(int $id)
    {
       return $this->model->destroy($id);
    }

    public function getById(int $id)
    {
        // TODO: Implement getById() method.
    }

    public function getAll()
    {
        return $this->model->paginate(15);
    }
}
