@extends('Admin_cp.Layout.master')
@section('title',trans('branch.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans('branch.branch-list')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('branch.branch-list')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-plus" aria-hidden="true"></i> {{trans('branch.add')}}
                            </h3>
                        </div>

                        @include('Error.message')
                        @if($bran)
                            <form action="{{route('post-branch-edit',$bran->id)}}" method="post" accept-charset="UTF-8"
                                  class="form-horizontal" id="form-main">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row ">
                                        <label for="name"
                                               class="col-sm-2 col-form-label">{{trans('branch.name-branch')}}</label>
                                        <div class="col-sm-10 ">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="text" id="name" name="name" value="{{$bran->name}}"
                                                       class="form-control name ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label for="phone"
                                               class="col-sm-2 col-form-label">{{trans('branch.phone-number')}}</label>
                                        <div class="col-sm-10 ">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="phone" id="phone" name="phone" value="{{$bran->phone}}"
                                                       class="form-control phone ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="url"
                                               class="col-sm-2 col-form-label">{{trans('branch.website')}}</label>
                                        <div class="col-sm-10 ">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="text" id="website" name="website" value="{{$bran->website}}"
                                                       class="form-control website ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="email"
                                               class="col-sm-2 col-form-label">{{trans('branch.email')}}</label>
                                        <div class="col-sm-10 ">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="email" id="email" name="email" value="{{$bran->email}}"
                                                       class="form-control email ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="address"
                                               class="col-sm-2 col-form-label">{{trans('branch.address')}}</label>
                                        <div class="col-sm-10 ">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="text" id="address" name="address" value="{{$bran->address}}"
                                                       class="form-control address ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row ">
                                        <label for="address"
                                               class="col-sm-2 col-form-label">{{trans('branch.status')}}</label>
                                        <div class="col-sm-10 ">
                                            <div class="input-group mb-3">
                                                <input type="checkbox" id="status" name="status"
                                                       class="form-control address " @if($bran->status == 1) checked @endif>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-warning">{{trans('home.reset')}}</button>
                                    <button type="submit"
                                            class="btn btn-primary float-right">{{trans('home.save')}}</button>
                                </div>

                            </form>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

