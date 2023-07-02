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
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
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
                            <h3 class="card-title"><i class="fa fa-plus" aria-hidden="true"></i> {{trans('branch.add')}}</h3>
                        </div>

                        @include('Error.message')
                        <form action="{{route('post-branch-create')}}" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row ">
                                    <label for="name" class="col-sm-2 col-form-label">{{trans('branch.name-branch')}}</label>
                                    <div class="col-sm-10 ">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="name" name="name" value=""
                                                   class="form-control name ">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="phone" class="col-sm-2 col-form-label">{{trans('branch.phone-number')}}</label>
                                    <div class="col-sm-10 ">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="phone" id="phone" name="phone" value=""
                                                   class="form-control phone ">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="url" class="col-sm-2 col-form-label">{{trans('branch.website')}}</label>
                                    <div class="col-sm-10 ">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="website" name="website" value="" class="form-control website ">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="email" class="col-sm-2 col-form-label">{{trans('branch.email')}}</label>
                                    <div class="col-sm-10 ">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="email" id="email" name="email" value=""
                                                   class="form-control email ">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label for="address" class="col-sm-2 col-form-label">{{trans('branch.address')}}</label>
                                    <div class="col-sm-10 ">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                            </div>
                                            <input type="text" id="address" name="address" value=""
                                                   class="form-control address ">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="address" class="col-sm-2 col-form-label">{{trans('branch.status')}}</label>
                                    <div class="col-sm-10 ">
                                        <div class="input-group mb-3">
                                            <input type="checkbox" id="status" name="status"
                                                   class="form-control address ">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="reset" class="btn btn-warning">{{trans('home.reset')}}</button>
                                <button type="submit" class="btn btn-primary float-right">{{trans('home.save')}}</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-th-list"></i> {{trans('branch.branch-list')}}</h3>
                        </div>
                        <div class="card-body p-0">
                            <section id="pjax-container" class="table-list">
                                <div class="box-body table-responsivep-0">
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th>{{trans('branch.name-branch')}}</th>
                                            <th>{{trans('branch.phone-number')}}</th>
                                            <th>{{trans('branch.email')}}</th>
                                            <th>{{trans('branch.status')}}</th>
                                            <th>{{trans('branch.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($branchs)
                                            @foreach($branchs as $branch)
                                                <tr class="">
                                                    <td>{{$branch->name}}</td>
                                                    <td>{{$branch->phone}}</td>
                                                    <td>{{$branch->email}}</td>
                                                    <td>@if($branch->status == 1)
                                                            <span class= "badge badge-success">on</span>
                                                        @else
                                                            <span class="badge badge-danger">on</span>
                                                        @endif</td>
                                                    <td>
                                                        <a href=""><span
                                                                title="Chỉnh sửa" type="button"
                                                                class="btn btn-flat btn-sm btn-primary"><i
                                                                    class="fa fa-edit"></i></span></a>&nbsp;
                                                        <span onclick="deleteItem({{$branch->id}});"
                                                              title="Xóa" class="btn btn-flat btn-sm btn-danger"><i
                                                                class="fas fa-trash-alt"></i></span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif


                                        </tbody>
                                    </table>
                                    {{$branchs->links("pagination::bootstrap-4")}}
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{asset('backend/assets/admin/plugin/jquery.pjax.js')}}"></script>
    <script>
        $('.grid-trash').on('click', function() {
            let ids = selectedRows().join();
            deleteItem(ids);
        });

        function deleteItem(ids){
            Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true,
            }).fire({
                title: '{{trans('branch.delete')}}',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{trans('branch.yes')}}',
                confirmButtonColor: "#DD6B55",
                cancelButtonText: '{{trans('branch.no')}}',
                reverseButtons: true,

                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            method: 'get',
                            url: '{{route('delete-branch-edit',':id')}}'.replace(':id',ids),
                            success: function (data) {
                                if(data.error == 1){
                                    location.reload();
                                }else{
                                    location.reload();
                                }

                            }
                        });
                    });
                }

            }).then((result) => {
                if (result.value) {
                   // alertMsg('success', 'Item này đã được xóa.', 'Đã xóa');
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    // swalWithBootstrapButtons.fire(
                    //   'Cancelled',
                    //   'Your imaginary file is safe :)',
                    //   'error'
                    // )
                }
            })
        }
    </script>
@endsection
