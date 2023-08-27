@extends('Admin_cp.Layout.master')
@section('title','order.title')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans("order.list")}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="https://demo.s-cart.org/sc_admin"><i
                                    class="fa fa-home fa-1x"></i> {{trans("home.home")}}</a></li>
                        <li class="breadcrumb-item active">{{trans("order.list")}}</li>
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


                        <div class="card-body p-0" id="pjax-container">
                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th><i class="fas fa-envelope" aria-hidden="true" title="Email"></i></th>
                                        <th><i class="fa fa-shopping-cart" aria-hidden="true" title="Tiền hàng"></i>
                                        </th>
                                        <th><i class="fa fa-truck" aria-hidden="true" title="Vận chuyển"></i></th>
                                        <th><i class="fa fa-tags" aria-hidden="true" title="Giảm giá"></i></th>
                                        <th><i class="fas fa-coins" aria-hidden="true" title="Tổng tiền"></i></th>
                                        <th><i class="fa fa-credit-card" aria-hidden="true" title="Payment method"></i>
                                        </th>
                                        <th>Trạng thái</th>
                                        <th>Tạo lúc</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($checkouts)
                                        @foreach($checkouts as $checkout)
                                            <tr>
                                                <td>
                                                    <div class="icheckbox_square-blue" aria-checked="false"
                                                         aria-disabled="false" style="position: relative;"><input
                                                            class="checkbox grid-row-checkbox" type="checkbox"
                                                            data-id="O-JFhTD-8JA6e"
                                                            style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                        <ins class="iCheck-helper"
                                                             style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                    </div>
                                                </td>
                                                <td>{{$checkout->customer->email}}</td>
                                                <td>{{number_format($checkout->totalmoney)}} VNĐ</td>
                                                @php $ship = intval($checkout->totalmoney) > intval($checkout->ship->price_free) ? 0 : $checkout->ship->price  @endphp
                                                <td>{{number_format($ship)}} VNĐ</td>
                                                <td>{{$checkout->discount}} VNĐ</td>
                                                @php $totalMoney= intval($checkout->totalmoney) + intval($ship);   @endphp
                                                <td>{{number_format($totalMoney)}}</td>
                                                <td>{{$checkout->payment}}</td>
                                                <td><span class="badge badge-info">New</span></td>
                                                <td>{{$checkout->orderdate}}</td>
                                                <td>
                                                    <a href="{{route('show-checkout',$checkout->id)}}"><span
                                                            title="Chỉnh sửa" type="button"
                                                            class="btn btn-flat btn-sm btn-primary"><i
                                                                class="fa fa-eye"></i></span></a>&nbsp;
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <h3>No data</h3>
                                    @endif


                                    </tbody>
                                </table>
                            </div>
                            {{$checkouts->links("pagination::bootstrap-4")}}
                        </div>

                        <div class="card-footer clearfix">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
