@extends('Admin_cp.Layout.master')
@section('title',trans('post.title'))
@section('content')

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                            <i class="fa fa-indent" aria-hidden="true"></i> {{trans('post.list')}}
                        </h1>
                        <div class="more_info"></div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="h"><i class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                            <li class="breadcrumb-item active">{{trans('post.list')}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header with-border">
                                <div class="card-tools">
                                    <div class="menu-right">
                                        <form action="" id="button_search">
                                            <div class="input-group input-group" style="width: 350px;">
                                                <input type="text" name="keyword" class="form-control rounded-0 float-right" placeholder="Tìm tiêu đề" value="">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="float-left">
                                </div>

                            </div>
                            <div class="card-header with-border">
                                <div class="card-tools">
                                    <div class="menu-right">
                                        <a href="{{route('get-new-create')}}" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                                            <i class="fa fa-plus" title="Thêm mới"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="float-left">
                                    <div class="menu-left">
                                        <button type="button" class="btn btn-default grid-select-all"><i class="far fa-square"></i></button>
                                    </div>
                                    <div class="menu-left">
                                        <span class="btn btn-flat btn-danger grid-trash" title="Xóa"><i class="fas fa-trash-alt"></i></span>
                                    </div>
                                    <div class="menu-left">
                                        <div class="input-group float-right ml-1" style="width: 350px;">
                                            <div class="btn-group">
                                                <select class="form-control rounded-0 float-right" id="order_sort">
                                                    <option value="id__desc">ID giảm dần</option><option value="id__asc">ID tăng dần</option><option value="title__desc">Tiêu đề theo thứ tự z-a</option><option value="title__asc">Tiêu đề theo thứ tự a-z</option>
                                                </select>
                                            </div>
                                            <div class="input-group-append">
                                                <button id="button_sort" type="submit" class="btn btn-primary"><i class="fas fa-sort-amount-down-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0" id="pjax-container">
                                <div id="url-sort" data-urlsort="" style="display: none;"></div>
                                <div class="table-responsive">
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Tiêu đề</th>
                                            <th>Hình ảnh</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($posts)
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td>
                                                        <div class="icheckbox_square-blue" aria-checked="false"
                                                             aria-disabled="false" style="position: relative;"><input
                                                                class="checkbox grid-row-checkbox" type="checkbox"
                                                                data-id="980b670b-16ad-4f50-9a25-00aba5d45c1d"
                                                                style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper"
                                                                 style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                    </td>
                                                    <td>{{$post->translate->name}}</td>
                                                    <td><img alt="{{$post->translate->name}}" title="{{$post->translate->name}}"
                                                             src="{{asset('upload/post/'.$post->image)}}"
                                                             style=" width:50px;"></td>

                                                    <td>
                                                        @if($post->status == 1)
                                                            <span class="badge badge-success">ON</span>
                                                        @else
                                                            <span class="badge badge-success">OFF</span>
                                                        @endif

                                                    </td>
                                                    <td><a href="{{route('get-new-edit',$post->id)}}"><span title="Chỉnh sửa" type="button"
                                                                         class="btn btn-flat btn-sm btn-primary"><i
                                                                    class="fa fa-edit"></i></span></a>
                                                        <span onclick="deleteItem({{$post->id}});" title="Xóa"
                                                              class="btn btn-flat btn-sm btn-danger"><i
                                                                class="fas fa-trash-alt"></i></span>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif


                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="card-footer clearfix">
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
                title: '{{trans('post.delete')}}?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{trans('post.yes')}}',
                confirmButtonColor: "#DD6B55",
                cancelButtonText: '{{trans('$post.no')}}',
                reverseButtons: true,

                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            method: 'get',
                            url: '{{route('delete-new',':id')}}'.replace(':id',ids),
                            success: function (data) {
                                location.reload();
                            }
                        });
                    });
                }

            }).then((result) => {
                if (result.value) {
                    toastr.success('Xóa thành công');
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {

                }
            })
        }
        $('.status').change(function(event) {
            let row = event.target.closest('tr');
            let id = row.getAttribute('data-id');
            $.ajax({
                url:'{{route('change-status-new',':id')}}'.replace(':id',id),
                dataType:'json',
                method: 'get',
                success:function (response)
                {
                    if(response.status)
                    {
                        toastr.success('Thay đổi trạng thái thành công');
                    }
                }
            })
        })
        $('.hot').change(function(event) {
            let row = event.target.closest('tr');
            let id = row.getAttribute('data-id');
            $.ajax({
                url:'{{route('change-producthot-product',':id')}}'.replace(':id',id),
                dataType:'json',
                method: 'get',
                success:function (response)
                {
                    if(response.status)
                    {
                        toastr.success('Thay đổi trạng thái thành công');
                    }
                }
            })
        })
    </script>
@endsection
