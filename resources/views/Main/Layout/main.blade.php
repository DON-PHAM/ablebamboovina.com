<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description"
          content="ablebamboovina cam kết bán Băng Vệ Sinh chính hãng 100% ✓ Giá Tốt Mọi Thời Điểm ✓ +200 thương hiệu nổi tiếng ✓ Giao Nhanh Miễn Phí 2H Từ 90k (Trễ Tặng 100k)"/>
    <meta name="keywords" content="ablebamboovina.com, mua mỹ phẩm chính hãng giá tốt nhất thị trường."/>
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

        /* ------------- 하단 디자인 ------------- */

        #footer_wrap {
            position: relative;
            border-top: 1px solid #c7c7c7;
        }

        #footer_wrap #footer {
            overflow: hidden;
            max-width: 1450px;
            width: 96% !important;
            padding: 2% 2%;
            margin: 0 auto;
            font-size: 12px;
        }

        #footer_wrap #footer .Layout_footer {
            width: 100%;
        }

        #footer_wrap #footer .Layout_footer:after {
            content: "";
            display: block;
            clear: both;
        }

        #footer_wrap #footer .Layout_footer > div {
            float: left;
        }

        #footer_wrap #footer .Layout_footer .layoutFooter1st {
            width: 30%;
        }

        #footer_wrap #footer .Layout_footer .layoutFooter2nd {
            width: 35%;
            padding: 0 0 0 2.5%;
        }

        #footer_wrap #footer .Layout_footer .layoutFooter3rd {
            width: 35%;
            padding-left: 100px;
        }

        #footer_wrap #footer .Layout_footer .layoutFooter1st .btn_business {
            color: #545454;
            line-height: 5px;
        }

        #footer_wrap #footer .Layout_footer .title {
            margin-bottom: 2px;
            color: #545454;
        }

        #footer_wrap #footer .Layout_footer .title_big {
            color: #717171;
            margin-bottom: 10px;
        }

        #footer_wrap #footer .Layout_footer .content {
            color: #717171;
            display: inline-block;
            font-weight: bold;
        }

        #footer_wrap #footer .Layout_footer .content2 {
            color: #717171;
        }

        #footer_wrap #footer .Layout_footer .footerCs {
            width: 100%;
            overflow: hidden;
        }

        #footer_wrap #footer .Layout_footer .footerCs .num span {
            margin-right: 14px;
        }

        #footer_wrap #footer .Layout_footer .footerCs .num a {
            font-weight: bold;
            color: #545454;
        }

        #footer_wrap #footer .Layout_footer .footerReturn {
            width: 100%;
            overflow: hidden;
        }

        #footer_wrap #footer .Layout_footer .footerQuick {
            font-size: 0;
            margin-top: 10px;
        }

        #footer_wrap #footer .Layout_footer .footerQuick:after {
            content: "";
            display: block;
            clear: both;
        }

        #footer_wrap #footer .Layout_footer .footerQuick li {
            position: relative;
            float: left;
            margin-right: 8px;
        }

        #footer_wrap #footer .Layout_footer .footerQuick li a {
            display: block;
            font-size: 0;
            color: #898989;
            text-align: center;
        }

        #footer_wrap #footer .Layout_footer .footerQuick li a img {
            display: block;
            margin-bottom: 15px;
        }

        #footer_wrap #footer .Layout_footer .footerQuick li .nameBtn {
            visibility: hidden;
            opacity: 0;
            filter: alpha(opacity=0);
            position: absolute;
            top: 60px;
            left: -12px;
        }

        #footer_wrap #footer .Layout_footer .footerQuick li:hover .nameBtn {
            visibility: visible;
            opacity: 1;
            filter: alpha(opacity=100);
        }

        #footer_wrap #footer .Layout_footer .footerQuick li .nameBtn div {
            display: block;
        }

        #footer_wrap #footer .Layout_footer .footerQuick li .nameTop {
            float: left;
            width: 75px;
            height: 20px;
            line-height: 20px;
            margin: 0;
            padding: 0;
            border: 1px solid #7f7f7f;
            background: #7f7f7f;
            font-size: 11px;
            color: #fff;
            text-align: center;
            border-radius: 3px;
        }

        #footer_wrap .ft-btm {
            font-size: 16px;
            background: #03b6af;
            color: #fff;
            width: 100%;
            text-align: center;
        }

        @media screen and (max-width: 1024px) {
            #footer_wrap #footer .Layout_footer .footerQuick li .nameBtn {
                display: none;
            }

            #footer_wrap #footer .Layout_footer .footerQuick li a {
                font-size: 11px;
            }
        }

        #footer_wrap #footer .Layout_footer .footerSns {
            width: 100%;
            margin-bottom: 10px;
        }

        #footer_wrap #footer .Layout_footer .footerSns:after {
            content: "";
            display: block;
            clear: both;
        }

        #footer_wrap #footer .Layout_footer .footerSns .title {
            clear: both;
            width: 100%;
        }

        #footer_wrap #footer .Layout_footer .footerSns li {
            float: left;
            margin-right: 5px;
        }

        /*#footer_wrap #footer .Layout_footer .footerBank { float:left; width:55%; padding-right:5%;}
        #footer_wrap #footer .Layout_footer .footerEtc { float:left; width:40%;}*/
        #footer_wrap #footer .Layout_footer .footerBank {
            width: 100%
        }

        #footer_wrap #footer .Layout_footer .footerEtc {
            margin-right: 42px;
            width: 100%;
            margin-bottom: 20px;
        }

        #footer_wrap #footer .Layout_footer .foot_info {
            width: 100%;
            line-height: 180%;
            color: #898989;
        }

        #footer_wrap #footer .Layout_footer .foot_info .foot_info_list { /*overflow:hidden;*/
            width: 100%;
            color: #999;
        }

        #footer_wrap #footer .Layout_footer .foot_info .foot_info_list dl {
            float: left;
            width: 100%;
            padding: 0px;
            margin: 0px;
        }

        #footer_wrap #footer .Layout_footer .foot_info .foot_info_list dt {
            float: left;
            color: #717171;
            font-weight: 700;
        }

        #footer_wrap #footer .Layout_footer .foot_info .foot_info_list dd {
            float: left;
            padding: 0 15px 0 3px;
            color: #717171;
        }

        #footer_wrap #footer .Layout_footer .foot_info .foot_info_list dd a {
            color: #828282;
        }

        #footer_wrap #footer .Layout_footer .foot_info .copyright {
            float: left;
            width: 100%;
            color: #717171;
            font-weight: 700;
            margin-bottom: 30px;
        }

        #footer_wrap #footer .Layout_footer .accLink {
            clear: both;
            width: 100%;
            padding-top: 51px;
        }

        #footer_wrap #footer .Layout_footer .accLink:after {
            content: "";
            display: block;
            clear: both;
        }

        #footer_wrap #footer .Layout_footer .accLink ul {
            float: left;
        }

        #footer_wrap #footer .Layout_footer .accLink ul:after {
            content: "";
            display: block;
            clear: both;
        }

        #footer_wrap #footer .Layout_footer .accLink ul li {
            float: left;
            margin-right: 5px;
            margin-top: 3px;
        }

        #footer_wrap #footer .Layout_footer .accLink ul li img {
            width: 100%;
        }


        @media screen and (max-width: 1150px) {
            #footer_wrap #footer .Layout_footer .layoutFooter1st {
                width: 48%;
            }

            #footer_wrap #footer .Layout_footer .layoutFooter2nd {
                width: 48%;
                padding: 0 0 0 4%;
            }

            #footer_wrap #footer .Layout_footer .layoutFooter3rd {
                width: 100%;
                margin-top: 30px;
            }
        }

        @media screen and (max-width: 700px) {
            #footer_wrap #footer .Layout_footer .layoutFooter1st,
            #footer_wrap #footer .Layout_footer .layoutFooter2nd,
            #footer_wrap #footer .Layout_footer .layoutFooter3rd {
                width: 100%;
                padding: 0;
                margin-top: 10px;
            }

            #footer_wrap #footer .Layout_footer .footerCs {
                padding-bottom: 19px; /*border-bottom:1px solid #03b6af;*/
            }

            #footer_wrap #footer .Layout_footer .footerQuick {
                display: none;
                padding-bottom: 30px;
                margin-bottom: 0;
                border-bottom: 1px solid #03b6af;
            }

            #footer_wrap #footer .Layout_footer .footerSns {
                padding-top: 2px;
                padding-bottom: 19px; /*border-bottom:1px solid #03b6af;*/
            }

            #footer_wrap #footer .Layout_footer .foot_info { /*padding-top:30px; border-top:1px solid #03b6af;*/
            }

            #footer_wrap #footer {
                padding: 30px 2%;
            }

            #footer_wrap .ft-btm .pull-right {
                margin-top: 20px;
            }
        }

        @media screen and (max-width: 500px) {
            #footer_wrap {
            }

            #footer_wrap #footer {
                padding: 2% 2% 60px 2%;
            }

            #footer_wrap #footer .Layout_footer .footerQuick li a img, #footer_wrap #footer .Layout_footer .footerQuick li img {
                width: 50px;
            }
        }

        #footer_wrap #footer .btn_licensee_info {
            margin-left: 20px;
            font-weight: 800;
        }

        #footer_wrap #footer .btn_email:hover {
            text-decoration: underline;
        }

        /* 공정거래 위원회 */
        #footer_wrap #footer .foot_certify {
            display: none;
            overflow: hidden;
            padding: 5px 0 15px 0;
            text-align: right;
        }

        #footer_wrap #footer .foot_certify span {
            display: inline-block;
            padding: 0 10px 0 10px;
        }

        #footer_wrap #footer .foot_certify span:first-child {
            padding: 0 10px 0 0
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
        <div class="menu-close">{{trans('category.title')}}</div>
        <!-- offcanvas menu -->
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                @if($categories_compose)
                    <ul>
                        @foreach($parentCategories_compose as $item_parent)
                            <li>
                                <a href="{{route('category-client-page',$item_parent->id)}}"><span
                                        class="menu-text">{{$item_parent->translate->name}}</span></a>
                                @if($subCategories_compose->isNotEmpty())
                                        <?php
                                        $subcategory = $subCategories_compose->where('parentid', $item_parent->id);
                                        ?>

                                    @if( $subcategory->isNotEmpty())
                                        <ul class="sub-menu">
                                            @foreach($subcategory as $item_sub)
                                                <li><a href="{{route('shop-page', $item_sub->id)}}"><span
                                                            class="menu-text">{{$item_sub->translate->name}}</span></a></a>
                                                </li>
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
                                    <span class="quantity-price">{{$details['quantity']}} x <span
                                            class="amount">{{number_format($details['price'])}} VNĐ</span></span>
                                    <a href="javascript:void(0)" class="remove-cart"
                                    >×</a>

                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="shopping-cart-total">
                <h4 class="shop-total">{{trans('cart.total')}} : <span class="header-cart-total">{{number_format($total)}} VNĐ</span>
                </h4>
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
        $('.main-navigation a').each(function () {
            let linkPath = $(this).attr('href');
            if (currentPath === linkPath) {
                $(this).addClass('active_menu');
            }
        });

    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        let language = localStorage.getItem('locale');
        if (language === null) {
            language = 'ko'
        }
        $.ajax({
            url: "{{ route('change-language',':language') }}".replace(':language', language),
            type: "get",
            success: function (response) {
                // reload trang để hiển thị nội dung mới
                localStorage.setItem('locale', language);
                $("#language").val(language);
            }
        })
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
        $('.remove-cart').click(function (e) {
            e.preventDefault();
            let ele = $(this);
            if (confirm('{{trans('cart.removeCart')}}')) {
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
    });

</script>
@yield('script')
</body>
</html>
