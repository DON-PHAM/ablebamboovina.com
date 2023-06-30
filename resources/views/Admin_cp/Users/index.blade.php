@extends('Admin_cp.Layout.master')
@section('title',trans('user.title'))
@section('content')
    <!--page title start-->
    <div class="page-heading">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="page-breadcrumb">
                        <h1>{{trans('user.list-user')}}</h1>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#userModal"
                                data-whatever="@mdo" style="margin-bottom: 10px">
                            {{trans('home.add')}}
                        </button>
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
                                {{trans('home.user')}}
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
                                <th>{{trans('user.user-name')}}</th>
                                <th>{{trans('user.email')}}</th>
                                <th>{{trans('user.phone-number')}}</th>
                                <th>{{trans('user.status')}}</th>
                                <th>{{trans('user.active')}}</th>
                                <th>{{trans('user.role')}}</th>

                            </tr>
                            </thead>

                            <tbody>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">{{trans('user.user-info')}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form id="formData" enctype="multipart/form-data">

                                <div class="avatar-wrapper">
                                    <img class="profile-pic" src="" />
                                    <div class="upload-button">
                                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                    </div>
                                    <input class="file-upload" type="file" accept="image/*"/>
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">{{trans('user.email')}}</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.user-name')}}</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.fullname')}}</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.phone-number')}}</label>
                                    <input type="text" name="phonenumber" class="form-control" id="phonenumber">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.password')}}</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.role')}}</label>
                                    <select class="role form-control" id="role">
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">{{trans('user.active')}}</label>
                                    <input type="checkbox" name="status" class="" id="status">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        {{trans('home.close')}}
                                    </button>
                                    <button id="saveUser" type="submit" class="btn btn-primary">
                                        {{trans('home.save')}}
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
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
            loadTable();
            function loadTable() {
                $('#userTable').DataTable({
                    processing:true,
                    paging: true,
                    searching: false,
                    destroy: true,
                    ajax: '{{route('user-list')}}',
                    columns: [
                        {data: 'username', name: 'username'},
                        {data: 'email', name: 'email'},
                        {data: 'phonenumber', name: 'phonenumber'},
                        {
                            data: 'status', render: function (data) {
                                if (data == 1) {
                                    return "Active";
                                }
                                return "InActive";
                            }
                        },
                        {
                            data: 'role', render: function (data) {
                                if (data == 1) {
                                    return "Admin";
                                }
                                return "User";
                            }
                        },
                        {
                            data: 'id', render: function (data, row, type) {
                                return `<button data-id="${data}" class="btn btn-success">Edit</button> <button data-delete="${data}" class="btn btn-danger">Delete</button>`
                            }
                        }
                    ]
                })

            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('form#formData').on('submit', function () {
                let role = $('#role option:selected').val();
                // Lấy dữ liệu từ form
                let formData = new FormData(this);
                formData.append('image', $('input[type=file]')[0].files[0]);
                formData.append('role', role);

                // Gửi dữ liệu lên server
                $.ajax({
                    url: "{{route('post-user-create')}}",
                    method: "post",
                    data: formData,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.success) {
                            loadTable();
                            $('#userModal').modal('hide');
                        }
                    },
                    error: function (xhr, status, error) {

                    }
                });
            });
        });

    </script>

@endsection
