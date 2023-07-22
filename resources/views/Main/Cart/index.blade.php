@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="breadcrumb-content">--}}
{{--                        <h1 class="breadcrumb-hrading">{{trans('cart.title')}}</h1>--}}
{{--                        <ul class="breadcrumb-links">--}}
{{--                            <li><a href="{{route('homepage')}}">{{trans('home.home')}}</a></li>--}}
{{--                            <li>{{trans('cart.title')}}</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
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
{{--                                            render cart--}}
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="{{route('homepage')}}">{{trans('cart.continueShopping')}}</a>
                                            </div>
                                            <div class="cart-clear">
                                                <button type="button"
                                                        onclick="deleteAllCart()">{{trans('cart.removeCart')}}</button>
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
                                <h5>{{trans('cart.totalProduct')}}<span>1000VNĐ</span></h5>
                                <div class="total-shipping">
                                    <h5>{{trans('cart.totalShipping')}}</h5>
                                    <ul>
                                        <li><input type="checkbox">{{trans('cart.shipBasic')}} <span>10.000VNĐ</span>
                                        </li>
                                        <li><input type="checkbox"> {{trans('cart.shipFast')}} <span>30.000VNĐ</span>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">{{trans('cart.totalSum')}} <span>500.000VNĐ</span></h4>
                                <a href="#">{{trans('cart.payment')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        var container = `<tr class="cart-item">
                        <td class="product-thumbnail"></td>
                        <td class="product-name"></td>
                        <td class="product-price-cart"></td>
                        <td class="product-quantity"></td>
                        <td class="product-subtotal"></td>
                        <td class="product-remove"></td>
                    </tr>`;
        $(".cart-table-content .render-cart").html(container)

        function deleteAllCart() {
            localStorage.removeItem('listProductInCart')
            $(".mini-cart-warp .item-quantity-tag").html(0)
            $(".cart-table-content .render-cart").html(container)
        }

        $(document).ready(function () {
            const listProductInCart = localStorage.getItem('listProductInCart')
            if (listProductInCart) {
                const listProduct = JSON.parse(listProductInCart)
                var total = 0
                for (let i = 0; i < listProduct.length; i++) {
                    total = total + parseFloat(listProduct[i].price)
                    var container = `<tr class="cart-item" id="cart-${listProduct[i].id}">
                        <td class="product-thumbnail">
                            <a href=javascript:void(0)">
                                <img width="100" src="{{asset('upload/product')}}/${listProduct[i].code}/${listProduct[i].image}" alt="Cart product Image">
                            </a>
                        </td>
                        <td class="product-name"><a href="javascript:void(0)">${listProduct[i].translate.name}</a></td>
                        <td class="product-price-cart">
                            <input type="hidden" class="amount-value" value="${listProduct[i].price}">
                            <span class="amount">${listProduct[i].price}</span>
                        </td>
                        <td class="product-quantity">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                            </div>
                        </td>
                        <td class="product-subtotal">${listProduct[i].price}</td>
                        <td class="product-remove">
                            <a href="#"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>`;

                    $(".cart-table-content .render-cart").append(container)
                }
            }

            var CartPlusMinus = $('.cart-plus-minus');
            CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
            CartPlusMinus.append('<div class="inc qtybutton">+</div>');
            $(".qtybutton").on("click", function () {
                var $button = $(this);
                var oldQuantity = $button.parent().find("input").val();
                var idCheck = $button.parents(".cart-item").attr('id');
                var priceProduct = $(`#${idCheck} .product-price-cart .amount-value`).val()
                if ($button.text() === "+") {
                    var newQuantity = parseFloat(oldQuantity) + 1;
                    $(`#${idCheck} .product-subtotal`).html(parseFloat(priceProduct) * newQuantity)
                    $button.parent().find("input").val(newQuantity);
                } else {
                    // Don't allow decrementing below zero
                    if (oldQuantity > 1) {
                        var newQuantity = parseFloat(oldQuantity) - 1;
                        $(`#${idCheck} .product-subtotal`).html(parseFloat(priceProduct) * newQuantity)
                        $button.parent().find("input").val(newQuantity);
                    } else {
                        $(`#${idCheck} .product-subtotal`).html(parseFloat(priceProduct))
                        $button.parent().find("input").val(1);
                    }
                }
            });

            $(".cart-plus-minus-box").on("change", function () {
                var idCheck = $(this).parents(".cart-item").attr('id');
                var priceProduct = $(`#${idCheck} .product-price-cart .amount-value`).val()
                var newQuantity = $(this).val();
                $(`#${idCheck} .product-subtotal`).html(parseFloat(priceProduct) * newQuantity)
                $button.parent().find("input").val(newQuantity);
            });
        })
    </script>
@endsection
