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

    public function getById($id)
    {
        return $this->about->with(['translates'])->first();
    }

    public function create(AboutRequest $request)
    {
        $about = [
            'status'=> $request->status == 'on' ? 1 : 0
        ];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_new = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/about'), $image_new);
            $about['image'] = $image_new;
        }
        $result = $this->about->create($about);
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $aboutLanguage = [
                'aboutid' => $result->id,
                'languageid' => $language,
                'title' => $request->{$language.'_name'},
                'description' => $request->{$language.'_description'},
                'contents' => $request->{$language.'_contents'},
            ];
            $this->aboutTranslate->create($aboutLanguage);
        }
        return $about;

    }

    public function getHomeById($id)
    {

    }


    public function getAll(string $locale)
    {
        return $this->about->with(['translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }
        ])->paginate(15);
    }

    public function update($id, AboutRequest $request)
    {
        $about = [
            'status'=> $request->status == 'on' ? 1 : 0
        ];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_new = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/about'), $image_new);
            $about['image'] = $image_new;
        }
        $result = $this->about->find($id);
        $result->update($about);
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $aboutLanguage = [
                'aboutid' => $id,
                'languageid' => $language,
                'title' => $request->{$language.'_name'},
                'description' => $request->{$language.'_description'},
                'contents' => $request->{$language.'_contents'},
            ];
            $aboutTranslate = $this->aboutTranslate->where('aboutid',$id)->where('languageid',$language)->first();
            $aboutTranslate->update($aboutLanguage);

        }
        return $about;
    }

    public function delete(int $id)
    {
        $about = $this->about->with(['translates'])->find($id);
        if (!$about) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        $about->translates()->delete();
        $about->delete();
        return response()->json(['success' => 'About deleted successfully']);
    }
}
