@extends('Admin_cp.Layout.master')
@section('title',trans('new.title-edit'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{trans('post.edit')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=""><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">Tạo Blog/News</li>
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
                            <h2 class="card-title">{{trans('post.edit')}}</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs"> {{trans('home.back')}}</span></a>
                                </div>
                            </div>
                        </div>

                        @if($post)

                            <form action="{{route('post-new-edit',$post->id)}}" method="post" accept-charset="UTF-8"
                                  class="form-horizontal" id="form-main" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header with-border">
                                            <h3 class="card-title">Korean <img alt="Korean" title=""
                                                                               src="{{asset('backend/assets/data/language/flag_uk.png')}}"
                                                                               style=" width:20px; height:20px;"></h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group  row ">
                                                <label for="ko_name" class="col-sm-2 col-form-label">Tiêu đề <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="ko_name" name="ko_name"
                                                               value="{{$post_ko->name}}" class="form-control ko_name"
                                                               placeholder="">
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group  row ">
                                                <label for="ko_metakeyword	" class="col-sm-2 col-form-label">Từ khóa
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
                                                               value="{{$post_ko->metakeyword}}"
                                                               class="form-control ko_metakeyword" placeholder="">
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group  row ">
                                                <label for="ko_description" class="col-sm-2 col-form-label">Mô tả <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                <textarea id="ko_description" name="ko_description"
                                                          class="form-control ko_description"
                                                          placeholder="">{{$post_ko->description}}</textarea>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 300 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="ko_content" class="col-sm-2 col-form-label">Nội dung</label>
                                                <div class="col-sm-8">
<textarea id="ko_content" class="editor" name="ko_content" style="visibility: hidden; display: none;">{{$post_ko->content}}
                                    </textarea>

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
                                            <div class="form-group  row ">
                                                <label for="vi_name" class="col-sm-2 col-form-label">Tiêu đề <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="vi_name" name="vi_name"
                                                               value="{{$post_vi->name}}" class="form-control vi_name"
                                                               placeholder="">
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group  row ">
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
                                                               value="{{$post_vi->metakeyword}}"
                                                               class="form-control vi_metakeyword" placeholder="">
                                                    </div>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 200 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group  row ">
                                                <label for="vi_description" class="col-sm-2 col-form-label">Mô tả <span
                                                        class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                   aria-hidden="true"></i></span></label>
                                                <div class="col-sm-8">
                                                <textarea id="vi_description" name="vi_description"
                                                          class="form-control vi_description"
                                                          placeholder="">{{$post_vi->description}}</textarea>
                                                    <span class="form-text">
<i class="fa fa-info-circle"></i> Tối đa 300 kí tự
</span>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label for="vi_content" class="col-sm-2 col-form-label">Nội dung</label>
                                                <div class="col-sm-8">
<textarea id="vi_content" class="editor" name="vi_content" style="visibility: hidden; display: none;">{{$post_vi->content}}
                                    </textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group  row ">
                                        <label for="image" class="col-sm-2 col-form-label">{{trans("post.category")}}</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="categoryid">
                                                <option disabled>Chọn danh mục</option>
                                                @if($categories)
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if($post->categoryid == $category->id) selected @endif>{{$category->translate->name}} </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group  row ">
                                        <label for="image" class="col-sm-2 col-form-label">{{trans("post.image")}}</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="file" id="image" name="image" value=""
                                                       class="form-control input-sm image" placeholder="">

                                            </div>
                                            <div id="preview_image" class="img_holder">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group  row">
                                        <label for="status" class="col-sm-2 col-form-label">{{trans("post.status")}}</label>
                                        <div class="col-sm-8">
                                            <input class="checkbox" @if($post->status == 1) checked @endif type="checkbox" name="status">
                                        </div>
                                    </div>
                                    <div class="form-group  row">
                                        <label for="status" class="col-sm-2 col-form-label">{{trans("post.hot")}}</label>
                                        <div class="col-sm-8">
                                            <input class="checkbox" @if($post->hot == 1) checked @endif type="checkbox" name="hot">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer row">

                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="btn-group float-right">
                                            <button type="submit" class="btn btn-primary">{{trans("home.save")}}</button>
                                        </div>
                                        <div class="btn-group float-left">
                                            <button type="reset" class="btn btn-warning">{{trans("home.reset")}}</button>
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

                            // Old code here
                            /*$("<img></img>", {
                              class: "imageThumb",
                              src: e.target.result,
                              title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

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

    </script>
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
            toastr.error('{{ $error }}');
            @endforeach
        </script>
    @endif
@endsection
