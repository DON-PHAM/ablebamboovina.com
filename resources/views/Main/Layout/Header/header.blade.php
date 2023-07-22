<header class="main-header">
    <!-- Header Top Start -->
    <div class="header-top-nav">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!--Left Start-->
                <div class="col-lg-4 col-md-12">
                    <div class="text-lg-start text-center">
                        <p class="color-white">{{trans('homepage.welcome')}}</p>
                    </div>
                </div>
                <!--Left End-->
                <!--Right Start-->
                <div class="col-8 d-lg-block d-none">
                    <div class="header-right-nav hover-style-cosmatics">
                        <!-- Header Top Language Currency -->
                        <!-- Single Wedge Start -->
                        <div class="header-top-curr dropdown">
                            <button
                                class="dropdown-toggle header-action-btn hover-style-cosmatics color-white border-0"
                                data-bs-toggle="dropdown"
                            >
                                <img
                                    class="me-2"
                                    src="{{asset('frontend/assets/images/icon-vi.png')}}"
                                    alt=""
                                />Việt Nam<i class="ion-ios-arrow-down ms-1"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a class="dropdown-item change-language-fe" data-value="ko" href="javascript:void(0)" style="color: #111111"
                                    >
                                        <img
                                            class="me-2"
                                            style="width: 25px;"
                                            src="{{asset('frontend/assets/images/icon-korea.png')}}"
                                            alt=""
                                        />Korean</a>
                                </li>
                                <li>
                                    <a class="dropdown-item change-language-fe" data-value="vi" href="javascript:void(0)" style="color: #111111"
                                    >
                                        <img
                                            class="me-2"
                                            src="{{asset('frontend/assets/images/icon-vi.png')}}"
                                            alt=""
                                        />Việt Nam</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Single Wedge End -->
                        <div class="header-top-set-lan-curr d-flex justify-content-end">
                            <div class="header-bottom-set dropdown">
                                <button
                                    class="dropdown-toggle header-action-btn hover-style-cosmatics color-white"
                                    data-bs-toggle="dropdown"
                                >
                                    {{trans('homepage.config')}} <i class="ion-ios-arrow-down"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('login-page')}}">{{trans('homepage.login')}}</a></li>
                                    <li><a class="dropdown-item" href="{{route('my-account-page')}}">{{trans('homepage.account')}}</a></li>
                                    <li><a class="dropdown-item" href="">{{trans('homepage.payment')}}</a></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">{{trans('homepage.logout')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Language Currency -->
                    </div>
                </div>
                <!--Right End-->
            </div>
        </div>
    </div>
    <!-- Header Top End -->
    <!-- Header Buttom Start -->
    <div class="header-navigation d-lg-block d-none">
        <div class="container">
            <div class="row">
                <!-- Logo Start -->
                <div class="col-md-2 col-sm-2">
                    <div class="logo">
                        <a href="{{route('homepage')}}"
                        ><img
                                src="{{asset('frontend/assets/images/logo.png')}}"
                                alt=""
                            /></a>
                    </div>
                </div>
                <!-- Logo End -->
                <div class="col-md-10 col-sm-10 d-flex align-items-center">
                    <!--Header Bottom Account Start -->
                    <div class="header_account_area">
                        <!--Seach Area Start -->
                        <div class="header_account_list search_list">
                            <a href="javascript:void(0)"><i class="ion-ios-search-strong"></i></a>
                            <div class="dropdown_search">
                                <form action="#">
                                    <input placeholder="{{trans('homepage.searchPlaceholder')}} ..." type="text"/>
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <!--Seach Area End -->
                        <!--Contact info Start -->
                        <div class="contact-link-wrap">
                            <div class="contact-link">
                                <div class="phone">
                                    <p>{{trans('homepage.callNow')}}:</p>
                                    @if(session('setting'))
                                        <a href="tel:{{ session('setting')->tax }}">{{ session('setting')->tax }}</a>
                                    @endif
                                </div>
                            </div>
                            <!--Contact info End -->
                            <!--Cart info Start -->
                            <div class="cart-info d-flex">
                                <div class="mini-cart-warp">
                                    <a href="#offcanvas-cart" class="count-cart color-black offcanvas-toggle">
                                        <span class="amount-tag">100000VNĐ</span>
                                        <span class="item-quantity-tag">0</span>
                                    </a>
                                </div>
                            </div>
                            <!--Cart info End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Bottom Account End -->
    <!-- Menu Content Start -->
    <div class="header-buttom-nav sticky-nav d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <div class="d-flex align-items-start justify-content-start">
                        <!-- Beauty Category -->
                        <div class="beauty-category vertical-menu">
                            <h3 class="vertical-menu-heading vertical-menu-toggle">{{trans('homepage.category')}}</h3>
                            <ul class="vertical-menu-wrap open-menu-toggle">
                                <li class="menu-dropdown">
                                    <a href="#">Sắc đẹp & Sức khỏe<i class="ion-ios-arrow-down"></i></a>
                                    <ul class="mega-menu-wrap">
                                        <li>
                                            <ul>
                                                <li><a href="#">Mắt</a></li>
                                                <li><a href="#">Môi</a></li>
                                                <li><a href="#">Mặt</a></li>
                                                <li><a href="#">Dụng cụ trang điểm</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Massage & Thư giãn</a></li>
                                <li><a href="#">Sơn Móng Gel</a></li>
                                <li><a href="#">Dụng cụ trang điểm</a></li>
                                <li><a href="#">Chăm sóc da</a></li>
                            </ul>
                        </div>
                        <!-- Beauty Category -->
                        <!--Main Navigation Start -->
                        <div class="main-navigation">
                            <ul>
                                <li class="menu-dropdown">
                                    <a href="{{ route('promotion-client-page') }}">{{trans('homepage.promotion')}}</a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="{{ route('review-client-page') }}">{{trans('homepage.review')}}</a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="{{ route('event-client-page') }}">{{trans('homepage.event')}}</a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="{{ route('about-page') }}">{{trans('homepage.intro')}}</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact-page') }}">{{trans('homepage.contact')}}</a>
                                </li>
                            </ul>
                        </div>
                        <!--Main Navigation End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Content End -->
    <!-- Header mobile area start -->
    <div class="header-bottom d-lg-none sticky-nav py-3 mobile-navigation">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-3 col-sm-3 hover-style-cosmatics">
                    <a href="#offcanvas-mobile-menu" class="offcanvas-toggle mobile-menu">
                        <i class="ion-navicon"></i>
                    </a>
                </div>
                <div class="col-md-6 col-sm-4 d-flex justify-content-center">
                    <div class="logo m-0">
                        <a href="index.html"
                        ><img style="max-width: 150px;"
                              src="{{asset('frontend/assets/images/logo.png')}}"
                              alt=""
                            /></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <!--Cart info Start -->
                    <div class="cart-info d-flex m-0 justify-content-end">
                        <div class="header-bottom-set dropdown hover-style-cosmatics">
                            <button
                                class="dropdown-toggle header-action-btn hover-style-cosmatics"
                                data-bs-toggle="dropdown"
                            >
                                <i class="ion-person"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                <li><a class="dropdown-item" href="login.html">Sign in</a></li>
                            </ul>
                        </div>
                        <div class="mini-cart-warp">
                            <a href="#offcanvas-cart" class="count-cart color-black offcanvas-toggle">
                                <span class="amount-tag">$20.00</span>
                                <span class="item-quantity-tag">0</span>
                            </a>
                        </div>
                    </div>
                    <!--Cart info End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header mobile area end -->
</header>
<div class="mobile-search-option pb-3 d-lg-none hover-style-cosmatics">
    <div class="container-fluid">
        <div class="header-account-list">
            <div class="dropdown-search">
                <form action="#">
                    <input placeholder="{{trans('homepage.productNew')}} ..." type="text"/>
                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

