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
        .active_menu {
            background-color: black;
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
    @include('Main.Layout.header.header')
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
                @if($categories_compose)
                <ul>
                    @foreach($parentCategories_compose as $item_parent)
                    <li>
                        <a href="{{route('category-client-page',$item_parent->id)}}"><span class="menu-text">{{$item_parent->translate->name}}</span></a>
                        @if($subCategories_compose->isNotEmpty())
                                <?php
                                $subcategory = $subCategories_compose->where('parentid', $item_parent->id);
                                ?>

                            @if( $subcategory->isNotEmpty())
                        <ul class="sub-menu">
                            @foreach($subcategory as $item_sub)
                                <li><a href="{{route('shop-page', $item_sub->id)}}"><span class="menu-text">{{$item_sub->translate->name}}</span></a></a></li>
                            @endforeach
                        </ul>
                            @endif
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart hover-style-cosmatics">
        @php $total = 0 @endphp
        @foreach((array)session('cart') as $id => $details)
            @php $total += $details['price'] * $details['quantity'] @endphp
        @endforeach
        <div class="inner">
            <div class="head">
                <span class="title">{{trans('cart.title')}}</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <li id="${listProduct[i].id}">
                                <a href="javascript:void(0)" class="image">
                                    <img
                                        src="{{asset('upload/product/'.$details['code'].'/'.$details['image'])}}"
                                        alt="Cart product Image">
                                </a>
                                <div class="content">
                                    <a href="javascript:void(0)" class="title">{{$details['name']}}</a>
                                    <span class="quantity-price">{{$details['quantity']}} x <span
                                            class="amount">{{$details['price']}}</span></span>
                                    <a href="javascript:void(0)" class="remove-cart"
                                       >×</a>

                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="shopping-cart-total">
                <h4 class="shop-total">{{trans('cart.total')}} : <span class="header-cart-total">{{$total}}</span></h4>
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
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<script src="{{asset('frontend/assets/js/vendor/vendor.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/plugins.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>

<!-- Main Activation JS -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script>
    $(document).ready(function () {
        let currentPath = "{{\Illuminate\Support\Facades\Request::capture()->url()}}";
        $('.main-navigation a').each(function() {
            let linkPath = $(this).attr('href');
            if(currentPath === linkPath) {
                $(this).addClass('active_menu');
            }
        });

    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.change-language-fe').on('click', function () {
            let language = $(this).data("value");
            $.ajax({
                url: "{{ route('change-language',':language') }}".replace(':language', language),
                type: "get",
                success: function (response) {
                    localStorage.setItem('locale', language);
                    location.reload();
                }
            });
        })
    });

</script>
@yield('script')
</body>
</html>
