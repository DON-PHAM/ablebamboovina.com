<?php
namespace App\Services;

use App\Http\Requests\Admin\FeedBackRequest;

interface FeedbackService
{
    public function create(FeedBackRequest $request);
    public function delete(int $id);

    public function getById(int $id);

    public function getAll();

    public function changeStatus($id);
}
