@extends('Admin_cp.Layout.master')
@section('title',trans('video.title'))
@section('content')
    <style>
        video
        {
            border: 1px solid black;
            display: block;
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans('video.list-video')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('video.list-video')}}</li>
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
                                            <input type="text" name="keyword" class="form-control rounded-0 float-right"
                                                   placeholder="{{trans('user.find-name')}}" value="">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fas fa-search"></i></button>
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
                                    <a href="{{route('get-video-create')}}"
                                       class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                                        <i class="fa fa-plus" title="Thêm mới"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="float-left">
                                <div class="menu-left">
                                    <span class="btn btn-flat btn-primary grid-refresh" title="Làm mới"><i
                                            class="fas fa-sync-alt"></i></span>
                                </div>
{{--                                <div class="menu-left">--}}
{{--                                    <div class="input-group float-right ml-1" style="width: 350px;">--}}
{{--                                        <div class="btn-group">--}}
{{--                                            <select class="form-control rounded-0 float-right" id="order_sort">--}}
{{--                                                <option value="id__desc">ID giảm dần</option>--}}
{{--                                                <option value="id__asc">ID tăng dần</option>--}}
{{--                                                <option value="username__desc">username theo thứ tự z-a</option>--}}
{{--                                                <option value="alpha__asc">username theo thứ tự a-z</option>--}}
{{--                                                <option value="name__desc">Tên theo thứ tự z-a</option>--}}
{{--                                                <option value="name__asc">Tên theo thứ tự a-z</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="input-group-append">--}}
{{--                                            <button id="button_sort" type="submit" class="btn btn-primary"><i--}}
{{--                                                    class="fas fa-sort-amount-down-alt"></i></button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="card-body p-0" id="pjax-container">
                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>{{trans('video.name')}}</th>
                                        <th>{{trans('video.link')}}</th>
                                        <th>{{trans('video.status')}}</th>
                                        <th>{{trans('video.action')}}</th>
                                    </tr>
                                    </thead>
                                    @if($videos)
                                            <?php $i = 1; ?>
                                        <tbody>
                                        @foreach($videos as $video)
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$video->name}}</td>
                                                <td>
                                                    <div class="video-container">
                                                        <video id="video" width="300" src="{{asset('upload/video/'.$video->video)}}" height="300" controls></video>
                                                    </div>
                                                </td>
                                                <td>{{$video->status == 1 ? "Kích hoạt" : "Chưa kích hoạt"}}</td>
                                                <td>
                                                    <a href="{{route('get-video-edit',['id'=>$video->id])}}">
<span title="Edit" type="button" class="btn btn-flat btn-sm btn-primary">
<i class="fa fa-edit"></i>
</span>
                                                    </a>
                                                    <span onclick="deleteItem({{$video->id}});" title="Xóa"
                                                          class="btn btn-flat btn-sm btn-danger">
<i class="fas fa-trash-alt"></i>
</span>

                                                </td>

                                            </tr>
                                                <?php $i++ ?>
                                        @endforeach
                                        </tbody>
                                    @endif
                                </table>

                            </div>
                            {{$videos->links("pagination::bootstrap-4")}}
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
        $('.grid-trash').on('click', function () {
            let ids = selectedRows().join();
            deleteItem(ids);
        });

        function deleteItem(ids) {
            Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true,
            }).fire({
                title: '{{trans('video.delete-notifi')}}',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{trans('video.yes')}}',
                confirmButtonColor: "#DD6B55",
                cancelButtonText: '{{trans('video.no')}}',
                reverseButtons: true,

                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $.ajax({
                            method: 'get',
                            url: '{{route('delete-video',':id')}}'.replace(':id', ids),
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
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    toastr.error('Xóa không thành công')
                }
            })
        }
    </script>
@endsection
