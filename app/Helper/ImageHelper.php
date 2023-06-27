<?php
namespace  App\Helper;

use Dotenv\Validator;
use http\Env\Request;

class ImagesHelper
{
    public static function uploadImage(Request $request): string
    {
       $validate = Validator::make($request->all,[
           'avatar' => 'required |image|mimes:jpg,png,jpg,gif|max:2048'
       ]);
       if ($validate->passes())
       {
           $image = $request->file('avatar');
           $new_name = rand().'.'.$image->getClientOriginalExtension();
           $image->move(public_path('upload/avatar'),$new_name);
           return $new_name;
       }
       else
           return "";
    }
}
