<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FeedBackRequest;
use App\Services\FeedbackService;

class ContactController extends Controller
{
    protected $feedbackService;

    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }

    public function index()
    {
        return view('Main.Contact.index');
    }

    public function postCreate(FeedBackRequest $request)
    {
        try {
            return $this->feedbackService->create($request);
        } catch (\Exception $ex) {
            return redirect()->route('contact-page')->with('false', 'Thất bại');
        }

    }
}
