@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="breadcrumb-content">--}}
{{--                        <h1 class="breadcrumb-hrading">Sự kiện</h1>--}}
{{--                        <ul class="breadcrumb-links">--}}
{{--                            <li><a href="{{route('homepage')}}">{{trans('home.home')}}</a></li>--}}
{{--                            <li>Sự kiện</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <!-- Breadcrumb Area End -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                @if($events)
                    @foreach($events as $product)
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="{{route('detail-page',$product->id)}}"
                                       class="thumbnail">
                                        <img
                                            class="first-img"
                                            src="{{asset('upload/event/'.$product->code.'/'.$product->image)}}"
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
                                                <li class="discount-price">
                                                    -{{$product->discount}}%
                                                </li>
                                            @else
                                                <li class="current-price">{{$product->price}}</li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="add-to-link">
                                        <ul class="d-flex justify-content-center">
                                            <li class="cart">
                                                <button class="cart-btn add-to-cart" onclick="addToCart({{$product}})">
                                                    Thêm vào giỏ hàng
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                @endif
                {{$events->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        function addToCart(e) {
            const listProductInCart = localStorage.getItem('listProductInCart')
            if (!listProductInCart) {
                const temp = []
                temp.push(e)
                localStorage.setItem('listProductInCart', JSON.stringify(temp))
                toastr.success('Thêm vào giỏ hàng thành công');
                $(".item-quantity-tag").html(1)
            } else {
                const temp = JSON.parse(listProductInCart)
                const check = temp.find(item => item.id === e.id)
                if (!check) {
                    temp.push(e)
                    localStorage.setItem('listProductInCart', JSON.stringify(temp))
                    toastr.success('Thêm vào giỏ hàng thành công');
                    $(".item-quantity-tag").html(JSON.parse(listProductInCart).length + 1)
                } else {
                    toastr.warning('Sản phẩm đã có trong giỏ hàng');
                }
            }
        }
    </script>
@endsection
