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
                        <a href="#">Beauty & Health<i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-1">
                            <li><a href="#">Makeup</a></li>
                            <li><a href="#">Eyes</a></li>
                            <li><a href="#">Lips</a></li>
                            <li><a href="#">Face</a></li>
                            <li><a href="#">Makeup Tools</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-children-2">
                        <a href="#">Skin Care Tools <i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-2">
                            <li><a href="#">Skin Care</a></li>
                            <li><a href="#">Face</a></li>
                            <li><a href="#">Eyes</a></li>
                            <li><a href="#">Body</a></li>
                            <li><a href="#">Skin Care Tools</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-children-3">
                        <a href="#">Health Care Tools <i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-3">
                            <li><a href="#">Health Care</a></li>
                            <li><a href="#">Massage & Relaxation</a></li>
                            <li><a href="#">Household Health Monitors</a></li>
                            <li><a href="#">Chinese Medicine</a></li>
                            <li><a href="#">Personal Health Care Items</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children menu-item-has-children-4">
                        <a href="#">Nail Care Tools <i class="ion-ios-arrow-down"></i></a>
                        <!-- category submenu -->
                        <ul class="category-mega-menu category-mega-menu-4">
                            <li><a href="#">Nail Art & Tools</a></li>
                            <li><a href="#">Gel Nail Polish</a></li>
                            <li><a href="#">Nail Drills</a></li>
                            <li><a href="#">Nail Dryers</a></li>
                            <li><a href="#">Nail Glitter</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Massage & Relaxation</a></li>
                    <li><a href="#">Household Health Monitors</a></li>
                    <li><a href="#">Chinese Medicine</a></li>
                    <li><a href="#">Gel Nail Polish</a></li>
                    <li><a href="#">Makeup Tools</a></li>
                    <li class="hidden"><a href="shop-4-column.html">Skin Care Tools</a></li>
                    <li>
                        <a href="#" id="more-btn"
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
                        <a href="single-product.html" class="image"
                        ><img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/mini-cart/1.jpg"
                                alt="Cart product Image"
                            /></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Juicy Couture...</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"
                        ><img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/mini-cart/2.jpg"
                                alt="Cart product Image"
                            /></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Water and Wind...</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"
                        ><img
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/mini-cart/1.jpg"
                                alt="Cart product Image"
                            /></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fila Locker Room...</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
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
            <div
                class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                style="background-image: url(https://htmldemo.net/ecolife/ecolife/assets/images/slider-image/sample-12.jpg)"
            >
                <div class="container">
                    <div class="slider-content-5 slider-animated-1 text-left">
                        <span class="animated">FRESH FRUIT-NATURAL</span>
                        <h1 class="animated">
                            Pro Skin Whitening <br/>
                            Face Creams
                        </h1>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item End -->
            <!-- Slider Single Item Start -->
            <div
                class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                style="background-image: url(https://htmldemo.net/ecolife/ecolife/assets/images/slider-image/sample-15.jpg)"
            >
                <div class="container">
                    <div class="slider-content-5 slider-animated-1 text-left">
                        <span class="animated">MOROCCAN ARGAN OIL</span>
                        <h1 class="animated">
                            Argan Oil A Beauty<br/>
                            Secret Dating Back Over
                        </h1>
                        <a href="shop-4-column.html" class="shop-btn animated">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <!-- Slider Single Item End -->
        </div>
    </div>
    <!-- Slider Arae End -->
    <!-- Banner Area Start -->
    <div class="banner-3-area">
        <div class="container">
            <div class="row mb-n-30px">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-30px">
                    <div class="banner-wrapper mb-30px">
                        <a href="shop-4-column.html"
                        ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/18.jpg" alt=""
                            /></a>
                    </div>
                    <div class="banner-wrapper">
                        <a href="shop-4-column.html"
                        ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/19.jpg" alt=""
                            /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 xs-6 col-xs-12">
                            <div class="banner-wrapper mb-30px">
                                <a href="shop-4-column.html"
                                ><img
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/20.jpg"
                                        alt=""
                                    /></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 xs-6 col-xs-12">
                            <div class="banner-wrapper mb-30px">
                                <a href="shop-4-column.html"
                                ><img
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/21.jpg"
                                        alt=""
                                    /></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-wrapper">
                        <a href="shop-4-column.html"
                        ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/22.jpg" alt=""
                            /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Best Sells Area Start -->
    <section class="best-sells-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h2>Best Sellers</h2>
                        <p>Add bestselling products to weekly line up</p>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <!-- Best Sell Slider Carousel Start -->
            <div class="best-sell-slider owl-carousel owl-nav-style">
                <!-- Single Item -->
                <div class="list-product-2">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2>
                                <a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted Ter..</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                    <li class="current-price">€34.21</li>
                                    <li class="discount-price">-5%</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/2.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/15.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Ka..</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                    <li class="current-price">€15.12</li>
                                    <li class="discount-price">-20%</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="list-product-2">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/3.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/4.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2>
                                <a href="single-product.html" class="product-link">Brixton Patrol All Terrain Ano..</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/5.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/5.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2>
                                <a href="single-product.html" class="product-link">Juicy Couture Tricot Logo Strip..</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="list-product-2">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/6.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/6.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/7.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/8.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNAR</span></a>
                            <h2>
                                <a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="list-product-2">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/9.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/9.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Water and Wind Resistant Ins..</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/10.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/10.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2>
                                <a href="single-product.html" class="product-link">New Luxury Men's Slim Fit Shi...</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="list-product-2">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/11.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/12.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Originals Kaval Windbreaker...</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€23.90</li>
                                    <li class="current-price">€21.51</li>
                                    <li class="discount-price">-10%</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/13.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/3.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2>
                                <a href="single-product.html" class="product-link">Brixton Patrol All Terrain
                                    Anor...</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="list-product-2">
                    <article class="list-product mb-30px">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Madden by Steve Madden Cale 6</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€11.90</li>
                                    <li class="current-price">€10.12</li>
                                    <li class="discount-price">-15%</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/15.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/2.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2>
                                <a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted Ter..</a>
                            </h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€35.90</li>
                                    <li class="current-price">€34.11</li>
                                    <li class="discount-price">-5%</li>
                                </ul>
                            </div>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                <li>
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                </li>
                                <li>
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                </li>
                            </ul>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
            </div>
            <!-- Best Sell Slider Carousel End -->
        </div>
    </section>
    <!-- Best Sell Area End -->
    <!-- Banner Area Start -->
    <div class="banner-area">
        <div class="container">
            <div class="row mb-n-30px">
                <div class="col-lg-3 col-sm-6 mb-30px xs-6 order-1 order-lg-1">
                    <div class="banner-wrapper">
                        <a href="shop-4-column.html"
                        ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/14.jpg" alt=""
                            /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-30px order-3 order-lg-2">
                    <div class="banner-wrapper">
                        <a href="shop-4-column.html"
                        ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/15.jpg" alt=""
                            /></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-30px xs-6 order-2 order-lg-3">
                    <div class="banner-wrapper">
                        <a href="shop-4-column.html"
                        ><img src="https://htmldemo.net/ecolife/ecolife/assets/images/banner-image/16.jpg" alt=""
                            /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Hot deal area Start -->
    <section class="hot-deal-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>Hot Deals</h2>
                                <p>Add hot products to weekly line up</p>
                            </div>
                            <!-- Section Title End-->
                        </div>
                    </div>
                    <!-- Hot Deal Slider Start -->
                    <div class="hot-deal owl-carousel owl-nav-style">
                        <!--  Single item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img
                                        class="first-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/16.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="second-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/16.jpg"
                                        alt=""
                                    />
                                </a>
                                <div class="quick-view">
                                    <a
                                        class="quick_view"
                                        href="#"
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
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2>
                                    <a href="single-product.html" class="product-link"
                                    >Originals Kaval Windbreaker Winter Jacket 2</a
                                    >
                                </h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€18.90</li>
                                        <li class="current-price">€34.21</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="in-stock">Availability: <span>300 In Stock</span></div>
                            <div class="clockdiv">
                                <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                <div data-countdown="2021/12/31"></div>
                            </div>
                        </article>
                        <!--  Single item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img
                                        class="first-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/11.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="second-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/12.jpg"
                                        alt=""
                                    />
                                </a>
                                <div class="quick-view">
                                    <a
                                        class="quick_view"
                                        href="#"
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
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2>
                                    <a href="single-product.html" class="product-link"
                                    >Originals Kaval Windbreaker Winter Jacket</a
                                    >
                                </h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€18.90</li>
                                        <li class="current-price">€34.21</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="in-stock">Availability: <span>300 In Stock</span></div>
                            <div class="clockdiv">
                                <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                <div data-countdown="2021/12/31"></div>
                            </div>
                        </article>
                        <!--  Single item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img
                                        class="first-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/15.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="second-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/2.jpg"
                                        alt=""
                                    />
                                </a>
                                <div class="quick-view">
                                    <a
                                        class="quick_view"
                                        href="#"
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
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2>
                                    <a href="single-product.html" class="product-link">New Balance Fresh Foam Kaymin</a>
                                </h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€18.90</li>
                                        <li class="current-price">€34.21</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="in-stock">Availability: <span>299 In Stock</span></div>
                            <div class="clockdiv">
                                <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                <div data-countdown="2021/12/31"></div>
                            </div>
                        </article>
                        <!--  Single item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img
                                        class="first-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                        alt=""
                                    />
                                    <img
                                        class="second-img"
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                        alt=""
                                    />
                                </a>
                                <div class="quick-view">
                                    <a
                                        class="quick_view"
                                        href="#"
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
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2>
                                    <a href="single-product.html" class="product-link">Madden by Steve Madden Cale 6</a>
                                </h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€18.90</li>
                                        <li class="current-price">€34.21</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="in-stock">Availability: <span>299 In Stock</span></div>
                            <div class="clockdiv">
                                <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                <div data-countdown="2021/12/31"></div>
                            </div>
                        </article>
                        <!--  Single item -->
                    </div>
                    <!-- Hot Deal Slider End -->
                </div>
                <!-- New Arrivals Area Start -->
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title ml-0px mt-res-sx-30px">
                                <h2>New Arrivals</h2>
                                <p>Add new products to weekly line up</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- New Product Slider Start -->
                    <div class="new-product-slider owl-carousel owl-nav-style">
                        <!-- Product Single Item -->
                        <div class="product-inner-item">
                            <article class="list-product mb-30px">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Originals Kaval Windbr...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price">€23.90</li>
                                            <li class="current-price">€21.51</li>
                                            <li class="discount-price">-10%</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/6.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/6.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Juicy Couture Juicy
                                            Quil...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price">€35.90</li>
                                            <li class="current-price">€34.11</li>
                                            <li class="discount-price">-5%</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Product Single Item -->
                        <div class="product-inner-item">
                            <article class="list-product mb-30px">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/8.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/8.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Brixton Patrol All
                                            Terr...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€29.90</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/9.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/9.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">New Luxury Men's Slim...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€29.90</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Product Single Item -->
                        <div class="product-inner-item">
                            <article class="list-product mb-30px">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/3.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/2.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Originals Kaval Windbr...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price">€35.90</li>
                                            <li class="current-price">€34.11</li>
                                            <li class="discount-price">-5%</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/7.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/7.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Juicy Couture Juicy
                                            Quil...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price">€35.90</li>
                                            <li class="current-price">€34.11</li>
                                            <li class="discount-price">-5%</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Product Single Item -->
                        <div class="product-inner-item">
                            <article class="list-product mb-30px">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/5.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/5.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Madden by Steve Madd...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price">€11.90</li>
                                            <li class="current-price">€10.12</li>
                                            <li class="discount-price">-15%</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/10.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/11.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2><a href="single-product.html" class="product-link">Trans-Weight Hooded...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€19.90</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Product Single Item -->
                        <div class="product-inner-item">
                            <article class="list-product mb-30px">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/12.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/12.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Water and Wind Resist...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€11.90</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/4.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/3.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">New Balance Fresh Foa...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price">€18.90</li>
                                            <li class="current-price">€15.11</li>
                                            <li class="discount-price">-20%</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Product Single Item -->
                        <div class="product-inner-item">
                            <article class="list-product mb-30px">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/13.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/13.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">Juicy Couture Solid
                                            Slee...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="single-product.html" class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                            alt=""
                                        />
                                        <img
                                            class="second-img"
                                            src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/7.jpg"
                                            alt=""
                                        />
                                    </a>
                                    <div class="quick-view">
                                        <a
                                            class="quick_view"
                                            href="#"
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
                                    <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                    <h2>
                                        <a href="single-product.html" class="product-link">New Balance Fresh Foa...</a>
                                    </h2>
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                        <li>
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                        <li>
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <!-- Product Single Item -->
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
                                <h4>Free Shipping</h4>
                                <p>On all orders over $75.00</p>
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
                                <h4>Free Returns</h4>
                                <p>Returns are free within 9 days</p>
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
                                <h4>100% Payment Secure</h4>
                                <p>Your payment are safe with us.</p>
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
                                <h4>Support 24/7</h4>
                                <p>Contact us 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                    <!-- Static Single Item End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Static Area End -->
    <!-- Feature Area Start -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h2>Featured Products</h2>
                        <p>Add products to weekly line up</p>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <!-- Feature Slider Start -->
            <div class="feature-slider owl-carousel owl-nav-style">
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/18.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/18.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Solid...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/19.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/18.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Fresh...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/16.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/17.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Originals Kaval Win...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€23.90</li>
                                    <li class="current-price">€21.51</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/11.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/12.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Originals Kaval Win...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€23.90</li>
                                    <li class="current-price">€21.51</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/2.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/15.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€35.90</li>
                                    <li class="current-price">€34.11</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€35.90</li>
                                    <li class="current-price">€34.11</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/2.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/17.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Fresh...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                    <li class="current-price">€15.12</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/18.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/18.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Balance Fresh...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/5.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/5.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Trico...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€9.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/7.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/8.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Fila Locker Room V...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€9.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/17.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/16.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Trans-Weight Hood...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/10.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">New Luxury Men's...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€11.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/15.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Calvin Klein Jeans...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€29.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/9.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/9.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Water and Wind R...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€11.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/14.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>GRAPIC CORNER</span></a>
                            <h2><a href="single-product.html" class="product-link">Madden by Steve...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€11.90</li>
                                    <li class="current-price">€10.12</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/3.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/4.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Brixton Patrol All T...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">€18.90</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
                <div class="feature-slider-item">
                    <article class="list-product">
                        <div class="img-block">
                            <a href="single-product.html" class="thumbnail">
                                <img
                                    class="first-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                    alt=""
                                />
                                <img
                                    class="second-img"
                                    src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/cosmatic/1.jpg"
                                    alt=""
                                />
                            </a>
                            <div class="quick-view">
                                <a
                                    class="quick_view"
                                    href="#"
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
                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy...</a></h2>
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price">€18.90</li>
                                    <li class="current-price">€34.21</li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Single Item -->
            </div>
            <!-- Feature Slider End -->
        </div>
    </section>
    <!-- Feature Area End -->
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
                            <a href="blog-grid-left-sidebar.html" class="blog-meta">Cosmetic</a>
                            <h4 class="blog-post-heading">
                                <a href="blog-single-left-sidebar.html">Sản phẩm hot nhất tháng</a>
                            </h4>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                                has been the industrys ...
                            </p>
                            <a class="read-more-btn" href="blog-single-left-sidebar.html">
                                Read More <i class="ion-android-arrow-dropright-circle"></i
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
                            <a href="blog-grid-left-sidebar.html" class="blog-meta">Cosmetic</a>
                            <h4 class="blog-post-heading">
                                <a href="blog-single-left-sidebar.html">Sản phẩm hot nhất tháng</a>
                            </h4>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                                has been the industrys ...
                            </p>
                            <a class="read-more-btn" href="blog-single-left-sidebar.html">
                                Read More <i class="ion-android-arrow-dropright-circle"></i
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
                            <a href="blog-grid-left-sidebar.html" class="blog-meta">Cosmetic</a>
                            <h4 class="blog-post-heading">
                                <a href="blog-single-left-sidebar.html">Sản phẩm hot nhất tháng</a>
                            </h4>
                            <p class="blog-text">
                                Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum
                                has been the industrys ...
                            </p>
                            <a class="read-more-btn" href="blog-single-left-sidebar.html">
                                Read More <i class="ion-android-arrow-dropright-circle"></i
                                ></a>
                        </div>
                    </div>
                </article>
                <!-- single item -->
                <article class="blog-post">
                    <div class="blog-post-top">
                        <div class="blog-img">
                            <img src="https://htmldemo.net/ecolife/ecolife/assets/images/blog-image/blog-8.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="blog-post-content">
                        <a href="blog-grid-left-sidebar.html" class="blog-meta">Fashion</a>
                        <h4 class="blog-post-heading">
                            <a href="blog-single-left-sidebar.html">This is Foruth Post For XipBlog</a>
                        </h4>
                        <p class="blog-text">
                            Lorem Ipsum is simply dummy text of the printing and typeSettings industry. Lorem Ipsum has
                            been the industrys ...
                        </p>
                        <a class="read-more-btn" href="blog-single-left-sidebar.html">
                            Read More <i class="ion-android-arrow-dropright-circle"></i
                            ></a>
                    </div>
                </article>
                <!-- single item -->
            </div>
            <!-- Blog Slider Start -->
        </div>
    </section>
    <!-- Blog Area End -->

@endsection
@section('scripts')
    <script src="{{asset('frontend/assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/plugins/plugins.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
@endsection
