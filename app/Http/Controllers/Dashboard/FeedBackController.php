<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\FeedbackService;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    protected $feedbackService;
    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }

    public function index() {
        $feedbacks = $this->feedbackService->getAll();
        return view('Admin_cp.Feedback.index',compact('feedbacks'));
    }
}
