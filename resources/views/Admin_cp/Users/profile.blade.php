@extends('Admin_cp.Layout.master')
@section('title',trans('user.profile'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-edit" aria-hidden="true"></i> {{trans('user.setting-user')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active"> {{trans('user.setting-user')}}</li>
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
                            <h2 class="card-title"></h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="{{route('admin')}}" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs"> Trở lại danh sách</span></a>
                                </div>
                            </div>
                        </div>

                        @if($user)
                            <form action="" method="post"
                                  accept-charset="UTF-8" class="form-horizontal" id="form-main"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="fields-group">
                                        <div class="form-group  row ">
                                            <label for="name" class="col-sm-2  control-label">Tên đầy đủ</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                    <input type="text" id="name" name="name" value="{{$user->name}}"
                                                           class="form-control name" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group  row ">
                                            <label for="username" class="col-sm-2  control-label">Tên đăng nhập</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                    <input type="text" disabled="" id="username"
                                                           value="{{$user->username}}"
                                                           class="form-control username" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group  row ">
                                            <label for="email" class="col-sm-2  control-label">Email</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                    </div>
                                                    <input type="text" disabled="true" id="email"
                                                           value="{{$user->email}}"
                                                           class="form-control email" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group  row ">
                                            <label for="avatar" class="col-sm-2  control-label">Hình đại diện</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" id="avatar" name="avatar" value=""
                                                           class="form-control input-sm avatar" placeholder="">
                                                    <span class="input-group-btn">
<a data-input="avatar" data-preview="preview_avatar" data-type="avatar" class="btn btn-primary lfm">
<i class="fa fa-image"></i> Chọn hình
</a>
</span>
                                                </div>
                                                <div id="preview_avatar" class="img_holder"><img
                                                        src="{{asset('upload/avatar/'.$user->avatar)}}"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="roles" class="col-sm-2  control-label">Vai trò</label>
                                            <div class="col-sm-8">
                                                @if($user->role == 1)
                                                    <span class="badge badge-primary">Admin</span>
                                                @else
                                                    <span class="badge badge-primary">User</span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="btn-group float-right">
                                        <button type="submit" class="btn btn-primary">Gửi</button>
                                    </div>
                                    <div class="btn-group float-left">
                                        <button type="reset" class="btn btn-warning">Làm lại</button>
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
