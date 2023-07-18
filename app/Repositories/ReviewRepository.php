<?php

namespace App\Repositories;

use App\Http\Requests\Admin\ReviewRequest;
use App\Models\Review;
use App\Services\ReviewService;
use Illuminate\Support\Facades\Auth;

class ReviewRepository implements ReviewService
{
    protected $model;

    public function __construct(Review $model)
    {
        $this->model = $model;
    }

    public function create(ReviewRequest $request)
    {
        $userid = session()->get('users')->id;
        $data = [
            'productid' => $request->productid,
            'userid' => $userid,
            'name' => $request->name,
            'rate' => $request->rate,
            'content' => $request->contents,
        ];
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $video_new = rand() . '_video.' . $video->getClientOriginalExtension();
            $video->move(public_path('upload/review/'), $video_new);
            $data['video'] = $video_new;
        }
        return $this->model->create($data);
    }

    public function update($id, ReviewRequest $request)
    {
        // TODO: Implement update() method.
    }

    public function changeStatus($id)
    {
        $review = $this->model->find($id);
        if (!$review) {
            return response()->json(['status' => false]);
        }
        $review->status = !$review->status;
        $review->save();
        return response()->json(['status' => true, 'data' => $review]);
    }

}
