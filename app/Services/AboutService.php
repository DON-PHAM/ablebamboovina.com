<?php
namespace  App\Services;
use App\Http\Requests\AboutRequest;

interface  AboutService
{
    public function getById();
    public function getHomeById();
    public function CreateOrUpdate($id,AboutRequest $request);
}
