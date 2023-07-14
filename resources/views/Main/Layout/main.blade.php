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
            <a class="color-black" href="tel:(+800)345678">(+800)345678</a>
        </div>
        <!-- offcanvas compare & wishlist -->
        <div class="user-panel">
            <ul class="d-flex justify-content-between">
                <li class="m-0">
                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Compare (0)</a>
                </li>
                <li>
                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Wishlist (0)</a>
                </li>
            </ul>
        </div>
        <!-- offcanvas currency -->
        <div class="offcanvas-userpanel">
            <ul>
                <li class="offcanvas-userpanel__role">
                    <a href="#">USD $ <i class="ion-ios-arrow-down"></i></a>
                    <ul class="user-sub-menu">
                        <li><a class="current" href="#">USD $</a></li>
                        <li><a href="#">EUR €</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- offcanvas language -->
        <div class="offcanvas-userpanel">
            <ul>
                <li class="offcanvas-userpanel__role">
                    <a href="#"
                    ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/1.jpg" alt=""/>English
                        <i class="ion-ios-arrow-down"></i
                        ></a>
                    <ul class="user-sub-menu">
                        <li>
                            <a class="current" href="#"
                            ><img
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/1.jpg"
                                    alt=""
                                />English</a
                            >
                        </li>
                        <li>
                            <a href="#"
                            ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/2.jpg" alt=""/>
                                Français</a
                            >
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu-close">menu</div>
        <!-- offcanvas menu -->
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                <ul>
                    <li>
                        <a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Home Organic</span></a>
                                <ul class="sub-menu">
                                    <li><a href="">Organic 1</a></li>
                                    <li><a href="">Organic 2</a></li>
                                    <li><a href="index-3.html">Organic 3</a></li>
                                    <li><a href="index-4.html">Organic 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Cosmetic</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-5.html">Cosmetic 1</a></li>
                                    <li><a href="index-6.html">Cosmetic 2</a></li>
                                    <li><a href="index-7.html">Cosmetic 3</a></li>
                                    <li><a href="index-8.html">Cosmetic 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Digital</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-9.html">Digital 1</a></li>
                                    <li><a href="index-10.html">Digital 2</a></li>
                                    <li><a href="index-11.html">Digital 3</a></li>
                                    <li><a href="index-12.html">Digital 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Furniture</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-13.html">Furniture 1</a></li>
                                    <li><a href="index-14.html">Furniture 2</a></li>
                                    <li><a href="index-15.html">Furniture 3</a></li>
                                    <li><a href="index-16.html">Furniture 4</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Home Medical</span></a>
                                <ul class="sub-menu">
                                    <li><a href="index-17.html">Medical 1</a></li>
                                    <li><a href="index-18.html">Medical 2</a></li>
                                    <li><a href="index-19.html">Medical 3</a></li>
                                    <li><a href="index-20.html">Medical 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-dropdown position-relative">
                                <a href="index-21.html">Single Product</a>
                                <span class="stekar">new</span>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Page</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                            <li><a href="compare.html">Compare Page</a></li>
                            <li><a href="login.html">Login & Regiter Page</a></li>
                            <li><a href="my-account.html">Account Page</a></li>
                            <li><a href="wishlist.html">Wishlist Page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop Grid 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop Grid 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    <li><a href="shop-filter.html">Shop Filter Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Shop Single</a></li>
                                    <li><a href="single-product-variable.html">Shop Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                    <li><a href="single-product-group.html">Shop Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Shop Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Shop Tab 3</a></li>
                                    <li><a href="single-product-slider.html">Shop Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Shop Gallery Left</a></li>
                                    <li><a href="single-product-gallery-right.html">Shop Gallery Right</a></li>
                                    <li><a href="single-product-sticky-left.html">Shop Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Shop Sticky Right</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-5">
                <ul>
                    <li>
                        <a href="#"><i class="ion-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-instagram"></i></a>
                    </li>
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
                    var container = `<li>
                        <a href="javascript:void(0)" class="image">
                            <img  src="{{asset('upload/product')}}/${ listProduct[i].code}/${listProduct[i].image}" alt="Cart product Image">
                        </a>
                        <div class="content">
                            <a href="javascript:void(0)" class="title">${listProduct[i].translate.name}</a>
                            <span class="quantity-price">1 x <span class="amount">${listProduct[i].price}</span></span>
                            <a href="javascript:void(0)" class="remove">×</a>
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
