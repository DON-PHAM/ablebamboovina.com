@extends('Admin_cp.Layout.master')
@section('title',trans('product.title'))
@section('content')
    <style>
        #status{
            cursor: pointer;
        }

        #status {
            display: flex;
            appearance: none;
            border-radius: 1rem;
            background: linear-gradient(to right, #900 25%, transparent 25%, transparent 75%, #090 75%, #090 100%),
            linear-gradient(to bottom, #555, #876);
            background-size: 200% 100%, 100% 100%;
        }

        #status::before,
        #status::after {
            display: flex;
            position: relative;
            font-size: 11px;
            line-height: 1.25;
            margin: .5rem;
        }
        #status::before {
            content: 'OFF';
        }
        #status::after {
            content: 'ON';
        }
        #status:not(:checked) {
            background-position: 0 0;
            transition: all 250ms ease-out;
        }
        #status::before {
            color: #FC9;
            text-shadow: 2px 3px 2px rgba(0,0,0,.25);
            transition: all 75ms ease-in 100ms;
        }

        #status::after {
            color: fade(white, 40);
            transition: all 75ms ease-in 100ms;
        }


        #status:checked {
            background-position: 100% 0;
            transition: all 150ms ease-in;
        #status::before {
            color: fade(white, 40);
            transition: all 75ms ease-in 100ms;
        }

        #status::after {
            color: #9FC;
            text-shadow: 2px 3px 2px rgba(0,0,0,.25);
            transition: all 75ms ease-in 100ms;
        }

    </style>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> Danh sách sản phẩm
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
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
                                    <form action="#" id="button_search">
                                        <div class="input-group input-group float-left">
                                            <select class="form-control rounded-0 select2 select2-hidden-accessible"
                                                    name="category_id" id="category_id" data-select2-id="category_id"
                                                    tabindex="-1" aria-hidden="true">

                                            </select><span class="select2 select2-container select2-container--default"
                                                           dir="ltr" data-select2-id="1" style="width: 195px;"><span
                                                    class="selection"><span
                                                        class="select2-selection select2-selection--single"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-category_id-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-category_id-container" role="textbox"
                                                            aria-readonly="true"
                                                            title="Chọn danh mục">Chọn danh mục</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span> &nbsp;
                                            <input type="text" name="keyword" class="form-control rounded-0 float-right"
                                                   placeholder="Tìm tên và SKU" value="">
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
                                    <a href="{{route('get-product-create')}}"
                                       class="btn btn-success btn-flat" title="Tạo sản phẩm" id="button_create_new">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="float-left">
                                <div class="menu-left">
                                    <button type="button" class="btn btn-default grid-select-all"><i
                                            class="far fa-square"></i></button>
                                </div>
                                <div class="menu-left">
                                    <span class="btn btn-flat btn-danger grid-trash" title="Xóa"><i
                                            class="fas fa-trash-alt"></i></span>
                                </div>
                                <div class="menu-left">
                                    <span class="btn btn-flat btn-primary grid-refresh" title="Làm mới"><i
                                            class="fas fa-sync-alt"></i></span>
                                </div>
                                <div class="menu-left">
                                    <div class="input-group float-right ml-1" style="width: 350px;">
                                        <div class="btn-group">
                                            <select class="form-control rounded-0 float-right" id="order_sort">
                                                <option value="id__desc">ID giảm dần</option>
                                                <option value="id__asc">ID tăng dần</option>
                                                <option value="name__desc">Tên theo thứ tự z-a</option>
                                                <option value="name__asc">Tên theo thứ tự a-z</option>
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
                                        <th></th>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Danh mục</th>
                                        <th>Giá cost</th>
                                        <th>Giá</th>
                                        <th>Nhà cung cấp</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($products)
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    <div class="icheckbox_square-blue" aria-checked="false"
                                                         aria-disabled="false" style="position: relative;"><input
                                                            class="checkbox grid-row-checkbox" type="checkbox"
                                                            data-id="980b670b-3372-4335-ac8c-b4291e99e0f3"
                                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </td>
                                                <td><img alt="{{$product->translate->name}}" title=""
                                                         src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                                         style=" width:50px; height:50px;"></td>
                                                <td>{{$product->translate->name}}</td>
                                                <td>{{$product->category->name}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->$product*$product->discount/100}}</td>
                                                <td>{{$product->branch->name}}</td>
                                                <td>
                                                    <input type="checkbox" class="status" id="status" name="status" data-id="{{$product->id}}" @if($product->status == 1) checked @endif>
{{--                                                    @if($product->status == 1)--}}
{{--                                                        <span class="badge badge-success">ON</span>--}}
{{--                                                        @else--}}
{{--                                                        <span class="badge badge-danger">OFF</span>--}}
{{--                                                    @endif--}}
                                                </td>
                                                <td>
                                                    <a href="{{route('get-product-edit',$product->id)}}">
<span title="Sửa" type="button" class="btn btn-flat btn-sm btn-primary">
<i class="fa fa-edit"></i>
</span>
                                                    </a>
                                                    <span onclick="deleteItem({{$product->id}});"
                                                          title="Xóa"
                                                          class="btn btn-flat btn-sm btn-danger">
<i class="fas fa-trash-alt"></i>
</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif


                                    </tbody>
                                </table>
                            </div>
                            {{--                            {{$products->links("pagination::bootstrap-4")}}--}}
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
                title: 'Bạn có chắc chắn sẽ xóa người dùng này?',
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
                            method: 'get',
                            url: '{{route('delete-product',':id')}}'.replace(':id',ids),
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
        $('.status').change(function() {
            let id = $('#status').data('id');
            $.ajax({
                url:'{{route('change-status-product',':id')}}'.replace(':id',id),
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
