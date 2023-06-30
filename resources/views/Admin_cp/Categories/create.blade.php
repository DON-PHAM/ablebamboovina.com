@extends('Admin_cp.Layout.master')
@section('title',trans('category.title'))
@section('content')
    <!--page title start-->
    <div class="page-heading">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="page-breadcrumb">
                        <h1>{{trans('category.list-category-new')}}</h1>
                    </div>

                </div>
                <div class="col-md-6 justify-content-md-end d-flex">
                    <div class="breadcrumb_nav">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a class="parent-item" href="{{route('admin')}}">{{trans('home.home')}}</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">
                                {{trans('home.category-product')}}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page title end-->
    <div class="container-fluid">
        <form id="categoryPost" method="post" action="{{route('post-category-new-create')}}"
              class="right-text-label-form feedback-icon-form">
            @csrf
            <!-- state start-->
            <div class="row">
                <div class=" col-md-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Tiếng Việt
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="vi_name">Tên chuyên mục (*)</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="vi_name" name="vi_name"
                                           placeholder=""/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="vi_description">Mô tả chuyên mục</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="vi_description" name="vi_description"
                                           placeholder=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                한국인
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="">카테고리 이름 (*)</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="ko_name" name="ko_name"
                                           placeholder=""/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="">설명하다</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="ko_description" name="ko_description"
                                           placeholder=""/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 control-label"></label>
                                <div class="col-sm-5 ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="status" name="status"/>
                                            Active </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 ml-auto">
                                    <button type="submit" class="btn btn-info" name="signup1">
                                        SAVE
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(isset ($errors) && count($errors) > 0)

        @foreach($errors->all() as $error)
            toastr.error('{{ $error }}')
        @endforeach

        @endif
    </script>
@endsection
