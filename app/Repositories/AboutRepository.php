<?php
namespace App\Repositories;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Models\AboutTranslate;
use App\Services\AboutService;

class AboutRepository implements AboutService
{
    protected $about;
    protected $aboutTranslate;
    public function __construct(About $about,AboutTranslate $aboutTranslate)
    {
        $this->about = $about;
        $this->aboutTranslate = $aboutTranslate;
    }

    public function getById()
    {
        return $this->about->with(['translates'])->first();
    }

    public function CreateOrUpdate($id, AboutRequest $request)
    {
        $data = [

        ];
        $about = $id != 0 ? $this->about->find($id) : new About;
        if (!$setting)
        {
            return redirect()->back()->with('error','Setting not found');
        }
        $setting->fill($data);
        $setting->save();
        return  redirect()->back()->with('success','setting saved success fully');
    }

    public function getHomeById()
    {
        // TODO: Implement getHomeById() method.
    }
}
