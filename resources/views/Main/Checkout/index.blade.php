@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
    </section>
    <!-- Breadcrumb Area End -->

    <div class="checkout-area mt-60px mb-40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Họ và tên</label>
                                    <input type="text" name="name"
                                           value="{{\Illuminate\Support\Facades\Auth::user()->name ?? ""}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Email</label>
                                    <input type="email"
                                           value="{{\Illuminate\Support\Facades\Auth::user()->email ?? ""}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Điện thoại</label>
                                    <input type="text" name="phone"
                                           value="{{\Illuminate\Support\Facades\Auth::user()->phone ?? ""}}">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <label>Tỉnh/TP</label>
                                <select id="province" class="nice-select"></select>
                            </div>

                            <div class="col-lg-12">
                                <label>Quận/Huyện</label>
                                <select id="district" class="nice-select"></select>
                            </div>
                            <div class="col-lg-12">
                                <label>Phường/xã</label>
                                <select id="ward" class="nice-select"></select>
                            </div>


                        </div>
                        <div class="additional-info-wrap">
                            <h4>Thông tin thêm</h4>
                            <div class="additional-info">
                                <label>Ghi chú đặt hàng</label>
                                <textarea placeholder="Ghi chú về đơn đặt hàng của bạn" name="message"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Đơn hàng</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Sản phẩm</li>
                                        <li>Thành tiền</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @php $total_product = 0 @endphp
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                @php $total_product = $details['price'] * $details['quantity'] @endphp
                                                <li><span
                                                        class="order-middle-left">{{$details['name']}} X {{$details['quantity']}}</span>
                                                    <span
                                                        class="order-price">{{number_format($total_product)}}VNĐ </span>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    @php $total = 0 @endphp
                                    @foreach((array)session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                    @if($ships)

                                        <div class="total-shipping">
                                            <h5>{{trans('cart.totalShipping')}}</h5>
                                        </div>
                                        @if($ships)

                                            @foreach($ships as $ship)

                                                <div class="total-shipping form-group">
                                                    <ul>
                                                    <li><input type="radio"
                                                                                   name="ship"> {{$ship->translate->name}}</li>
                                                    @if(intval($total) > intval($ship->price_free))
                                                       <li>Miễn phí</li>
                                                    @else
                                                        <li>{{number_format($ship->price)}}VNĐ</li>
                                                    @endif
                                                    </ul>
                                                </div>
                                            @endforeach

                                        @endif

                                    @endif

                                </div>
                                <div class="your-order-total">

                                    <ul>
                                        <li class="order-total">Tổng</li>
                                        <li>{{number_format($total)}}0VNĐ</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <a data-bs-toggle="collapse" data-parent="#accordion"
                                                       href="#method1">
                                                        Chuyển khoản ngân hàng
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>Ghi chú</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-two">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                       data-parent="#accordion" href="#method2">
                                                        Thanh toán khi nhận hàng
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Ghi chú</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <a class="btn-hover" href="{{route('invoice-page')}}">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajax({
                url: '{{route('province')}}',
                dataType: 'JSON',
                success: function (res) {
                    let html = '<option>Chọn tỉnh/thành phố</option>'
                    if (res.status) {
                        $.each((res.data), function (index, value) {
                            html += '<option value="' + value.code + '">' + value.name + '</option>'
                        });
                        $('#province').append(html);
                    }
                }
            });
            $('#province').change(function () {
                let province_code = $('#province option:selected').val();
                $('#district').empty();
                $('#ward').empty();
                $.ajax({
                    url: '{{route('district',':province_code')}}'.replace(':province_code', province_code),
                    method: 'get',
                    dataType: 'json',
                    success: function (res) {
                        let html = '<option>Chọn quận huyện</option>'
                        if (res.status) {
                            $.each((res.data), function (index, value) {
                                html += '<option value="' + value.code + '">' + value.name + '</option>'
                            });
                            console.log(html)
                            $('#district').append(html);
                        }
                    }
                })
            });
            $('#district').change(function () {
                let district_code = $('#district option:selected').val();
                $('#ward').empty();
                $.ajax({
                    url: '{{route('ward',':district_code')}}'.replace(':district_code', district_code),
                    method: 'get',
                    dataType: 'json',
                    success: function (res) {
                        let html = '<option>Chọn xã/phường</option>'
                        if (res.status) {
                            $.each((res.data), function (index, value) {
                                html += '<option value="' + value.code + '">' + value.name + '</option>'
                            });
                            console.log(html)
                            $('#ward').append(html);
                        }
                    }
                })
            });
        });
    </script>
@endsection
