<input type="hidden" id="mess-success" value="{{trans('homepage.addToCartSuccess')}}">
<input type="hidden" id="mess-exist" value="{{trans('homepage.addToCartExist')}}">
<header class="main-header tesssst 222222">
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
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'vi')
                                <img
                                    class="me-2"
                                    src="{{asset('frontend/assets/images/icon-vi.png')}}"
                                    alt=""
                                />Việt Nam<i class="ion-ios-arrow-down ms-1"></i>
                                    @else
                                        <img style="width: 25px;"
                                            class="me-2"
                                            src="{{asset('frontend/assets/images/icon-korea.png')}}"
                                            alt=""
                                        />Korean<i class="ion-ios-arrow-down ms-1"></i>
                                    @endif
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
                                    @if(!\Illuminate\Support\Facades\Auth::check())
                                        <li><a class="dropdown-item"
                                               href="{{route('login-page')}}">{{trans('homepage.login')}}</a></li>
                                    @else
                                        <li><a class="dropdown-item"
                                               href="{{route('my-account-page')}}">{{trans('homepage.account')}}</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                               href="{{route('logout')}}">{{trans('homepage.logout')}}</a></li>
                                    @endif
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
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <a href="{{route('homepage')}}">
                            @if(session('setting'))
                                <img style="width: 100%"
                                     src="{{ session('setting')->logo  }}"
                                     alt="{{session('setting')->company}}"
                                />
                            @endif
                        </a>
                    </div>
                </div>
                <!-- Logo End -->
                <div class="col-md-9 col-sm-9 d-flex align-items-center">
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
                                        <a href="tel:{{ session('setting')->phone }}">{{ session('setting')->phone }}</a>
                                    @endif
                                </div>
                            </div>
                            <!--Contact info End -->
                            <!--Cart info Start -->
                            <div class="cart-info d-flex">
                                <div class="mini-cart-warp">
                                    <a href="#offcanvas-cart" class="count-cart color-black offcanvas-toggle">
                                        <span class="item-quantity-tag">{{count((array) session('cart'))}}</span>
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
                        <div class="beauty-category vertical-menu 1111 3333">
                            <h3 class="vertical-menu-heading vertical-menu-toggle">{{trans('homepage.category')}}</h3>
                            @if($categories_compose)
                                <ul class="vertical-menu-wrap open-menu-toggle">
                                    @foreach($parentCategories_compose as $item_parent)
                                        <li class="menu-dropdown">
                                            <a href="{{route('category-client-page',$item_parent->id)}}">{{$item_parent->translate->name}}<i
                                                    class="ion-ios-arrow-down"></i></a>
                                            @if($subCategories_compose->isNotEmpty())
                                                    <?php
                                                    $subcategory = $subCategories_compose->where('parentid', $item_parent->id);

                                                    ?>

                                                @if( $subcategory->isNotEmpty())
                                                    <ul class="mega-menu-wrap">
                                                        @foreach($subcategory as $item_sub)
                                                        <li><a @if(isset($item_sub->product))  href="{{route('detail-page', $item_sub->product->id)}}" @endif>{{$item_sub->translate->name ?? ""}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
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
                                    <a href="{{ route('contact-page') }}">{{trans('homepage.intro')}}</a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="{{ route('contact-page') }}">{{trans('homepage.contact')}}</a>--}}
{{--                                </li>--}}
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
                        <a href="{{route('homepage')}}">
                            @if(session('setting'))
                                <img style="max-width: 150px;"
                                     src="{{session()->get('setting')->logo}}"
                                     alt=""
                                />
                            @endif
                        </a>
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
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <li><a class="dropdown-item" href="{{route('my-account-page')}}">My account</a></li>
                                @else
                                    <li><a class="dropdown-item" href="{{route('login-page')}}">Sign in</a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="mini-cart-warp">
                            <a href="#offcanvas-cart" class="count-cart color-black offcanvas-toggle">
                                <span class="amount-tag">$20.00</span>
                                <span class="item-quantity-tag">{{count((array) session('cart'))}}</span>
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

