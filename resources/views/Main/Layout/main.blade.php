<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.png')}}"/>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&display=swap"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/vendor.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/plugins.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}"/>
    <style>
        .main-navigation li:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body class="home-5 home-6 home-8 home-cosmatics">
<!-- main layout start from here -->
<!--====== PRELOADER PART START ======-->

<!-- <div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
			</div>
		</div> -->

<!--====== PRELOADER PART ENDS ======-->
<div id="main">
    <!-- Header Start -->
    @include('Main.Layout.Header.header')
    <!-- Header End -->

    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <!-- contact Info -->
        <div class="contact-info d-flex align-items-center justify-content-center color-black py-3">
            <img class="me-3" src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/mobile-contact.png" alt=""/>
            <p>Call us:</p>
            @if(session('setting'))
                <a class="color-black" href="tel:{{ session('setting')->tax }}">{{ session('setting')->tax }}</a>
            @endif
        </div>
        <!-- offcanvas language -->
        <div class="offcanvas-userpanel">
            <ul>
                <li class="offcanvas-userpanel__role">
                    <a href="#">
                        <img width="26" src="{{asset('frontend/assets/images/icon-korea.png')}}" alt=""/>Korean
                        <i class="ion-ios-arrow-down"></i>
                    </a>
                    <ul class="user-sub-menu">
                        <li>
                            <a class="current" href="#">
                                <img
                                    width="26"
                                    src="{{asset('frontend/assets/images/icon-korea.png')}}"
                                    alt=""
                                />Korean</a
                            >
                        </li>
                        <li>
                            <a href="#">
                                <img
                                    class="me-2"
                                    src="{{asset('frontend/assets/images/icon-vi.png')}}"
                                    alt=""
                                />Việt Nam</a
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu-close">Danh mục</div>
        <!-- offcanvas menu -->
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                <ul>
                    <li>
                        <a href="#"><span class="menu-text">Sắc đẹp & Sức khỏe</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Mắt</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Môi</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Mặt</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Dụng cụ trang điểm</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Massage & Thư giãn</a></li>
                    <li><a href="#">Sơn Móng Gel</a></li>
                    <li><a href="#">Dụng cụ trang điểm</a></li>
                    <li><a href="#">Chăm sóc da</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart hover-style-cosmatics">
        <div class="inner">
            <div class="head">
                <span class="title">Giỏ hàng</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list"></ul>
            </div>
            <div class="shopping-cart-total">
                <h4 class="shop-total">Total : <span class="header-cart-total">00</span></h4>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="{{route('cart-page')}}" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="{{route('checkout-page')}}" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    @yield('content')

    <!-- Footer Area start -->
    @include('Main.Layout.Footer.footer')
    <!--  Footer Area End -->
</div>

<script src="{{asset('frontend/assets/js/vendor/vendor.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/plugins.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

<!-- Main Activation JS -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script>
    function removeItemFromCart(id) {
        const idRemove = `#${id}`
        $(idRemove).remove();
        const listProductInCart = localStorage.getItem('listProductInCart')
        if (listProductInCart) {
            const listProduct = JSON.parse(listProductInCart)
            let temp = listProduct.filter( el => el.id !== id );
            localStorage.setItem('listProductInCart', JSON.stringify(temp))
            $(".item-quantity-tag").html(temp.length)
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#language').change(function () {
            let language = $('#language').find(":selected").val();
            $.ajax({
                url: "{{ route('change-language',':language') }}".replace(':language', language),
                type: "get",
                success: function (response) {
                    localStorage.setItem('locale', language);
                    location.reload();
                }
            });
        });
        let language = localStorage.getItem('locale');
        $("#language").val(language);
        setTimeout(function () {
            $('.alert').fadeOut('slow');
        }, 2000);

        // count cart
        const listProductInCart = localStorage.getItem('listProductInCart')
        if (!listProductInCart) {
            $(".item-quantity-tag").html(0)
        } else {
            $(".item-quantity-tag").html(JSON.parse(listProductInCart).length)
        }

        // show popup cart
        $('.mini-cart-warp').on('click', function () {
            const listProductInCart = localStorage.getItem('listProductInCart')
            $("#offcanvas-cart .minicart-product-list").html("")
            if (listProductInCart) {
                const listProduct = JSON.parse(listProductInCart)
                var total = 0
                for (let i = 0; i < listProduct.length; i++) {
                    total = total + parseFloat(listProduct[i].price)
                    var container = `<li id="${listProduct[i].id}">
                        <a href="javascript:void(0)" class="image">
                            <img  src="{{asset('upload/product')}}/${listProduct[i].code}/${listProduct[i].image}" alt="Cart product Image">
                        </a>
                        <div class="content">
                            <a href="javascript:void(0)" class="title">${listProduct[i].translate.name}</a>
                            <span class="quantity-price">1 x <span class="amount">${listProduct[i].price}</span></span>
                            <a href="javascript:void(0)" class="remove" onclick="removeItemFromCart(${listProduct[i].id})">×</a>
                        </div>
                    </li>`;
                    $("#offcanvas-cart .minicart-product-list").append(container)
                }
                $(".header-cart-total").html(total)
            }
        });
    });

</script>
@yield('script')
</body>
</html>
