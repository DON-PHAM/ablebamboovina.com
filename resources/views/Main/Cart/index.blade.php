@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-hrading">Giỏ hàng</h1>
                        <ul class="breadcrumb-links">
                            <li><a href="{{route('homepage')}}">{{trans('home.home')}}</a></li>
                            <li>Giỏ hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
    <div class="cart-main-area mtb-60px">
        <div class="container">
            <h3 class="cart-page-title">Giỏ hàng</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <form action="#">
                                <div class="table-content table-responsive cart-table-content">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Tên</th>
                                            <th>Giá tiền</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="" alt="">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#">Product Name</a></td>
                                            <td class="product-price-cart"><span class="amount">$60.00</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                           value="1">
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$70.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="cart-shiping-update-wrapper">
                                            <div class="cart-shiping-update">
                                                <a href="{{route('homepage')}}">Tiếp tục mua hàng</a>
                                            </div>
                                            <div class="cart-clear">
                                                <button type="button" onclick="deleteCart()">Xóa giỏ hàng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Tổng</h4>
                                </div>
                                <h5>Tổng sản phẩm<span>1000VNĐ</span></h5>
                                <div class="total-shipping">
                                    <h5>Tổng vận chuyển</h5>
                                    <ul>
                                        <li><input type="checkbox"> Cơ bản <span>10.000VNĐ</span></li>
                                        <li><input type="checkbox"> Hỏa tốc <span>30.000VNĐ</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Tổng cộng <span>500.000VNĐ</span></h4>
                                <a href="#">Thanh toán</a>
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
        function deleteCart() {
            localStorage.removeItem('listProductInCart')
        }
    </script>
@endsection
