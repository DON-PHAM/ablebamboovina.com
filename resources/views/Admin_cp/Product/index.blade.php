@extends('Admin_cp.Layout.master')
@section('title',trans('product.list-product'))
@section('content')
    <style>
        .checkbox{
            cursor: pointer;
        }

        .checkbox {
            display: flex;
            appearance: none;
            border-radius: 1rem;
            background: linear-gradient(to right, #900 25%, transparent 25%, transparent 75%, #090 75%, #090 100%),
            linear-gradient(to bottom, #555, #876);
            background-size: 200% 100%, 100% 100%;
        }

        .checkbox::before,
        .checkbox::after {
            display: flex;
            position: relative;
            font-size: 11px;
            line-height: 1.25;
            margin: .5rem;
        }
        .checkbox::before {
            content: 'OFF';
        }
        .checkbox::after {
            content: 'ON';
        }
        .checkbox:not(:checked) {
            background-position: 0 0;
            transition: all 250ms ease-out;
        }
        .checkbox::before {
            color: #FC9;
            text-shadow: 2px 3px 2px rgba(0,0,0,.25);
            transition: all 75ms ease-in 100ms;
        }

        .checkbox::after {
            color: fade(white, 40);
            transition: all 75ms ease-in 100ms;
        }


        .checkbox:checked {
            background-position: 100% 0;
            transition: all 150ms ease-in;
        .checkbox::before {
            color: fade(white, 40);
            transition: all 75ms ease-in 100ms;
        }

        .checkbox::after {
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
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans("product.list-product")}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans("home.home")}}</a></li>
                        <li class="breadcrumb-item active">{{trans("product.list-product")}}</li>
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
                                       class="btn btn-success btn-flat" title="{{trans('product.add')}}" id="button_create_new">
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
                                        <th>{{trans('product.image')}}</th>
                                        <th>{{trans('product.name')}}</th>
                                        <th>{{trans('product.category')}}</th>
                                        <th>{{trans('product.cost-price')}}</th>
                                        <th>{{trans('product.promotion-price')}}</th>
                                        <th>{{trans('product.bran')}}</th>
                                        <th>{{trans('product.status')}}</th>
                                        <th>{{trans('product.hot')}}</th>
                                        <th>{{trans('product.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($products)
                                        @foreach($products as $product)
                                            <tr data-id="{{$product->id}}">
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
                                                <td><img alt="{{$product->translate->name ?? ""}}" title=""
                                                         src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                                         style=" width:50px; height:50px;"></td>
                                                <td>{{$product->translate->name ?? ""}}</td>
                                                <td>{{$product->category->name ?? ""}}</td>
                                                <td>{{ number_format(round($product->price), 0, ',', '.') }}</td>
                                                <td>{{number_format($product->price - ($product->price*$product->discount/100), 0, ',', '.')}}</td>
                                                <td>{{$product->branch->name ?? ""}}</td>
                                                <td>
                                                    <input type="checkbox" class="status checkbox" id="status" name="status"  @if($product->status == 1) checked @endif>

                                                </td>
                                                <td>
                                                    <input type="checkbox" class="hot checkbox" id="hot" name="hot"  @if($product->hot == 1) checked @endif>

                                                </td>
                                                <td>
                                                    <a href="{{route('get-product-edit',$product->id)}}">
                                                        <span title="{{trans('product.edit')}}" type="button" class="btn btn-flat btn-sm btn-primary">
                                                        <i class="fa fa-edit"></i>
                                                        </span>
                                                    </a>
                                                    <span onclick="deleteItem({{$product->id}});"
                                                          title="{{trans('product.delete')}}"
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
                title: '{{trans('product.message-delete')}}?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '{{trans('product.yes')}}',
                confirmButtonColor: "#DD6B55",
                cancelButtonText: '{{trans('product.no')}}',
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
        $('.status').change(function(event) {
            let row = event.target.closest('tr');
            let id = row.getAttribute('data-id');
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
