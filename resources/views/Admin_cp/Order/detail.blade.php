@extends('Admin_cp.Layout.master')
@section('title',trans('order.title-detail'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i> Chi tiết đơn hàng
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="https://demo.s-cart.org/sc_admin"><i
                                    class="fa fa-home fa-1x"></i> Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
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
                                <h3 class="card-title">Chi tiết đơn hàng #{{$checkout->id}}</h3>
                                <div class="card-tools not-print">
                                    <div class="btn-group float-right" style="margin-right: 0px">
                                        <a href="https://demo.s-cart.org/sc_admin/order"
                                           class="btn btn-flat btn-default"><i
                                                class="fa fa-list"></i>&nbsp;Trở lại danh sách</a>
                                    </div>
                                    <div class="btn-group float-right"
                                         style="margin-right: 10px;border:1px solid #c5b5b5;">
                                        <a class="btn btn-flat" target="_new" title="Invoice"
                                           href=""><i
                                                class="far fa-file-pdf"></i><span class="hidden-xs"> Hóa đơn</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="order-body">
                                <div class="col-sm-6">
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="td-title">Họ và tên:</td>
                                            <td><a href="#" class="updateInfoRequired editable editable-click"
                                                   data-title="Tên">{{$checkout->customer->name}}</a></td>
                                        </tr>

                                        <tr>
                                            <td class="td-title">Điện thoại:</td>
                                            <td><a href="#" class="updateInfoRequired editable editable-click"

                                                   data-title="Điện thoại">{{$checkout->customer->phone}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">Email:</td>
                                            <td>{{$checkout->customer->email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">Tỉnh/Thành:</td>
                                            <td><a href="#"
                                                   class="updateInfoRequired editable editable-click">{{$checkout->customer->province}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">Quận/Huyện:</td>
                                            <td><a href="#" class="updateInfoRequired editable editable-click"
                                                >{{$checkout->customer->District}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">Xã/Phường</td>
                                            <td><a href="#"
                                                   class="updateInfoRequired editable editable-click">{{$checkout->customer->ward}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">Đường</td>
                                            <td><a href="#"
                                                   class="updateInfoRequired editable editable-click">{{$checkout->customer->street}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-title">Địa chỉ</td>
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
                                            <td class="td-title">Trạng thái đơn hàng:</td>
                                            <td><a href="#" class="updateStatus editable editable-click">New</a></td>
                                        </tr>
                                        <tr>
                                            <td>Trạng thái vận chuyển:</td>
                                            <td><a href="#"
                                                   class="updateStatus editable editable-click">{{$checkout->shippingstatus == 0 ? "Not Send" : "Sent"}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trạng thái thanh toán:</td>
                                            <td><a href="#"
                                                   class="updateStatus editable editable-click">{{$checkout->payment}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phương thức vận chuyển:</td>
                                            <td><a href="#"
                                                   class="updateStatus editable editable-click">{{$checkout->shipTranslate->name}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phương thức thanh toán:</td>
                                            <td><a href="#"
                                                   class="updateStatus editable editable-click">{{$checkout->payment}}</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td> Tạo lúc:</td>
                                            <td>{{$checkout->orderdate}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-hover box-body text-wrap table-bordered">
                                        <tbody>
                                        <tr>
                                            <td class="td-title"><i class="far fa-money-bill-alt nav-icon"></i> Tiền tệ:
                                            </td>
                                            <td>VNĐ</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <form id="form-add-item" action="" method="">
                                <input type="hidden" name="_token" value="gUeDIP7PYOIq3azeyv6H52HfXAyInLu3I2Lu2Xyk">
                                <input
                                    type="hidden" name="order_id" value="O-JFhTD-8JA6e">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card collapsed-card">
                                            <div class="table-responsive">
                                                <table class="table table-hover box-body text-wrap table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Tên</th>
                                                        <th class="product_price">Giá</th>
                                                        <th class="product_qty">Số lượng</th>
                                                        <th class="product_total">Tổng tiền</th>
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
                                                <td class="td-title-normal">SubTotal:</td>
                                                <td style="text-align:right"
                                                    class="data-subtotal">{{number_format($checkout->totalmoney)}} VNĐ
                                                </td>
                                            </tr>
                                            <tr>
                                                @php $ship = intval($checkout->totalmoney) > intval($checkout->ship->price_free) ? 0 : $checkout->ship->price  @endphp

                                                <td>Shipping Standard:</td>
                                                <td style="text-align:right"><a href="#">{{number_format($ship)}} VNĐ</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Discount(-):</td>
                                                <td style="text-align:right"><a
                                                        href="#">{{number_format($checkout->discount)}}</a></td>
                                            </tr>
                                            <tr>
                                                <td>Other fee:</td>
                                                <td style="text-align:right"><a href="#">0 VNĐ</a></td>
                                            </tr>
                                            <tr style="background:#f5f3f3;font-weight: bold;">
                                                <td>Total:</td>
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
                                                <td class="td-title">Ghi chú:</td>
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

@endsection
