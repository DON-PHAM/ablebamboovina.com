@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
    </section>
    <!-- Breadcrumb Area End -->
    <div class="cart-main-area mtb-60px">
        <div class="container">
            <h3 class="cart-page-title">{{trans('cart.title')}}</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>{{trans('cart.image')}}</th>
                                            <th>{{trans('cart.name')}}</th>
                                            <th>{{trans('cart.price')}}</th>
                                            <th>{{trans('cart.tempMoney')}}</th>
                                            <th>{{trans('cart.total')}}</th>
                                            <th>{{trans('cart.action')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody class="render-cart">
                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                @php $total = $details['price'] * $details['quantity'] @endphp
                                                <tr class="cart-item" data-id="{{$id}}">
                                                    <td class="product-thumbnail">
                                                        <a href="javascript:void(0)">
                                                            <img width="100"
                                                                 src="{{asset('upload/product/'.$details['code'].'/'.$details['image'])}}"
                                                                 alt="Cart product Image">
                                                        </a>
                                                    </td>
                                                    <td class="product-name"><a
                                                            href="javascript:void(0)">{{$details['name']}} & Size: {{$details['size']}}</a></td>
                                                    <td class="product-price-cart">
                                                        <input type="hidden" class="amount-value"
                                                               value="{{$details['price']}}">
                                                        <span class="amount">{{number_format($details['price'])}}</span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box update-cart quantity"
                                                                   type="text" name="qtybutton"
                                                                   value="{{$details['quantity']}}">
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">{{number_format($total)}}</td>
                                                    <td class="product-remove ">
                                                        <i class="fa fa-times remove-cart"></i>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="{{route('homepage')}}">{{trans('cart.continueShopping')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">{{trans('cart.total')}}</h4>
                                </div>
                                @php $total = 0 @endphp
                                @foreach((array)session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                @endforeach
                                <h5>{{trans('cart.totalProduct')}} <input type="hidden" class="totalMoneyProduct"
                                                                          value="{{number_format($total)}}"
                                                                          name="totalMoneyProduct"><span
                                        class="totalMoneyProduct">{{number_format($total)}} VNĐ</span></h5>
                                <div class="total-shipping">
                                    <h5>{{trans('cart.totalShipping')}}</h5>
                                    @if($ships)
                                        <ul>
                                            @foreach($ships as $ship)
                                                <li><input type="radio" value="{{$ship->price}}"
                                                           name="shipping">{{$ship->translate->name}} <span>{{number_format($ship->price)}}VNĐ</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <h4 class="grand-totall-title">{{trans('cart.totalSum')}}<input type="hidden"
                                                                                                name="totalMoney"
                                                                                                value=""
                                                                                                class="totalMoney">
                                    <span class="totalMoney"></span></h4>
                                <a href="{{route('checkout-page')}}">{{trans('cart.payment')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        $('.update-cart').change(function (e) {
            e.preventDefault();
            let ele = $(this);
            $.ajax({
                url: '{{route('update-cart')}}',
                method: 'get',
                data: {
                    _token: '{{csrf_token()}}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (res) {
                    location.reload();
                }
            })
        });
        $('.qtybutton').click(function (e) {
            e.preventDefault();
            let ele = $(this);
            $.ajax({
                url: '{{route('update-cart')}}',
                method: 'get',
                data: {
                    _token: '{{csrf_token()}}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (res) {
                    location.reload();
                }
            })
        });

        $('.remove-cart').click(function (e) {
            e.preventDefault();
            let ele = $(this);
            if (confirm('{{trans('cart.confirm-delete')}}')) {
                $.ajax({
                    url: '{{route('remove-cart')}}',
                    method: 'get',
                    data: {
                        _token: '{{csrf_token()}}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (res) {
                        location.reload();
                    }
                })
            }
        });


    </script>
@endsection
