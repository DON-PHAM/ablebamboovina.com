<?php
namespace  App\Services;
use App\Http\Requests\Admin\VideoRequest;
use App\Http\Requests\Admin\VideoUpdateRequest;

interface  VideoService
{
    public function getAll();
    public function create(VideoRequest $request);
    public function edit($id);
    public function update($id,VideoUpdateRequest $request);
    public function delete($id);
    public function changeStatus($id);


}
