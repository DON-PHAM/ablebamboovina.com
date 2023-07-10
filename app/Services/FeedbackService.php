<?php
namespace App\Services;

interface FeedbackService
{
    public function delete(int $id);

    public function getById(int $id);

    public function getAll();

    public function changeStatus($id);
}
