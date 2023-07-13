@extends('Admin_cp.Layout.master')
@section('title',trans('category.title'))
@section('content')
    <style>
        img {
            max-width: 180px;
        }

        input[type=file] {
            padding: 10px;
            background: #2d2d2d;
        }

    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{trans('category.edit')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=""><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('category.edit')}}</li>
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
                            <h2 class="card-title">{{trans('category.edit')}}</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="{{route('admin')}}"
                                       class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs">{{trans('home.back')}}</span></a>
                                </div>
                            </div>
                        </div>

                        @include('Error.message')
                        @if(count($result) > 1)
                                <form action="{{route('put-category-edit',$result[0]['productcategoryid'])}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-header with-border">
                                                <h3 class="card-title">Korean <img alt="Korean" title=""
                                                                                   src="{{asset('backend/assets/data/language/flag_uk.png')}}"
                                                                                   style=" width:20px; height:20px;">
                                                </h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row  ">
                                                    <label for="ko_name" class="col-sm-2 col-form-label">카테고리 이름 <span
                                                            class="ko_name" title="ko_name"><i class="fa fa-coffee"
                                                                                       aria-hidden="true"></i></span></label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                            </div>
                                                            <input type="text" id="ko_name" name="ko_name"
                                                                   value="{{$result[1]['name']}}" class="form-control ko_name" placeholder="">
                                                        </div>
                                                        <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 200 characters
</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row  ">
                                                    <label for="ko_keyword" class="col-sm-2 col-form-label">키워드
                                                        <span
                                                            class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                       aria-hidden="true"></i></span></label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                            </div>
                                                            <input type="text" id="ko_keyword" name="ko_keyword"
                                                                   value="{{$result[1]['keyword']}}" class="form-control ko_keyword"
                                                                   placeholder="">
                                                        </div>
                                                        <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 200 characters
</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row  ">
                                                    <label for="ko_description" class="col-sm-2 col-form-label">카테고리 설명
                                                        <span class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                         aria-hidden="true"></i></span></label>
                                                    <div class="col-sm-8">
                                                <textarea type="text" id="ko_description"
                                                          name="ko_description"
                                                          class="form-control ko_description"
                                                          placeholder="">{{$result[1]['description']}}</textarea>
                                                        <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 300 characters
</span>
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
                                                    <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row  ">
                                                    <label for="vi_name" class="col-sm-2 col-form-label">Tên danh mục <span
                                                            class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                       aria-hidden="true"></i></span></label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                            </div>
                                                            <input type="text" id="vi_name" name="vi_name"
                                                                   value="{{$result[0]['name']}}" class="form-control vi_name" placeholder="">
                                                        </div>
                                                        <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 200 characters
</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row  ">
                                                    <label for="vi_keyword" class="col-sm-2 col-form-label">Từ khóa
                                                        <span
                                                            class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                       aria-hidden="true"></i></span></label>
                                                    <div class="col-sm-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                            </div>
                                                            <input type="text" id="vi_keyword" name="vi_keyword"
                                                                   value="{{$result[0]['keyword']}}" class="form-control vi_keyword"
                                                                   placeholder="">
                                                        </div>
                                                        <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 200 characters
</span>
                                                    </div>
                                                </div>
                                                <div class="form-group row  ">
                                                    <label for="vi_description" class="col-sm-2 col-form-label">Mô tả
                                                        <span class="seo" title="SEO"><i class="fa fa-coffee"
                                                                                         aria-hidden="true"></i></span></label>
                                                    <div class="col-sm-8">
                                                <textarea type="text" id="vi_description"
                                                          name="vi_description"
                                                          class="form-control vi_description"
                                                          placeholder="">{{$result[0]['description']}}</textarea>
                                                        <span class="form-text">
<i class="fa fa-info-circle"></i> Maximum 300 characters
</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row  ">
                                            <label for="image" class="col-sm-2 col-form-label">{{trans('category.image')}}</label>
                                            <div class="col-sm-8">
                                                <input type="file" onchange="readURL(this);" name="image"/>
                                                <img id="blah" src="{{asset('upload/category/'.$result[0]['image'])}}" alt="your image"/>
                                            </div>
                                        </div>
                                        <div class="form-group row  ">
                                            <label for="sort" class="col-sm-2 col-form-label">{{trans('category.type')}}</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">

                                                    <select class="form-control" name="type">
                                                        <option value="1" @if($result[0]['typeid'] == 1) selected @endif>
                                                            {{trans('category.product')}}</option>
                                                        <option value="0" @if($result[0]['typeid'] == 0) selected @endif>
                                                            {{trans('category.new')}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group  row">
                                            <label for="status" class="col-sm-2 col-form-label">{{trans('category.status')}}</label>
                                            <div class="col-sm-8">
                                                <input name="status" id="status" @if($result[0]['status'] == 1) checked @endif type="checkbox">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer row" id="card-footer">
                                        <div class="col-md-2">
                                        </div>
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

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
