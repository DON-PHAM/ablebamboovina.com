@extends('Admin_cp.Layout.master')
@section('title',trans('checkout.title-detail'))
@section('content')

    <style>
        #shipstatus a {
            border-bottom: dashed 1px #0088cc
        }
    </style>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i> {{trans('checkout.detail')}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans('home.home')}}</a></li>
                        <li class="breadcrumb-item active">{{trans('checkout.detail')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if($checkout)
                        <div class="card">
                            <div class="card-header with-border">
                                <h3 class="card-title">{{trans('checkout.detail')}} #{{$checkout->id}}</h3>
                                <div class="card-tools not-print">
                                    <div class="btn-group float-right" style="margin-right: 0px">
                                        <a href=""
                                           class="btn btn-flat btn-default"><i
                                                class="fa fa-list"></i>&nbsp;{{trans('home.back')}}</a>
                                    </div>
                                    <div class="btn-group float-right"
                                         style="margin-right: 10px;border:1px solid #c5b5b5;">
                                        <a class="btn btn-primary" data-toggle="modal"
                                           data-target="#exampleModalCenter"><i
                                                class="far fa-file-pdf"></i><span
                                                class="hidden-xs">{{trans('checkout.addorder')}}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="order-body">
                                <div class="col-sm-6">
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.fullname')}}:</td>
                                            <td><a href="#" class="updateInfoRequired editable editable-click"
                                                   data-title="Tên">{{$checkout->customer->name}}</a></td>
                                        </tr>

                                        <tr>
                                            <td class="td-title">{{trans('checkout.phone')}}:</td>
                                            <td><a href="#" class="updateInfoRequired editable editable-click"

                                                   data-title="Điện thoại">{{$checkout->customer->phone}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.email')}}:</td>
                                            <td>{{$checkout->customer->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.province')}}:</td>
                                            <td><a href="#"
                                                   class="updateInfoRequired editable editable-click">{{$checkout->customer->province}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.district')}}:</td>
                                            <td><a href="#" class="updateInfoRequired editable editable-click"
                                                >{{$checkout->customer->District}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.ward')}}</td>
                                            <td><a href="#"
                                                   class="updateInfoRequired editable editable-click">{{$checkout->customer->ward}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.street')}}</td>
                                            <td><a href="#"
                                                   class="updateInfoRequired editable editable-click">{{$checkout->customer->street}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.address')}}</td>
                                            <td><a href="#"
                                                   class="updateInfoRequired editable editable-click">{{$checkout->customer->address}}</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="td-title">{{trans('checkout.statusorder')}}:</td>
                                            <td><a href="#" class="updateStatus editable editable-click">New</a></td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('checkout.statusship')}}:</td>
                                            <td id="shipstatus">
                                                @if($checkout->shippingstatus == 0)
                                                    <a href="javascript:void(0)"
                                                       onclick="handleStatus({{$checkout->id}})"
                                                       class="updateStatus editable editable-click">Not
                                                        Send
                                                        <i class="fa fa-times show" aria-hidden="true"
                                                           title="Chưa xác nhận"></i>
                                                    </a>

                                                @else
                                                    <a href="javascript:void(0)"
                                                       onclick="handleStatus({{$checkout->id}})"
                                                       class="updateStatus editable editable-click">Send <i
                                                            class="fa fa-check hide" aria-hidden="true"
                                                            title="Đã xác nhận"></i></a>

                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('checkout.statuspayment')}}:</td>
                                            <td><a href="#"
                                                   class="updateStatus editable editable-click">{{$checkout->payment}}</a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('checkout.shipmethod')}}:</td>
                                            <td><a href="#"
                                                   class="updateStatus editable editable-click">{{$checkout->shipTranslate->name}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{trans('checkout.paymentmethod')}}:</td>
                                            <td><a href="#"
                                                   class="updateStatus editable editable-click">{{$checkout->payment}}</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> {{trans('checkout.ordercreated')}}</td>
                                            <td>{{$checkout->orderdate}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="td-title"><i
                                                    class="far fa-money-bill-alt nav-icon"></i> {{trans('checkout.unitmoney')}}
                                                :
                                            </td>
                                            <td>VNĐ</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form id="form-add-item" action="" method="">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card collapsed-card">
                                            <div class="table-responsive">
                                                <table class="table table-hover box-body text-wrap table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Tên</th>
                                                        <th class="product_price">{{trans('checkout.price')}}</th>
                                                        <th class="product_qty">{{trans('checkout.quantity')}}</th>
                                                        <th class="product_qty">Size</th>
                                                        <th class="product_total">{{trans('checkout.totalmoney')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($checkout->orderDetails as $orderDetail)
                                                        <tr>
                                                            <td>{{$orderDetail->product->name}}
                                                            </td>
                                                            <td class="product_price"><a
                                                                    href="#">{{number_format($orderDetail->price)}}</a>
                                                            </td>
                                                            <td class="product_qty">x <a
                                                                    href="#">{{$orderDetail->quantity}}</a>
                                                            </td>
                                                            <td class="product_qty"><a
                                                                    href="#">{{$orderDetail->size}}</a>
                                                            </td>
                                                            <td class="product_tax"><a
                                                                    href="#">{{number_format($orderDetail->total)}}</a>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card collapsed-card">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="td-title-normal">{{trans('checkout.money')}}:</td>
                                                <td style="text-align:right"
                                                    class="data-subtotal">{{number_format($checkout->totalmoney)}} VNĐ
                                                </td>
                                            </tr>
                                            <tr>
                                                @php $ship = intval($checkout->totalmoney) > intval($checkout->ship->price_free) ? 0 : $checkout->ship->price  @endphp

                                                <td>{{trans('checkout.totalShipping')}}:</td>
                                                <td style="text-align:right"><a href="#">{{number_format($ship)}}
                                                        VNĐ</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{trans('checkout.discount')}}:</td>
                                                <td style="text-align:right"><a
                                                        href="#">{{number_format($checkout->discount)}}</a></td>
                                            </tr>
                                            <tr>
                                                <td>{{trans('checkout.orther')}}:</td>
                                                <td style="text-align:right"><a href="#">0 VNĐ</a></td>
                                            </tr>
                                            <tr style="background:#f5f3f3;font-weight: bold;">
                                                <td>{{trans('checkout.totalmoney')}}:</td>
                                                <td style="text-align:right"
                                                    class="data-total">{{number_format(intval($checkout->totalmoney) + intval($ship))}}
                                                    VNĐ
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <table class="table table-hover box-body text-wrap table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="td-title">{{trans('checkout.note')}}:</td>
                                                <td>
                                                    <a href="#">{{$checkout->note}}</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <p><img src="{{session()->get('setting')->logo}}" width="100%"></p>
                    <h3 style="border-bottom: 7px dotted #eee;padding: 15px 0;">
                        Tổng tiền thu hộ: {{number_format(intval($checkout->totalmoney) + intval($ship))}} VNĐ
                    </h3>
                    <strong>Ghi chú: </strong>
                    <h5 style="border-bottom: 7px dotted #eee;padding: 15px 0;">Bên gửi:
                        <strong>{{session()->get('setting')->company}} - {{session()->get('setting')->phone}}
                            - {{session()->get('setting')->address}}</strong></h5>

                    <h5 style="border-bottom: 7px dotted #eee;padding: 15px 0;">Bên nhận:
                        <strong>{{$checkout->customer->name}} - {{$checkout->customer->phone}}
                            - {{$checkout->customer->address}},{{$checkout->customer->street}}
                            ,{{$checkout->customer->ward}},{{$checkout->customer->District}}
                            ,{{$checkout->customer->province}}</strong></h5>
                    <h5 style="border-bottom: 7px dotted #eee;padding: 15px 0;">Tên sản
                        phẩm: @foreach($checkout->orderDetails as $orderDetail)
                            {{$orderDetail->product->name.","}}
                        @endforeach </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        function handleStatus(id) {
            $('#shipstatus').empty()
            $.ajax({
                url:'{{route('change-ship-status',':id')}}'.replace(':id',id),
                dataType: 'JSON',
                method: 'GET',
                success: function (response) {
                    console.log(response.data);
                    if(response.status)
                    {
                        toastr.success("Change status ship successfully!")
                        if(response.data.shippingstatus)
                        {
                            $('#shipstatus').append('<a href="javascript:void(0)" onclick="handleStatus('+response.data.id+')" class="updateStatus editable editable-click">Send <i class="fa fa-check hide" aria-hidden="true" ></i></a>')
                        }
                        else {
                            $('#shipstatus').append('<a href="javascript:void(0)" onclick="handleStatus('+response.data.id+')" class="updateStatus editable editable-click">Not Send <i class="fa fa-times show" aria-hidden="true" ></i></a>')
                        }
                    }
                }
            })
        }
    </script>
@endsection
