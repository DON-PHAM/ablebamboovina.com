<?php
namespace  App\Services;
use App\Http\Requests\Admin\VideoRequest;

interface  VideoService
{
    public function getAll();
    public function create(VideoRequest $request);
    public function edit($id);
    public function update($id,VideoRequest $request);
    public function delete($id);
    public function changeStatus($id);


}
