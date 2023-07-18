<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Services\EventService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EventController extends Controller
{
    protected $eventService;
    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function index() {
        $locale = session()->get('locale') ?? App::getLocale();
        $events = $this->eventService->getAll($locale);
        return view('Admin_cp.Event.index',compact('events'));
    }

    public function create()
    {
        return view('Admin_cp.Event.create');
    }
    public function postCreate(EventRequest $request)
    {
        $event = $this->eventService->create($request);
        return redirect()->route('event');
    }

    public function edit($id)
    {
        $event = $this->eventService->getById($id);
        $event_ko = $event->translates->firstWhere('languageid', 'ko');
        $event_vi = $event->translates->firstWhere('languageid', 'vi');
        return view('Admin_cp.Event.edit',compact(['event','event_ko','event_vi']));
    }
    public function update($id,EventRequest $request)
    {
        $event = $this->eventService->update($id,$request);
        return redirect()->route('event');
    }
    public function changeStatus($id)
    {
        return $this->eventService->changeStatus($id);
    }

    public function deleteImage($idimage)
    {
        return $this->eventService->deleteImage($idmage);
    }
}
