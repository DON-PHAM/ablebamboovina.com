@extends('Admin_cp.Layout.master')
@section('title',trans('user.title'))
@section('content')
    <style>
        .avatar-wrapper {
            position: relative;
            height: 200px;
            width: 200px;
            margin: 50px auto;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 1px 1px 15px -5px black;
            transition: all .3s ease;
        }

        .avatar-wrapper:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .avatar-wrapper:hover .profile-pic {
            opacity: .5;
        }

        .profile-pic {
            height: 100%;
            width: 100%;
            transition: all .3s ease;
        }

        .profile-pic:after {
            font-family: FontAwesome;
            content: "\f007";
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            font-size: 190px;
            background: #ecf0f1;
            color: #34495e;
            text-align: center;
        }

        .upload-button {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .fa-arrow-circle-up {
            position: absolute;
            font-size: 234px;
            top: -17px;
            left: 0;
            text-align: center;
            opacity: 0;
            transition: all .3s ease;
            color: #34495e;
        }

        .upload-button:hover .fa-arrow-circle-up {
            opacity: .9;
        }

    </style>
    @include('Error.message')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{trans('user.create')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('user.create')}}</li>
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
                            <h2 class="card-title">{{trans('user.create')}}</h2>
                            <div class="card-tools">
                                <div class="btn-group float-right mr-5">
                                    <a href="{{route('user')}}" class="btn  btn-flat btn-default"
                                       title="List"><i class="fa fa-list"></i><span
                                            class="hidden-xs"> {{trans('user.back')}}</span></a>
                                </div>
                            </div>
                        </div>

                        <form action="{{route('post-user-create')}}" method="post" accept-charset="UTF-8"
                              class="form-horizontal" id="form-main" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group  row ">
                                    <label for="name" class="col-sm-2  control-label">{{trans('user.avatar')}}</label>
                                    <div class="col-sm-8">
                                        <div class="avatar-wrapper">
                                            <img class="profile-pic" src=""/>
                                            <div class="upload-button">
                                                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                            </div>
                                            <input class="file-upload" type="file" accept="image/*" name="avatar"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  row ">
                                    <label for="name" class="col-sm-2  control-label">{{trans('user.fullname')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="name" name="name" value="" class="form-control name"
                                                   placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  row ">
                                    <label for="username" class="col-sm-2  control-label">{{trans('user.user-name')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="username" name="username" value=""
                                                   class="form-control username" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  row ">
                                    <label for="email" class="col-sm-2  control-label">{{trans('user.email')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="email" name="email" value=""
                                                   class="form-control email" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group  row ">
                                    <label for="email" class="col-sm-2  control-label">{{trans('user.phone-number')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="phonenumber" name="phonenumber" value=""
                                                   class="form-control phonenumber" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  row ">
                                    <label for="password" class="col-sm-2  control-label">{{trans('user.password')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="password" id="password" name="password" value=""
                                                   class="form-control password" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  row ">
                                    <label for="password" class="col-sm-2  control-label">{{trans('user.role')}}</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <select class="form-control" name="role">
                                                <option value="1">Admin</option>
                                                <option value="0">User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="status" class="col-sm-2  control-label">{{trans('user.status')}}</label>
                                    <div class="col-sm-8">
                                        <section title=".slideThree">
                                            <!-- .slideThree -->
                                            <div class="slideThree">
                                                <input type="checkbox" id="status" name="status" />
                                            </div>
                                            <!-- end .slideThree -->
                                        </section>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer row">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            let readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function(){
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(".file-upload").click();
            });


        });
    </script>
@endsection
