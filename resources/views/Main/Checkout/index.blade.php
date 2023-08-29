@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')
    <style>
        .order {
            background-color: #4fb68b;
            color: #fff;
            display: block;
            width: 100%;
            font-weight: 700;
            letter-spacing: 1px;
            line-height: 1;
            padding: 18px 20px;
            text-align: center;
            text-transform: uppercase;
            border-radius: 50px;
        }

        .order:hover {
            background: #253237;
            color: #fff;
        }
    </style>
    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
    </section>
    <!-- Breadcrumb Area End -->

    <div class="checkout-area mt-60px mb-40px">
        <div class="container">
            @include('Error.message')
            @php $orderId = \Nette\Utils\Random::generate(10) @endphp
            <form method="post" action="{{route('post-checkout')}}">
                @csrf
                <div class="row">

                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3>{{trans("checkout.detail")}}</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>{{trans("checkout.fullname")}} *</label>
                                        <input type="text" name="name" required
                                               value="{{\Illuminate\Support\Facades\Auth::user()->name ?? ""}}"
                                               >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>{{trans("checkout.email")}} *</label>
                                        <input type="email" name="email" required
                                               value="{{\Illuminate\Support\Facades\Auth::user()->email ?? ""}}"
                                              >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>{{trans("checkout.phone")}} *</label>
                                        <input type="text" name="phone" required
                                               value="{{\Illuminate\Support\Facades\Auth::user()->phone ?? ""}}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label>{{trans("checkout.province")}} *</label>
                                    <select id="province" class="nice-select" name="province" required></select>
                                </div>

                                <div class="col-lg-12">
                                    <label>{{trans("checkout.district")}} *</label>
                                    <select id="district" class="nice-select" name="district" required></select>
                                </div>
                                <div class="col-lg-12">
                                    <label>{{trans("checkout.ward")}} *</label>
                                    <select id="ward" class="nice-select" name="ward" required></select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>{{trans("checkout.street")}} *</label>
                                        <input type="text" name="street" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>{{trans("checkout.address")}} *</label>
                                        <input type="text" name="address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="additional-info-wrap">
                                <h4>{{trans("checkout.moreinfo")}}</h4>
                                <div class="additional-info">
                                    <label>{{trans("checkout.note")}}</label>
                                    <textarea placeholder="Ghi chú về đơn đặt hàng của bạn" name="note"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="your-order-area">
                            <h3>{{trans("checkout.order")}}</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li>{{trans("checkout.product")}}</li>
                                            <li>{{trans("checkout.price")}}</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                            @php $total_product = 0 @endphp
                                            @if(session('cart'))
                                                @foreach(session('cart') as $id => $details)
                                                    @php $total_product = $details['price'] * $details['quantity'] @endphp
                                                    <li><span
                                                            class="order-middle-left">{{$details['name']}} & Size: {{$details['size']}} X <strong>{{$details['quantity']}}</strong></span>
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
                                                <h5>{{trans('checkout.totalShipping')}}</h5>
                                            </div>
                                            @if($ships)
                                                @foreach($ships as $ship)
                                                    <div class="total-shipping form-group">
                                                        <ul>
                                                            <li data-price="{{intval($total) > intval($ship->price_free) ? 0 : intval($ship->price)}}">
                                                                <input type="radio"
                                                                       name="ship"
                                                                       value="{{$ship->id}}"> {{$ship->translate->name}}
                                                            </li>
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
                                            <li class="order-total">{{trans("checkout.totalmoney")}}</li>
                                            <li class="totalProduct">{{number_format($total)}} VNĐ</li>
                                            <input type="hidden" value="{{$total}}" name="total" id="total">
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion element-mrg">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel payment-accordion">
                                                <div class="panel-heading" id="method-one">
                                                    <h4 class="panel-title">
                                                        <input type="radio" name="payment" id="payment"
                                                               value="Chuyển ngân hàng"> Chuyển khoản ngân hàng
                                                    </h4>
                                                </div>
                                                <div id="method1" class="panel-collapse collapse">
                                                    <p>Chủ tài khoản:</p>
                                                    <p>Số tài khoản:</p>
                                                    <p>Ngân hàng:</p>
                                                    <p>Vui lòng chuyển khoản với nội dung:
                                                        <strong>ORDER_{{$orderId}}</strong></p>
                                                    <input type="hidden" name="orderid" value="ORDER_{{$orderId}}">
                                                </div>
                                            </div>
                                            <div class="panel payment-accordion">
                                                <div class="panel-heading" id="method-two">
                                                    <h4 class="panel-title">
                                                        <input type="radio" name="payment" id="payment"
                                                               value="Thanh toán trả tiền"> Nhận hàng trả tiền
                                                    </h4>
                                                </div>
                                                <div id="method2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Bạn sẽ được nhận hàng. Kiểm tra hàng và thanh toán</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order mt-25">
                                <button class="btn btn-primary order"
                                        type="submit">{{trans("checkout.processorder")}}</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
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
                    let html = '<option disabled selected>Chọn tỉnh/thành phố</option>'
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
                        let html = '<option disabled selected>Chọn quận huyện</option>'
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
                        let html = '<option disabled selected>Chọn xã/phường</option>'
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
            $('input[name="payment"]').click(function () {
                let valueRadio = $(this).is(':checked');
                if (valueRadio) {
                    if ($(this).val() === "Chuyển ngân hàng") {
                        $('#method1').css('display', 'block');
                        $('#method2').css('display', 'none');
                    } else {
                        $('#method2').css('display', 'block');
                        $('#method1').css('display', 'none');
                    }


                }

            });
            $('input[name="ship"]').click(function () {
                let valueRadio = $(this).is(':checked');
                let total = $('#total').val();
                if (valueRadio) {
                    let selectedPrice = $(this).parent().data('price');
                    let totalProduct = parseInt(total) + parseInt(selectedPrice);
                    // $('.totalProduct').html(totalProduct+" VNĐ");
                    $.ajax({
                        url: '{{route('format-number',':number')}}'.replace(':number',totalProduct),
                        method: 'GET',
                        success: function(response) {
                            $('.totalProduct').html(response);
                        }
                    });
                }

            });

        });
    </script>
@endsection
