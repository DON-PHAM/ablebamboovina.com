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
                        <a href="{{route('get-category-create')}}" class="btn btn-danger">{{trans('home.add')}}</a>
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
                        <table id="userTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>{{trans('category.name')}}</th>
                                <th>{{trans('category.description')}}</th>
                                <th>{{trans('category.status')}}</th>
                                <th>{{trans('category.active')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if($categories)
                                @foreach($categories as $item  )
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->status ? "Active" : "InActive"}}</td>
                                        <td>
                                            <a href="{{route('get-category-edit', ['id' => $item->productcategoryid])}}"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('delete-category-edit', ['id' => $item->productcategoryid])}}"><i class="mdi mdi-trash-can-outline"></i></a>

                                        </td>
                                    </tr>

                                @endforeach
                            @endif

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(session('success'))
        toastr.success('{{ session('success') }}')
        @endif
    </script>
@endsection
