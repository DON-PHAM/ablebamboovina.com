<?php
namespace App\Repositories;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Post;
use App\Models\PostTranslate;
use App\Services\PostService;
use Illuminate\Support\Str;

class PostRepository implements PostService {

    protected $post;
    protected $postTranslate;
    public function __construct(Post $post, PostTranslate $postTranslate)
    {
        $this->post = $post;
        $this->postTranslate = $postTranslate;
    }

    public function delete(int $id)
    {
        $post = $this->post->with(['translates'])->find($id);
        if (!$post) {
            return response()->json(['status' => false], 404);
        }
        $post->translates()->delete();
        $post->delete();
        return  response()->json(['status'=>true,trans('post.success')]);
    }

    public function getById(int $id)
    {
        return $this->post->with(['translates'])->find($id);
    }

    public function getAll(string $locale)
    {
        return $this->post->with(['translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }])->paginate(15);
    }

    public function create(PostRequest $request)
    {
        $data = [
            'categoryid' => $request->categoryid,
            'slug' => Str::slug($request->vi_name),
            'hot' => $request->hot == 'on' ? 1 : 0,
            'status' => $request->status == 'on' ? 1 : 0
        ];
        // Xử lý ảnh sản phẩm
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_new = rand().'_product.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/post/'),$image_new);
            $data['image'] = $image_new;
        }
        $post = $this->post->create($data);
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $postTranslate = [
                'postid' => $post->id,
                'languageid' => $language,
                'name' => $request->{$language.'_name'},
                'description' => $request->{$language.'_description'},
                'content' => $request->{$language.'_content'},
                'metakeyword' => $request->{$language.'_metakeyword'}
            ];
            $this->postTranslate->create($postTranslate);
        }
        return $post;
    }

    public function update(int $id, PostRequest $request)
    {
        $data = [
            'categoryid' => $request->categoryid,
            'slug' => Str::slug($request->vi_name),
            'hot' => $request->hot == 'on' ? 1 : 0,
            'status' => $request->status == 'on' ? 1 : 0
        ];
        // Xử lý ảnh sản phẩm
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_new = rand().'_product.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/post/'),$image_new);
            $data['image'] = $image_new;
        }
        $post = $this->post->find($id);
        $post->update($data);
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $postTranslate = [
                'postid' => $id,
                'languageid' => $language,
                'name' => $request->{$language.'_name'},
                'description' => $request->{$language.'_description'},
                'content' => $request->{$language.'_content'},
                'metakeyword' => $request->{$language.'_metakeyword'}
            ];
            $update =  $this->postTranslate->where('postid',$id)->where('languageid',$language)->first();
            $update->update($postTranslate);
        }
        return $post;
    }

    public function changeStatus(int $id)
    {
        $post = $this->post->find($id);
        if (!$post)
        {
            return response()->json(['status'=>false],404);
        }
        $post->status = !$post->status;
        $post->save();
        return $post;
    }
}
