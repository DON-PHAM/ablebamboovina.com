@extends('Admin_cp.Layout.master')
@section('title',trans('event.title'))
@section('content')
    <style>
        input[type="file"] {
            display: block;
        }

        .imageThumb {
            max-height: 75px;
            border: 2px solid;
            padding: 1px;
            cursor: pointer;
        }

        .pip {
            display: inline-block;
            margin: 10px 10px 0 0;
        }

        .remove {
            display: block;
            background: #444;
            border: 1px solid black;
            color: white;
            text-align: center;
            cursor: pointer;
        }

        .remove:hover {
            background: white;
            color: black;
        }

        /*image product*/
        .product-images {
            width: 100%;
            margin-top: 20px;
        }

        .product-images ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        .product-images li {
            margin-right: 20px;
            margin-bottom: 20px;
            width: calc(33.33% - 20px);
            position: relative;
        }

        .image-container {
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px;

        }

        .image-name {
            font-size: 14px;
            font-weight: bold;
        }

        .delete-image {
            background-color: #f44336;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 6px 10px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
        }

        .delete-image:hover {
            background-color: #c62828;
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i>{{trans('event.edit')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i>{{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('event.edit')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header with-border">
                            <h2 class="card-title">{{trans('event.edit')}}</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a target="_new" href="{{route('admin')}}"
                                       class="btn  btn-flat btn-default" title="List">
                                        <i class="fa fa-list"></i><span class="hidden-xs"> {{trans('home.back')}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if($event)
                            <form action="{{route('post-event-edit',$event->id)}}" method="POST" name="form_name"
                                  accept-charset="UTF-8" class="form-horizontal" id="form-main"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="kind" value="0">
                                <div id="main-add" class="card-body">
                                    <div class="card">
                                        <div class="card-header with-border">
                                            <h3 class="card-title">Korean <img alt="English" title=""
                                                                               src="{{asset('backend/assets/data/language/flag_uk.png')}}"
                                                                               style=" width:20px; height:20px;"></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row ">
                                                <label for="en__name" class="col-sm-2 col-form-label">이름 <span
                                                        class="seo"
                                                        title="SEO"><i
                                                            class="fa fa-coffee" aria-hidden="true"></i></span>
                                                </label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="ko_name" name="ko_name"
                                                               value="{{$event_ko->name}}"
                                                               class="form-control input-sm ko_name"
                                                               placeholder="" required>
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row   ">
                                                <label for="ko_metakeyword" class="col-sm-2 col-form-label">키워드
                                                    <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="ko_metakeyword" name="ko_metakeyword"
                                                               value="{{$event_ko->metakeyword}}"
                                                               class="form-control input-sm ko_metakeyword"
                                                               placeholder="" required>
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="ko_description" class="col-sm-2 col-form-label">설명하다<span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                <textarea id="ko_description" name="ko_description"
                                                          class="form-control input-sm ko_description editor"
                                                          placeholder="">{{$event_ko->description}}</textarea>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 300 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row kind  ">
                                                <label for="ko_content" class="col-sm-2 col-form-label">
                                                    Nội dung chính
                                                </label>
                                                <div class="col-sm-8">
                                                <textarea id="ko_content" class="editor"
                                                          name="ko_content"
                                                          style="visibility: hidden; display: none;">{{$event_ko->content}}</textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header with-border">
                                            <h3 class="card-title">Tiếng Việt <img alt="Tiếng Việt" title=""
                                                                                   src="{{asset('backend/assets/data/language/flag_vn.png')}}"
                                                                                   style=" width:20px; height:20px;">
                                            </h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row ">
                                                <label for="vi_name" class="col-sm-2 col-form-label">Tên <span
                                                        class="seo"
                                                        title="SEO"><i
                                                            class="fa fa-coffee" aria-hidden="true"></i></span>
                                                </label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="vi_name" name="vi_name"
                                                               value="{{$event_vi->name}}"
                                                               class="form-control input-sm vi_name"
                                                               placeholder="" required>
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row   ">
                                                <label for="vi_metakeyword" class="col-sm-2 col-form-label">Từ khóa
                                                    <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="vi_metakeyword" name="vi_metakeyword"
                                                               value="{{$event_vi->metakeyword}}"
                                                               class="form-control input-sm vi_metakeyword"
                                                               placeholder="">
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="vi_description" class="col-sm-2 col-form-label">Mô tả <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                <textarea id="vi_description" name="vi_description"
                                                          class="form-control input-sm vi_description editor"
                                                          placeholder="">{{$event_vi->description}}</textarea>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 300 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row kind  ">
                                                <label for="vi_content" class="col-sm-2 col-form-label">
                                                    Nội dung chính
                                                </label>
                                                <div class="col-sm-8">
                                                    <textarea id="vi_content" class="editor" name="vi_content"
                                                              style="visibility: hidden; display: none;">{{$event_vi->content}} </textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row kind  ">
                                        <label for="image" class="col-sm-2 col-form-label">
                                            Hình ảnh chính
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="file" onchange="preview()" name="image">
                                                <img id="frame"
                                                     src="{{asset('upload/product/'.$event->code.'/'.$event->image)}}"
                                                     width="100px" height="100px"/>

                                            </div>
                                            <div id="preview_image" class="img_holder">
                                            </div>

                                        </div>
                                    </div>
                                    @if($event->image)
                                        <div class="form-group row kind">
                                            <label for="image" class="col-sm-2 col-form-label">

                                            </label>
                                            <div class="col-sm-8">
                                                <div class="product-images">
                                                    <ul>

                                                        <li >
                                                            <div class="image-info">
                                                                <span class="image-name">{{ $event->image }}</span>
                                                                <button class="delete-image">Xóa</button>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group row kind  ">
                                        <label for="image" class="col-sm-2 col-form-label">
                                            Hình ảnh sản phẩm
                                        </label>
                                        <div class="col-sm-8">
                                            <div class="field" align="left">
                                                <i>có thể up nhiều</i>
                                                <input type="file" id="files" name="files[]" multiple/>
                                            </div>
                                        </div>



                                    </div>
                                    @if(count($event->images) > 0)
                                        <div class="form-group row kind">
                                            <label for="image" class="col-sm-2 col-form-label">

                                            </label>
                                            <div class="col-sm-8">
                                                <div class="product-images">
                                                    <ul>
                                                        @foreach ($event->images as $image)
                                                            <li data-id="{{$image->id}}">
                                                                <div class="image-info">
                                                                    <span class="image-name">{{ $image->image }}</span>
                                                                    <a class="delete-image delete"  >Xóa</a>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="form-group row kind  ">
                                        <label for="code" class="col-sm-2 col-form-label">Mã SKU</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="text" style="width: 100px;" id="code" name="code"
                                                       value="{{$event->code}}"
                                                       class="form-control input-sm code" placeholder="">
                                            </div>
                                            <span class="form-text">
Chỉ sử dụng kí tự trong nhóm: "A-Z", "a-z", "0-9" and "-_"
</span>
                                        </div>
                                    </div>

                                    <div class="form-group row kind   ">
                                        <label for="price" class="col-sm-2 col-form-label">Giá cost</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="number" step="0.01" style="width: 100px;" id="price"
                                                       name="price"
                                                       value="{{$event->price}}" class="form-control input-sm cost"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row kind   ">
                                        <label for="discount" class="col-sm-2 col-form-label">% Giảm giá</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="number" step="0.01" style="width: 100px;" id="discount"
                                                       name="discount" value="{{$event->discount}}"
                                                       class="form-control input-sm discount"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row kind   ">
                                        <label for="quantity" class="col-sm-2 col-form-label">Số lượng trong kho</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="number" style="width: 100px;" id="quantity" name="quantity"
                                                       value="{{$event->quantity}}"
                                                       class="form-control input-sm stock" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label for="status" class="col-sm-2 col-form-label">Trạng thái</label>
                                        <div class="col-sm-8">
                                            <input type="checkbox" id="status" @if($event->status == 1) checked @endif name="status"/>
                                        </div>
                                    </div>

                                    <hr class="kind ">

                                </div>

                                <div class="card-footer kind row" id="card-footer">

                                    <div class="col-md-8">
                                        <div class="btn-group float-right">
                                            <button type="submit" class="btn btn-primary">{{trans('home.save')}}</button>
                                        </div>
                                        <div class="btn-group float-left">
                                            <button type="reset" class="btn btn-warning">{{trans('home.reset')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="{{asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('backend/assets/vendor/ckeditor/adapters/jquery.js')}}"></script>
    <script>
        $('textarea.editor').ckeditor(
            {
                filebrowserImageBrowseUrl: '{{url('/laravel-filemanager?type=Images')}}',
                filebrowserImageUploadUrl: '{{url('laravel-filemanager/upload?type=Images&_token=')}}',
                filebrowserBrowseUrl: '{{url('/laravel-filemanager?type=Files')}}',
                filebrowserUploadUrl: '{{url('/laravel-filemanager/upload?type=Files&_token=')}}',
                filebrowserWindowWidth: '900',
                filebrowserWindowHeight: '500'
            }
        );
        $(document).ready(function () {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function (e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function (e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove image</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function () {
                                $(this).parent(".pip").remove();
                            });

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });

        function preview() {
            let frame = document.getElementById('frame');
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        $('.delete').click(function(){
            let li = $(this).closest('li');
            let idimage = li.data('id')

            $.ajax({
                url:'{{route('delete-event-image',':idimage')}}'.replace(':idimage',idimage),
                method:'GET',
                dataType:'json',
                success:function (res){
                    if(res.status)
                    {
                        li.remove();
                        toastr.success("Xóa thành công ảnh");
                    }
                    else {
                        toastr.error('Xóa thất bại');
                    }

                }
            })

        });

    </script>
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}');
            @endforeach
        </script>
    @endif
@endsection
