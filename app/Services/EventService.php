<?php
namespace App\Services;
use App\Http\Requests\EventRequest;

interface EventService
{
    public function create(EventRequest $request);
    public function edit($id);
    public function getAll();
    public function update($id,EventRequest $request);
}
