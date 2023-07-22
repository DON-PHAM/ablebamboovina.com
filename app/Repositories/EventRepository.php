<?php
namespace App\Repositories;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\EventTranslate;
use App\Services\EventService;
use http\Env\Response;
use Illuminate\Support\Str;

class EventRepository implements EventService
{
    protected $event;
    protected $eventImage;
    protected $eventTranslate;

    public function __construct(Event $event, EventImage $eventImage, EventTranslate $eventTranslate)
    {
        $this->event = $event;
        $this->eventImage = $eventImage;
        $this->eventTranslate = $eventTranslate;
    }

    public function create(EventRequest $request)
    {
        $userid = session()->get('user')->id;
        $productRequest = [
            'slug' => Str::slug($request->vi_name),
            'code' => $request->code,
            'discount' => doubleval($request->discount),
            'price' => $request->price,
            'userid' => $userid,
            'quantity' => intval($request->quantity),
            'count' => 0,
            'status' => $request->status == 'on' ? 1 : 0,
            'image' => ''
        ];
        // Xử lý ảnh sản phẩm
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_new = rand() . '_product.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/event/' . $request->code . '/'), $image_new);
            $productRequest['image'] = $image_new;
        }

        $event = $this->event->create($productRequest);

        if ($request->hasFile('files')) {
            foreach ($files = $request->file('files') as $file) {
                $image = $file;
                $image_new = rand() . '_product.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/event/' . $request->code . '/'), $image_new);
                $imageProduct = [
                    'eventid' => $event->id,
                    'image' => $image_new,
                    'status' => 1
                ];
                $this->eventImage->create($imageProduct);
            }
        }
        // Lưu thông tin sản phẩm theo ngôn ngữ
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $eventTranslate = [
                'eventid' => $event->id,
                'languageid' => $language,
                'name' => $request->{$language . '_name'},
                'description' => $request->{$language . '_description'},
                'content' => $request->{$language . '_content'},
                'metakeyword' => $request->{$language . '_metakeyword'}
            ];
            $this->eventTranslate->create($eventTranslate);
        }
        return $event;
    }

    public function update(int $id, EventRequest $request)
    {
        $iduser = session()->get('user')->id;
        $event = $this->event->find($id);
        $eventRequest = [
            'slug' => Str::slug($request->vi_name),
            'code'=> $request->code,
            'discount' => doubleval($request->discount),
            'price' => $request->price,
            'categoryid' => $request->categoryid,
            'branchid' => $request->branchid,
            'userid' => $iduser,
            'quantity'=>intval($request->quantity),
            'count'=> 0,
            'status'=> $request->status =='on' ? 1: 0,
            'image'=>$event->image,
            'hot' => $request->hot == 'on' ? 1: 0
        ];
        // Xử lý ảnh sản phẩm
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_new = rand().'_product.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/event/'.$request->code.'/'),$image_new);
            $eventRequest['image'] = $image_new;
        }

        $event->update($eventRequest);
        if ($request->hasFile('files'))
        {
            foreach ($files = $request->file('files') as $file)
            {
                $image = $file;
                $image_new = rand().'_product.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload/event/'.$request->code.'/'),$image_new);
                $imageEvent = [
                    'eventid' => $id,
                    'image'=> $image_new
                ];
                $this->eventImage->create($imageEvent);
            }
        }
        // Lưu thông tin sản phẩm theo ngôn ngữ
        $languages = ['vi', 'ko'];
        foreach ($languages as $language) {
            $eventTranslate = [
                'eventid' => $id,
                'languageid' => $language,
                'name' => $request->{$language.'_name'},
                'description' => $request->{$language.'_description'},
                'content' => $request->{$language.'_content'},
                'metakeyword' => $request->{$language.'_metakeyword'}
            ];
            $eventTranslateUpdate = $this->eventTranslate->where('eventid','=',$id)->where('languageid',$language)->first();
            $eventTranslateUpdate->update($eventTranslate);
        }
        return $event;
    }

    public function delete(int $id)
    {
        $event = $this->event->with(['images', 'translates'])->find($id);

        if (!$event) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        foreach ($event->images as $image) {
            unlink('upload/product/'.$event->code.'/' . $image->image); // Use filename instead of path
        }

        $event->images()->delete();
        $event->translates()->delete();
        $event->delete();

        return response()->json(['success' => 'Product deleted successfully']);
    }

    public function getById(int $id)
    {
        $event = $this->event->with(['images', 'translates'])->find($id);
        return $event;
    }

    public function showHomeById(int $id, string $locale)
    {
        $events = $this->event->with(['images', 'translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }])->find($id);
        return $events;
    }

    public function getAll(string $locale)
    {
        $event = $this->event->with(['translate' => function ($query) use ($locale) {
            $query->where('languageid', $locale);
        }])->paginate(15);
        return $event;
    }

    public function changeStatus(int $id)
    {
        $event = $this->event->find($id);

        if (!$event)
        {
            return response()->json(['status'=>false]);
        }
        $event->status = !$event->status;
        $event->save();
        return response()->json(['status'=>true,'data'=>$event]);
    }

    public function deleteImage(int $idimage)
    {
        $image = $this->eventImage->find($idimage);
        $event = $this->event->find($image->eventid);
        $imagePath = public_path('upload/event/' . $event->code . '/' . $image->image);

        // Kiểm tra xem tập tin tồn tại trước khi xóa
        if (file_exists($imagePath)) {
            // Xóa tập tin ảnh
            unlink($imagePath);
            return response()->json(['status' => true, 'data' => $event]);
        }
        return response()->json(['status' => false, 'data' => '']);
    }
}
