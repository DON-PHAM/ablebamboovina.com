@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Beauty Category -->
    <div class="container-fluid d-lg-none hover-style-cosmatics">
        <!--=======  category menu  =======-->
        <div class="hero-side-category">
            <!-- Category Toggle Wrap -->
            <div class="category-toggle-wrap">
                <!-- Category Toggle -->
                <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
            </div>

            <!-- Category Menu -->
            <nav class="category-menu">
                <ul>
                    <li class="menu-item-has-children menu-item-has-children-1">
                        <a href="javascript:void(0)">Beauty & Health<i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-1">
                            <li><a href="javascript:void(0)">Makeup</a></li>
                            <li><a href="javascript:void(0)">Eyes</a></li>
                            <li><a href="javascript:void(0)">Lips</a></li>
                            <li><a href="javascript:void(0)">Face</a></li>
                            <li><a href="javascript:void(0)">Makeup Tools</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-children-2">
                        <a href="javascript:void(0)">Skin Care Tools <i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-2">
                            <li><a href="javascript:void(0)">Skin Care</a></li>
                            <li><a href="javascript:void(0)">Face</a></li>
                            <li><a href="javascript:void(0)">Eyes</a></li>
                            <li><a href="javascript:void(0)">Body</a></li>
                            <li><a href="javascript:void(0)">Skin Care Tools</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-children-3">
                        <a href="javascript:void(0)">Health Care Tools <i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-3">
                            <li><a href="javascript:void(0)">Health Care</a></li>
                            <li><a href="javascript:void(0)">Massage & Relaxation</a></li>
                            <li><a href="javascript:void(0)">Household Health Monitors</a></li>
                            <li><a href="javascript:void(0)">Chinese Medicine</a></li>
                            <li><a href="javascript:void(0)">Personal Health Care Items</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-children-4">
                        <a href="javascript:void(0)">Nail Care Tools <i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-4">
                            <li><a href="javascript:void(0)">Nail Art & Tools</a></li>
                            <li><a href="javascript:void(0)">Gel Nail Polish</a></li>
                            <li><a href="javascript:void(0)">Nail Drills</a></li>
                            <li><a href="javascript:void(0)">Nail Dryers</a></li>
                            <li><a href="javascript:void(0)">Nail Glitter</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Massage & Relaxation</a></li>
                    <li><a href="javascript:void(0)">Household Health Monitors</a></li>
                    <li><a href="javascript:void(0)">Chinese Medicine</a></li>
                    <li><a href="javascript:void(0)">Gel Nail Polish</a></li>
                    <li><a href="javascript:void(0)">Makeup Tools</a></li>
                    <li class="hidden"><a href="javascript:void(0)">Skin Care Tools</a></li>
                    <li>
                        <a href="javascript:void(0)" id="more-btn"
                        ><i class="ion-ios-plus-empty" aria-hidden="true"></i> More Categories</a
                        >
                    </li>
                </ul>
            </nav>
        </div>

        <!--=======  End of category menu =======-->
    </div>
    <!-- Beauty Category -->
    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart hover-style-cosmatics">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="javascript:void(0)" class="image"
                        ><img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/mini-cart/1.jpg"
                                alt="Cart product Image"
                            /></a>
                        <div class="content">
                            <a href="javascript:void(0)" class="title">Juicy Couture...</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="image"
                        ><img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/mini-cart/2.jpg"
                                alt="Cart product Image"
                            /></a>
                        <div class="content">
                            <a href="javascript:void(0)" class="title">Water and Wind...</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="image"
                        ><img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/mini-cart/1.jpg"
                                alt="Cart product Image"
                            /></a>
                        <div class="content">
                            <a href="javascript:void(0)" class="title">Fila Locker Room...</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="shopping-cart-total">
                <h4>Subtotal : <span>$20.00</span></h4>
                <h4>Shipping : <span>$7.00</span></h4>
                <h4>Taxes : <span>$0.00</span></h4>
                <h4 class="shop-total">Total : <span>$27.00</span></h4>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->
    <!-- Header End -->
    <!-- Slider Arae Start -->
    <div class="slider-area">
        <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
            <!-- Slider Single Item Start -->
            @if($sliders)
                @foreach($sliders as $slider)
                    @if($slider->status == 1)
                        <div
                            class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                            style="background-image: url({{asset('upload/slider/'.$slider->image)}})"
                        >
                            <div class="container">
                                <div class="slider-content-5 slider-animated-1 text-left">
                                    <span class="animated">{{$slider->name}}</span>
                                    <h1 class="animated">
                                        {{$slider->description}}
                                    </h1>
                                    @if($slider->url)
                                        <a href="{{$slider->url}}" class="shop-btn animated">Mua Ngay</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <!-- Slider Arae End -->
    <!-- Banner Area Start -->
    <div class="banner-3-area">
        <div class="container">
            <div class="row mb-n-30px">
                @if($categories)
                    @foreach($categories as $category)
                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                            <div class="banner-wrapper">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('upload/category/'.$category->image)}}" alt=""/>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Best Sells Area Start -->
    <section class="best-sells-area pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h2>Bán chạy nhất</h2>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <!-- Best Sell Slider Carousel Start -->
            <div class="best-sell-slider owl-carousel owl-nav-style">
                @if($products)
                    @foreach($products as $product)
                        @if($product->status == 1)
                            <div class="list-product-2">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="{{route('detail-page',$product->id)}}" class="thumbnail">
                                            <img
                                                class="first-img"
                                                src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                    <div class="product-decs">
                                        <a class="inner-link"
                                           href="javascript:void(0)"><span>{{$product->category->name}}</span></a>
                                        <h2>
                                            <a href="javascript:void(0)"
                                               class="product-link">{{$product->translate->name}}</a>
                                        </h2>
                                        <div class="pricing-meta">
                                            <ul>
                                                @if($product->discount)
                                                    <li class="old-price">{{$product->price}}</li>
                                                    <li class="current-price">{{$product->price * $product->discount / 100}}</li>
                                                    <li class="discount-price">-{{$product->discount}}%</li>
                                                @else
                                                    <li class="current-price">{{$product->price}}</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="add-to-link">
                                        <ul class="d-flex justify-content-center">
                                            <li class="cart"><a class="cart-btn" href="javascript:void(0)">Thêm vào giỏ
                                                    hàng </a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
            <!-- Best Sell Slider Carousel End -->
        </div>
    </section>
    <!-- Best Sell Area End -->
    <!-- Hot deal area Start -->
    <section class="hot-deal-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>Ưu đãi lớn</h2>
                            </div>
                            <!-- Section Title End-->
                        </div>
                    </div>
                    <!-- Hot Deal Slider Start -->
                    <div class="hot-deal owl-carousel owl-nav-style">
                        @if($products)
                            @foreach($products as $product)
                                @if($product->hot == 1)
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="{{route('detail-page',$product->id)}}" class="thumbnail">
                                                <img
                                                    class="first-img"
                                                    src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                                    alt=""
                                                />
                                            </a>
                                            <div class="quick-view">
                                                <a
                                                    class="quick_view"
                                                    href="javascript:void(0)"
                                                    data-link-action="quickview"
                                                    title="Quick view"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"
                                                >
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-decs">
                                            <a class="inner-link"
                                               href="javascript:void(0)"><span>{{$product->category->name}}</span></a>
                                            <h2>
                                                <a href="javascript:void(0)" class="product-link"
                                                >{{$product->translate->name}}</a
                                                >
                                            </h2>
                                            <div class="pricing-meta">
                                                <ul>
                                                    @if($product->discount)
                                                        <li class="old-price">{{$product->price}}</li>
                                                        <li class="current-price">{{$product->price * $product->discount / 100}}</li>
                                                        <li class="discount-price">-{{$product->discount}}%</li>
                                                    @else
                                                        <li class="current-price">{{$product->price}}</li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="add-to-link">
                                                <ul class="d-flex justify-content-center">
                                                    <li class="cart"><a class="cart-btn" href="javascript:void(0)">Thêm
                                                            vào giỏ hàng </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <!-- Hot Deal Slider End -->
                </div>
                <!-- New Arrivals Area Start -->
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title ml-0px mt-res-sx-30px">
                                <h2>Hàng mới</h2>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- New Product Slider Start -->
                    <div class="new-product-slider owl-carousel owl-nav-style">
                        <!-- Product Single Item -->
                        @if($products)
                            @foreach($products as $product)
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="{{route('detail-page',$product->id)}}" class="thumbnail">
                                                <img
                                                    class="first-img"
                                                    src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                                    alt=""
                                                />
                                            </a>
                                            <div class="quick-view">
                                                <a
                                                    class="quick_view"
                                                    href="javascript:void(0)"
                                                    data-link-action="quickview"
                                                    title="Quick view"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"
                                                >
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">

                                            <a class="inner-link"
                                               href="javascript:void(0)"><span>{{$product->category->name}}</span></a>
                                            <h2>
                                                <a href="javascript:void(0)" class="product-link"
                                                >{{$product->translate->name}}</a
                                                >
                                            </h2>
                                            <div class="pricing-meta">
                                                <ul>
                                                    @if($product->discount)
                                                        <li class="old-price">{{$product->price}}</li>
                                                        <li class="current-price">{{$product->price * $product->discount / 100}}</li>
                                                        <li class="discount-price">-{{$product->discount}}%</li>
                                                    @else
                                                        <li class="current-price">{{$product->price}}</li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="javascript:void(0)">Thêm vào
                                                        giỏ hàng </a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <!-- Product Slider End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Hot Deal Area End -->
    <!-- Static Area Start -->
    <section class="static-area">
        <div class="container">
            <div class="static-area-wrap">
                <div class="row">
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0">
                            <img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/static-icons-1.png"
                                alt=""
                                class="img-responsive"
                            />
                            <div class="single-static-meta">
                                <h4>Miễn phí vận chuyển</h4>
                                <p>Tất cả đơn hàng trên 500.000VNĐ</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0 pt-res-xs-20">
                            <img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/static-icons-2.png"
                                alt=""
                                class="img-responsive"
                            />
                            <div class="single-static-meta">
                                <h4>Đổi trả miễn phí</h4>
                                <p>Trong vòng 9 ngày</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static pt-res-md-30 pb-res-sm-30 pb-res-xs-0 pt-res-xs-20">
                            <img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/static-icons-3.png"
                                alt=""
                                class="img-responsive"
                            />
                            <div class="single-static-meta">
                                <h4>Thanh toán an toàn 100%</h4>
                                <p>Thanh toán của bạn được chúng tôi đảm bảo tuyệt đối</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                    <!-- Static Single Item Start -->
                    <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                        <div class="single-static pt-res-md-30 pb-res-sm-30 pt-res-xs-20">
                            <img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/static-icons-4.png"
                                alt=""
                                class="img-responsive"
                            />
                            <div class="single-static-meta">
                                <h4>Hỗ trợ 24/7</h4>
                                <p>Liên hệ chúng tôi 24/7</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Static Area End -->
    <!-- Blog area Start -->
    <section class="blog-area mb-30px mt-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section title -->
                    <div class="section-title">
                        <h2>bài viết mới</h2>
                    </div>
                    <!-- Section title -->
                </div>
            </div>
            <!-- Blog Slider Start -->
            <div class="blog-slider-active owl-carousel owl-nav-style">
                <!-- single item -->
                <article class="blog-post">
                    <div class="blog-post-top">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-default.png')}}" alt=""/>
                        </div>
                    </div>
                    <div class="blog-post-content d-flex">
                        <div class="blog-post-content-cell">
                            <a href="javascript:void(0)" class="blog-meta">Tag new</a>
                            <h4 class="blog-post-heading">
                                <a href="blog-single-left-sidebar.html">Sản phẩm hot nhất tháng</a>
                            </h4>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                                has been the industrys ...
                            </p>
                            <a class="read-more-btn" href="blog-single-left-sidebar.html">
                                Xem thêm <i class="ion-android-arrow-dropright-circle"></i
                                ></a>
                        </div>
                    </div>
                </article>
                <!-- single item -->
                <article class="blog-post">
                    <div class="blog-post-top">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-default.png')}}" alt=""/>
                        </div>
                    </div>
                    <div class="blog-post-content d-flex">
                        <div class="blog-post-content-cell">
                            <a href="javascript:void(0)" class="blog-meta">Tag new</a>
                            <h4 class="blog-post-heading">
                                <a href="blog-single-left-sidebar.html">Sản phẩm hot nhất tháng</a>
                            </h4>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                                has been the industrys ...
                            </p>
                            <a class="read-more-btn" href="blog-single-left-sidebar.html">
                                Xem thêm <i class="ion-android-arrow-dropright-circle"></i
                                ></a>
                        </div>
                    </div>
                </article>
                <!-- single item -->
                <article class="blog-post">
                    <div class="blog-post-top">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-default.png')}}" alt=""/>
                        </div>
                    </div>
                    <div class="blog-post-content d-flex">
                        <div class="blog-post-content-cell">
                            <a href="javascript:void(0)" class="blog-meta">Tag new</a>
                            <h4 class="blog-post-heading">
                                <a href="blog-single-left-sidebar.html">Sản phẩm hot nhất tháng</a>
                            </h4>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                                has been the industrys ...
                            </p>
                            <a class="read-more-btn" href="blog-single-left-sidebar.html">
                                Xem thêm <i class="ion-android-arrow-dropright-circle"></i
                                ></a>
                        </div>
                    </div>
                </article>
                <!-- single item -->
                <article class="blog-post">
                    <div class="blog-post-top">
                        <div class="blog-img">
                            <img src="{{asset('frontend/assets/images/blog-default.png')}}" alt=""/>
                        </div>
                    </div>
                    <div class="blog-post-content d-flex">
                        <div class="blog-post-content-cell">
                            <a href="javascript:void(0)" class="blog-meta">Tag new</a>
                            <h4 class="blog-post-heading">
                                <a href="blog-single-left-sidebar.html">Sản phẩm hot nhất tháng</a>
                            </h4>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                                has been the industrys ...
                            </p>
                            <a class="read-more-btn" href="blog-single-left-sidebar.html">
                                Xem thêm <i class="ion-android-arrow-dropright-circle"></i
                                ></a>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Blog Slider Start -->
        </div>
    </section>
    <!-- Blog Area End -->

@endsection

