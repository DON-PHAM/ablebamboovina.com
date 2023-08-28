@extends('Admin_cp.Layout.master')
@section('title',trans('checkout.list'))
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fa fa-indent" aria-hidden="true"></i> {{trans("checkout.list")}}
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> {{trans("home.home")}}</a></li>
                        <li class="breadcrumb-item active">{{trans("checkout.list")}}</li>
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
                                        <div class="input-group float-left">
                                            <div style="width:130px">
                                                <div class="form-group">
                                                    <label>Từ:</label>
                                                    <div class="input-group">
                                                        <input type="text" name="from_to" id="from_to"
                                                               class="form-control input-sm date_time rounded-0 hasDatepicker"
                                                               data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    </div>
                                                </div>
                                            </div> &nbsp;
                                            <div style="width:130px">
                                                <div class="form-group">
                                                    <label>Đến:</label>
                                                    <div class="input-group">
                                                        <input type="text" name="end_to" id="end_to"
                                                               class="form-control input-sm date_time rounded-0 hasDatepicker"
                                                               data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                    </div>
                                                </div>
                                            </div> &nbsp;
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="float-left">
                            </div>

                        </div>

                        <div class="card-body p-0" id="pjax-container">
                            <div class="table-responsive">
                                <table class="table table-hover box-body text-wrap table-bordered">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th><i class="fas fa-envelope" aria-hidden="true"
                                               title="{{trans('checkout.email')}}"></i></th>
                                        <th><i class="fa fa-shopping-cart" aria-hidden="true"
                                               title="{{trans('checkout.money')}}"></i>
                                        </th>
                                        <th><i class="fa fa-truck" aria-hidden="true"
                                               title="{{trans('checkoout.shipmoney')}}"></i></th>
                                        <th><i class="fa fa-tags" aria-hidden="true"
                                               title="{{trans('checkout.discount')}}"></i></th>
                                        <th><i class="fas fa-coins" aria-hidden="true"
                                               title="{{trans('checkout.totalmoney')}}"></i></th>
                                        <th><i class="fa fa-credit-card" aria-hidden="true"
                                               title="{{trans('checkout.paymentmethod')}}"></i>
                                        </th>
                                        <th>{{trans('checkout.status')}}</th>
                                        <th>{{trans('checkout.ordercreated')}}</th>
                                        <th>{{trans('checkout.action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody class="data-order">
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
                                                            title="{{trans('checkout.view')}}" type="button"
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
@section('script')
    <script>
        $(document).ready(function () {
            $(".date_time").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
@endsection
