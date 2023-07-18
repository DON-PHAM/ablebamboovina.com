<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Services\EventService;
use Illuminate\Support\Facades\App;

class EventController extends Controller
{
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function index()
    {
        $locale = session()->get('locale');
        if ($locale == null)
            $locale = App::getLocale();
        $events = $this->eventService->getAll($locale);
        return view('Main.Event.index', compact('events'));
    }
}
