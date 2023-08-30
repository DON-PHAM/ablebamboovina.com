@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')
    <style>
        div#description {
            background-color: lightpink;
            margin: 22px 0;
            padding: 25px;
        }
    </style>
    <!-- Slider Arae Start -->
    <div class="slider-area">
        <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
            <!-- Slider Single Item Start -->
            @if($sliders)
                @foreach($sliders as $slider)
                    @if($slider->status == 1)
                        <div
                            class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                            style="background-image: url({{asset('upload/slider/'.$slider->image)}}); background-size: contain; background-repeat: no-repeat"
                        >
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
            <div class="section-title">
                <h2>{{trans('homepage.category')}}</h2>
            </div>
        </div>
    </div>
    <div class="banner-2-area">
        <div class="container">
            <div class="row mb-n-20px category-slider owl-carousel owl-nav-style">
                @if($categories)
                    @foreach($categories as $category)
                        @if($category->status == 1)
                            <div class="banner-wrapper">
                                <a href="{{route('category-client-page',$category->translate->productcategoryid)}}">
                                    <img src="{{asset('upload/category/'.$category->image)}}" alt=""/>
                                </a>
                            </div>
                        @endif
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
                        <h2>{{trans('homepage.bestseller')}}</h2>
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
                                                    <li class="old-price">{{number_format($product->price)}} VNĐ</li>
                                                    <li class="current-price">{{$product->price * $product->discount / 100}}</li>
                                                    <li class="discount-price">-{{$product->discount}}%</li>
                                                @else
                                                    <li class="current-price">{{number_format($product->price)}}VNĐ
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    {{--                                    <div class="add-to-link">--}}
                                    {{--                                        <ul class="d-flex justify-content-center">--}}
                                    {{--                                            <li class="cart">--}}
                                    {{--                                                <button class="cart-btn add-to-cart" onclick="addToCart({{$product->id}})">--}}
                                    {{--                                                    {{trans('homepage.addToCart')}}--}}
                                    {{--                                                </button>--}}
                                    {{--                                            </li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                    </div>--}}
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
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 category-topsaler">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>{{trans('homepage.greatDeals')}}</h2>
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
                                                        <li class="old-price">{{number_format($product->price)}}VNĐ
                                                        </li>
                                                        <li class="current-price">{{$product->price * $product->discount / 100}}
                                                            VNĐ
                                                        </li>
                                                        <li class="discount-price">-{{$product->discount}}%</li>
                                                    @else
                                                        <li class="current-price">{{number_format($product->price)}}
                                                            VNĐ
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            {{--                                            <div class="add-to-link">--}}
                                            {{--                                                <ul class="d-flex justify-content-center">--}}
                                            {{--                                                    <li class="cart">--}}
                                            {{--                                                        <button class="cart-btn add-to-cart" onclick="addToCart({{$product->id}})">--}}
                                            {{--                                                            {{trans('homepage.addToCart')}}--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                </ul>--}}
                                            {{--                                            </div>--}}
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
                                <h2>{{trans('homepage.greatDeals')}}</h2>
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
                                                        <li class="old-price">{{number_format($product->price)}}VNĐ
                                                        </li>
                                                        <li class="current-price">{{$product->price * $product->discount / 100}}
                                                            VNĐ
                                                        </li>
                                                        <li class="discount-price">-{{$product->discount}}%</li>
                                                    @else
                                                        <li class="current-price">{{number_format($product->price)}}
                                                            VNĐ
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        {{--                                        <div class="add-to-link">--}}
                                        {{--                                            <ul>--}}
                                        {{--                                                <li class="cart">--}}
                                        {{--                                                    <button class="cart-btn add-to-cart" onclick="addToCart({{$product->id}})">--}}
                                        {{--                                                        {{trans('homepage.addToCart')}}--}}
                                        {{--                                                    </button>--}}
                                        {{--                                                </li>--}}
                                        {{--                                            </ul>--}}
                                        {{--                                        </div>--}}
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
                                <h4>{{trans('homepage.freeShipping')}}</h4>
                                <p>{{trans('homepage.freeShipping2')}}</p>
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
                                <h4>{{trans('homepage.freeReturn')}}</h4>
                                <p>{{trans('homepage.freeReturn2')}}</p>
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
                                <h4>{{trans('homepage.securePayment')}}</h4>
                                <p>{{trans('homepage.securePayment2')}}</p>
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
                                <h4>{{trans('homepage.support247')}}</h4>
                                <p>{{trans('homepage.support247Contact')}}</p>
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
                        <h2>{{trans('homepage.postNew')}}</h2>
                    </div>
                    <!-- Section title -->
                </div>
            </div>
            <!-- Blog Slider Start -->
            <div class="blog-slider-active owl-carousel owl-nav-style">
                @foreach($posts as $post)
                    <!-- single item -->
                    <article class="blog-post" onclick="showPostById({{$post->id}})">
                        <div class="blog-post-top">
                            <div class="blog-img">
                                <img src="{{asset('upload/post/'.$post->image)}}" alt=""/>
                            </div>
                        </div>
                        <div class="blog-post-content d-flex">
                            <div class="blog-post-content-cell">
                                <a href="javascript:void(0)" class="blog-meta" >Tag new</a>
                                <h4 class="blog-post-heading">
                                    <a href="javascript:void(0)">{{$post->translate->name}}</a>
                                </h4>
                                <p class="blog-text">
                                    {{$post->translate->description}}
                                </p>
                                <a class="read-more-btn" href="#">
                                    {{trans('homepage.readMore')}} <i class="ion-android-arrow-dropright-circle"></i
                                    ></a>
                            </div>
                        </div>
                    </article>


                @endforeach
                <!-- single item -->


            </div>
            <!-- Blog Slider Start -->
        </div>
    </section>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Blog Area End -->
    <div id="id01" class="w3-modal w3-margin-top" style="overflow: scroll;">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="overflow: scroll;height: 80vh;padding: 8px;">
            <header class="w3-container w3-blue">
                <h2 id="header-title"></h2>
            </header>
            <br>
            <main class="container-fluid">
                <div id="image">

                </div>
                <div id="description">

                </div>
                <div id="content" class="w3-container city">


                </div>
            </main>

            <div class="w3-container w3-light-grey w3-padding">
                <button class="w3-button w3-right w3-white w3-border"
                        onclick="document.getElementById('id01').style.display='none'">Close
                </button>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function showPostById(id) {
            $('#header-title').empty()
            $('#image').empty()
            $('#description').empty()
            $('#content').empty()
            $.ajax({
                url:'{{route('show-post-by-id',':id')}}'.replace(':id',id),
                dataType:'json',
                method:'GET',
                success:function (response) {
                    if(response.status)
                    {
                        console.log(response)
                        $('#header-title').append(response.data.translate.name)
                        $('#image').append('<img src="{{asset('upload/post')}}/'+response.data.image+'" style="width:100%;"id="image-post"/>')
                        $('#description').append(response.data.translate.description)
                        $('#content').append(response.data.translate.content)
                        let showPostId = document.getElementById('id01');
                        showPostId.style.display = 'block'
                    }
                }
            })

        }
    </script>
@endsection
