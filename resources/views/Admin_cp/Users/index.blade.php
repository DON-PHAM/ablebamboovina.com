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
                                data-whatever="@mdo">
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
                        <table id="bs4-table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>{{trans('user.user-name')}}</th>
                                <th>{{trans('user.email')}}</th>
                                <th>{{trans('user.phone-number')}}</th>
                                <th>{{trans('user.status')}}</th>
                                <th>{{trans('user.active')}}</th>

                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>
                                    <a href="" title="{{trans('user.edit')}}"><i class="fa fa-edit"></i></a>
                                    <a href="" title="{{trans('user.remove')}}"><i class="fa fa-remove"></i></a>
                                </td>

                            </tr>


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
                            <form id="formData">
                                <div class="avatar-wrapper">
                                    <img class="profile-pic" src=""/>
                                    <div class="upload-button">
                                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                    </div>
                                    <input class="file-upload" type="file" accept="image/*"/>
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">{{trans('user.email')}}</label>
                                    <input type="email" name="email" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.user-name')}}</label>
                                    <input type="text" name="username" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.phone-number')}}</label>
                                    <input type="text" name="phonenumber" class="form-control" id="recipient-name">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name"
                                           class="col-form-label">{{trans('user.password')}}</label>
                                    <input type="password" name="password" class="form-control" id="recipient-name">
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">{{trans('user.active')}}</label>
                                    <input type="checkbox" name="status" class="" id="recipient-name">
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                {{trans('home.close')}}
                            </button>
                            <button type="button" id="saveUser" class="btn btn-primary">
                                {{trans('home.save')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            @endsection
            @section('scripts')
                <script>
                    $(document).ready(function () {
                        loadTable();
                        var readURL = function (input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function (e) {
                                    $('.profile-pic').attr('src', e.target.result);
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        $(".file-upload").on('change', function () {
                            readURL(this);
                        });
                        $(".upload-button").on('click', function () {
                            $(".file-upload").click();
                        });

                        function loadTable() {
                            $.ajax({
                                url: '{{route('user-list')}}',
                                method: 'GET',
                                dataType: 'JSON',
                                success: function (response) {
                                    if (response.status) {
                                        let rows = '';
                                        $.each(response.data, function (index, value) {
                                            rows += '<tr>';
                                            rows += '';
                                            rows += '';
                                            rows += '';
                                            rows += '';
                                            rows += '<td><a href="" title="{{trans('user.edit')}}"><i class="fa fa-edit"></i></a><a href="" title="{{trans('user.remove')}}"><i class="fa fa-remove"></i></a></td>';
                                            rows += '</tr>'
                                        });
                                    }
                                },
                                error: function (xhr, status, error) {

                                }
                            });
                        };

                        $('#saveUser').click(function () {
                            let formData = $('#formData').serialize();
                            alert(formData);
                        });
                    });

                </script>

@endsection
