@extends('Admin_cp.Layout.master')
@section('title',trans('ship.title'))
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="" aria-hidden="true"></i> {{trans('ship.title')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('ship.title')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                   <a class="btn btn-primary" href="{{route('get-ship-create')}}"><i class="fa fa-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body" id="pjax-container">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                        <tr>
                                            <th>{{trans('ship.name')}}</th>
                                            <th>{{trans('ship.code')}}</th>
                                            <th>{{trans('ship.price')}}</th>
                                            <th>{{trans('ship.price_free')}}</th>
                                            <th>{{trans('ship.status')}}</th>
                                            <th>{{trans('ship.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($ships)
                                            @foreach($ships as $ship)
                                            <tr>
                                                <td>{{$ship->translate->name}}</td>
                                                <td>{{$ship->code}}</td>
                                                <td>{{number_format($ship->price)}}</td>
                                                <td>{{number_format($ship->price_free)}}</td>
                                                <td>
                                                    @if($ship->status == 1)
                                                        <span class="danger">{{trans('ship.active')}}</span>
                                                    @else
                                                        <span class="danger">{{trans('ship.inactive')}}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a
                                                        href="{{route('get-ship-edit',$ship->id)}}"><span
                                                            title="Cấu hình" class="btn btn-flat btn-primary"><i
                                                                class="fas fa-edit"></i></span>&nbsp;</a><span onclick="deleteItem({{$ship->id}});"
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
                            </div>
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
                            url: '{{route('delete-ship',':id')}}'.replace(':id',ids),
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
    </script>
@endsection
