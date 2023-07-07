@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
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
                                src="https://htmldemo.net/ecolife/ecolife/assets/images/product-image/mini-cart/3.jpg"
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
    <!-- OffCanvas Menu Start -->
    <!-- OffCanvas Menu End -->
    <!-- Header End -->
    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-hrading">Chi tiết sản phẩm</h1>
                        <ul class="breadcrumb-links">
                            <li><a href="index.html">Trang chủ</a></li>
                            <li>{{$product->translate->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
    <!-- Shop details Area start -->
    <section class="product-details-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-img product-details-tab">
                        <div class="zoompro-wrap zoompro-2">
                            <div class="zoompro-border zoompro-span">
                                <img
                                    class="zoompro"
                                    src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                    data-zoom-image="assets/images/product-image/organic/zoom/1.jpg"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div id="gallery" class="product-dec-slider-2 mt-3">
                            @foreach($product->images as $thumb)
                                <a
                                    class="active"
                                    data-image="assets/images/product-image/organic/display/1.jpg"
                                    data-zoom-image="assets/images/product-image/organic/zoom/1.jpg"
                                >
                                    <img
                                        style="max-width: 100px"
                                        src="{{asset('upload/product/'.$product->code.'/'.$thumb->image)}}"
                                        alt=""
                                    />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="product-details-content">
                        <h2>{{$product->translate->name}}</h2>
                        <p class="reference">Code:<span> {{$product->code}}</span></p>
                        <div class="pricing-meta">
                            <ul>
                                @if($product->discount)
                                    <li class="old-price not-cut pe-2">{{$product->price}}</li>
                                    <li class="current-price old-price">{{$product->price * $product->discount / 100}}</li>
                                    <li class="discount-price">-{{$product->discount}}%</li>
                                @else
                                    <li class="old-price not-cut">{{$product->price}}</li>
                                @endif
                            </ul>
                        </div>
                        <p>
                            {{strip_tags($product->translate->description)}}
                        </p>
                        <div class="pro-details-list"></div>
                        <div class="pro-details-quality mt-0px">
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1"/>
                            </div>
                            <div class="pro-details-cart btn-hover">
                                <a href="#"> + Thêm vào giỏ hàng</a>
                            </div>
                        </div>
                        <div class="pro-details-social-info">
                            <span>Share</span>
                            <div class="social-info">
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
                                        <a href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-details-policy">
                            <ul>
                                <li>
                                    <img
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/policy.png"
                                        alt=""
                                    /><span>Security Policy (Edit With Customer Reassurance Module)</span>
                                </li>
                                <li>
                                    <img
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/policy-2.png"
                                        alt=""
                                    /><span>Delivery Policy (Edit With Customer Reassurance Module)</span>
                                </li>
                                <li>
                                    <img
                                        src="https://htmldemo.net/ecolife/ecolife/assets/images/icons/policy-3.png"
                                        alt=""
                                    /><span>Return Policy (Edit With Customer Reassurance Module)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop details Area End -->
    <!-- product details description area start -->
    <div class="description-review-area mb-60px">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" href="#des-details1">Mô tả</a>
                    <a class="active" data-bs-toggle="tab" href="#des-details2">Chi tết sản phẩm</a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-anotherinfo-wrapper">
                           {!! $product->translate->description !!}
                        </div>
                    </div>
                    <div id="des-details1" class="tab-pane" >
                        <div class="product-description-wrapper">
                            {!! $product->translate->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details description area end -->
    <!-- Recent Add Product Area Start -->
    <section class="recent-add-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h2>Bạn Có Thể Thích</h2>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <!-- Recent Product slider Start -->
            <div class="recent-product-slider owl-carousel owl-nav-style">
                <!-- Single Item -->
                @if($products)
                    @foreach($products as $pt)
                        <article class="list-product">
                            <div class="img-block">
                                <a href="{{route('detail-page',$pt->id)}}" class="thumbnail">
                                    <img
                                        class="first-img"
                                        src="{{asset('upload/product/'.$pt->code.'/'.$pt->image)}}"
                                        alt=""
                                    />
                                </a>
                            </div>
                            <div class="product-decs">
                                <a class="inner-link"
                                   href="javascript:void(0)"><span>{{$pt->category->name}}</span></a>
                                <h2>
                                    <a href="javascript:void(0)"
                                       class="product-link">{{$pt->translate->name}}</a>
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
                                    <li class="cart"><a class="cart-btn" href="javascript:void(0)">Thêm vào giỏ
                                            hàng </a></li>
                                </ul>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>
            <!-- Recent product slider end -->
        </div>
    </section>
    <!-- Recent product area end -->
    <!-- Recent Add Product Area Start -->
    <section class="recent-add-area mt-30 mb-30px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="section-title">
                        <h2>Cùng Danh Mục</h2>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <!-- Recent Product slider Start -->
            <div class="recent-product-slider owl-carousel owl-nav-style">
                <!-- Single Item -->
                @if($products)
                    @foreach($products as $pt)
                        <article class="list-product">
                            <div class="img-block">
                                <a href="{{route('detail-page',$pt->id)}}" class="thumbnail">
                                    <img
                                        class="first-img"
                                        src="{{asset('upload/product/'.$pt->code.'/'.$pt->image)}}"
                                        alt=""
                                    />
                                </a>
                            </div>
                            <div class="product-decs">
                                <a class="inner-link"
                                   href="javascript:void(0)"><span>{{$pt->category->name}}</span></a>
                                <h2>
                                    <a href="javascript:void(0)"
                                       class="product-link">{{$pt->translate->name}}</a>
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
                                    <li class="cart"><a class="cart-btn" href="#">Thêm vào giỏ hàng </a></li>
                                </ul>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>
            <!-- Recent product slider end -->
        </div>
    </section>
    <!-- Recent product area end -->

@endsection


