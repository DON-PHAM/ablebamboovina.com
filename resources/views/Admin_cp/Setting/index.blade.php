@extends('Admin_cp.Layout.master')
@section('title',trans('product.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-edit" aria-hidden="true"></i> Thiết lập tài khoản
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thiết lập tài khoản</li>
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
                                    <a href="{{route('')}}" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs"> Trở lại danh sách</span></a>
                                </div>
                            </div>
                        </div>


                        <form action="" method="post"
                              accept-charset="UTF-8" class="form-horizontal" id="form-main"
                              enctype="multipart/form-data">
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
                                                <input type="text" id="name" name="name" value="Test"
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
                                                <input type="text" disabled="" id="username" value="test"
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
                                                <input type="text" disabled="" id="email" value="test@gmail.com"
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
                                                    src="https://demo.s-cart.org/"></div>
                                        </div>
                                    </div>
                                    <div class="form-group  row ">
                                        <label for="password" class="col-sm-2  control-label">Mật khẩu</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="password" id="password" name="password" value=""
                                                       class="form-control password" placeholder="">
                                            </div>
                                            <span class="form-text">
<i class="fa fa-info-circle"></i> Để trống nếu không muốn thay đổi mật khẩu
</span>
                                        </div>
                                    </div>
                                    <div class="form-group  row ">
                                        <label for="password" class="col-sm-2  control-label">Xác nhận mật khẩu</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i
                                                            class="fas fa-pencil-alt"></i></span>
                                                </div>
                                                <input type="password" id="password_confirmation"
                                                       name="password_confirmation" value=""
                                                       class="form-control password_confirmation" placeholder="">
                                            </div>
                                            <span class="form-text">
<i class="fa fa-info-circle"></i> Để trống nếu không muốn thay đổi mật khẩu
</span>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="roles" class="col-sm-2  control-label">Chọn vai trò</label>
                                        <div class="col-sm-8">
                                            <span class="badge badge-primary">Group only View</span>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label for="permission" class="col-sm-2  control-label">Chọn quyền hạn</label>
                                        <div class="col-sm-8">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
