<?php
namespace App\Services;
use App\Http\Requests\Admin\ReviewRequest;

interface ReviewService
{
    public function create(ReviewRequest $request);
    public function update($id, ReviewRequest $request);
    public function changeStatus($id);
    public function getAll();
}
