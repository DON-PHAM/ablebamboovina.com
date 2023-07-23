@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="breadcrumb-content">--}}
{{--                        <h1 class="breadcrumb-hrading">Shop Page</h1>--}}
{{--                        <ul class="breadcrumb-links">--}}
{{--                            <li><a href="{{route('homepage')}}">Home</a></li>--}}
{{--                            <li>Shop Grid</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <!-- Breadcrumb Area End -->
    <!-- Shop Category Area End -->
    <div class="shop-category-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar">
                        <!-- Left Side start -->
                        <div class="shop-tab nav mb-res-sm-15">
                            <p>{{count($products)}} {{trans('home.product')}}</p>
                        </div>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap">
                            <div class="shot-product">
                                <p>Bộ lọc:</p>
                            </div>
                            <div class="shop-select">
                                <select>
                                    <option value="">Mới nhất</option>
                                    <option value="">A-Z</option>
                                    <option value="">Z-A</option>
                                </select>
                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area mt-35">
                        <!-- Shop Tab Content Start -->
                        <div class="tab-content jump">
                            <!-- Tab One Start -->
                            <div id="shop-1" class="tab-pane active">
                                <div class="row w-100 justify-content-center">
                                    @if($products)
                                        @foreach($products as $product)
                                            @if($product->status == 1)
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <article class="list-product">
                                                        <div class="img-block text-center">
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
                                                               href="javascript:void(0)"><span>{{$product->translate->name}}</span></a>
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
                                                                <li class="cart">
                                                                    <button class="cart-btn add-to-cart" onclick="addToCart({{$product}}, document.getElementById('mess-success').value, document.getElementById('mess-exist').value)">
                                                                        {{trans('homepage.addToCart')}}
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                    {{$products->links("pagination::bootstrap-4")}}
                                </div>
                            </div>
                            <!-- Tab One End -->
                        </div>
                        <!-- Shop Tab Content End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Category Area End -->
@endsection


