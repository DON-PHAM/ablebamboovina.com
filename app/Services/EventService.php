<?php
namespace App\Services;
use App\Http\Requests\EventRequest;

interface EventService
{
    public function create(EventRequest $request);

    public function update(int $id, EventRequest $request);

    public function delete(int $id);

    public function getById(int $id);
    public function showHomeById(int $id);

    public function getAll(string $locale);
    public function changeStatus(int $id);

    public function deleteImage(int $idimage);
}
