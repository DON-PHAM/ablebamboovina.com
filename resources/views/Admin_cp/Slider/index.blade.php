@extends('Admin_cp.Layout.master')
@section('title',trans('product.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> Danh sách banner
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách banner</li>
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
                                                   placeholder="Nhập từ khóa" value="">
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
                                    <a href="{{route('get-slider-create')}}"
                                       class="btn  btn-success  btn-flat" title="New" id="button_create_new">
                                        <i class="fa fa-plus" title="Thêm mới"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="float-left">
                                <div class="menu-left">
                                    <div class="input-group float-right ml-1" style="width: 350px;">
                                        <div class="btn-group">
                                            <select class="form-control rounded-0 float-right" id="order_sort">
                                                <option value="id__desc">ID giảm dần</option>
                                                <option value="id__asc">ID tăng dần</option>
                                            </select>
                                        </div>
                                        <div class="input-group-append">
                                            <button id="button_sort" type="submit" class="btn btn-primary"><i
                                                    class="fas fa-sort-amount-down-alt"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0" id="pjax-container">
                            <div id="url-sort" data-urlsort=""
                                 style="display: none;"></div>
                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tiêu đề</th>
                                        <th>URL</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($sliders)
                                        @foreach($sliders as $slider)
                                            <tr>
                                                <td><img alt="Banner" title=""
                                                         src="{{asset('upload/slider/'.$slider->image)}}"
                                                         style=" height:50px;"></td>
                                                <td>{{$slider->name}}</td>
                                                <td>{{$slider->url}}</td>
                                                <td>@if($slider->status == 1)
                                                        <span class="badge badge-success">On</span>
                                                    @else
                                                        <span class="badge badge-success">Off</span>
                                                @endif</td>
                                                <td>
                                                    <a href="{{route('get-slider-edit',$slider->id)}}"><span
                                                            title="Chỉnh sửa" type="button"
                                                            class="btn btn-flat btn-sm btn-primary"><i
                                                                class="fa fa-edit"></i></span></a>&nbsp;
                                                    <span onclick="deleteItem({{$slider->id}});"
                                                          title="Xóa" class="btn btn-flat btn-sm btn-danger"><i
                                                            class="fas fa-trash-alt"></i></span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                            {{$sliders->links("pagination::bootstrap-4")}}
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
                title: 'Bạn có chắc chắn sẽ xóa nó?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Có',
                confirmButtonColor: "#DD6B55",
                cancelButtonText: 'Không',
                reverseButtons: true,

                preConfirm: function() {
                    return new Promise(function(resolve) {
                        $.ajax({
                            method: 'post',
                            url: '{{route('post-slider-edit',':id')}}'.replace(':id',ids),

                            success: function (data) {
                                if(data.error == 1){

                                }else{
                                    location.reload();
                                }

                            }
                        });
                    });
                }

            }).then((result) => {
                if (result.value) {
                    alertMsg('success', 'Item này đã được xóa.', 'Đã xóa');
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
