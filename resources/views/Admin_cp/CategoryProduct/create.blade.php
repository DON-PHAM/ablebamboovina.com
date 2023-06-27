@extends('Admin_cp.Layout.master')
@section('title',trans('category.title'))
@section('content')
    <!--page title start-->
    <div class="page-heading">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="page-breadcrumb">
                        <h1>{{trans('category.list-category-product')}}</h1>
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
        <!-- state start-->
        <div class="row">
            <div class=" col-sm-12">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="card-title">
                                Vietnamese
                            </div>
                        </div>
                        @include('Error.message')
                        <form method="POST" action="{{route('post-category-create')}}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name (*)</label>
                                    <input type="text" class="form-control" id="vi_category"
                                           placeholder="category vietnamese" name="vi_name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="text" class="form-control" id="vi_description" name="vi_description"
                                           placeholder="description vietnamese">
                                </div>
                            </div>
                            <div class="card-header">
                                <div class="card-title">
                                    Korean
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name (*)</label>
                                    <input type="text" class="form-control" id="ko_category"
                                           placeholder="category korean" name="ko_name">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="text" class="form-control" id="ko_description" name="ko_description"
                                           placeholder="description korean">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Active</label>
                                    <input type="checkbox" class="" id="status" name="status"
                                           >
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>

                            </div>


                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
