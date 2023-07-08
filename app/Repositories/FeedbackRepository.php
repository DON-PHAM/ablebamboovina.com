<?php

namespace App\Repositories;

use App\Models\Branch;
use App\Models\Contact;
use App\Services\BranchService;
use App\Services\FeedbackService;

class FeedbackRepository implements FeedbackService
{
    protected $model;
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function getById(int $id)
    {
        // TODO: Implement getById() method.
    }

    public function getAll()
    {
        return $this->model->paginate(15);
    }

    public function changeStatus($id)
    {
        $feedBack = $this->model->find($id);
        if (!$feedBack)
        {
            return response()->json(['status'=>false]);
        }
        $feedBack->status = !$feedBack->status;
        $feedBack->save();
        return response()->json(['status'=> true, 'data'=>$feedBack]);
    }
}
