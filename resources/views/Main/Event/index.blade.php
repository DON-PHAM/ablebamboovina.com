@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area"></section>
    <!-- Breadcrumb Area End -->
    <section class="about-area event pt-3">
        <div class="section-title border-bottom banner-3-area">
            <div class="container">
                <h2 class="pb-3">Event</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if($events)
                    @foreach($events as $product)
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <article class="list-product">
                                <div class="img-block">
                                    <a href="{{route('detail-event-page',$product->id)}}"
                                       class="thumbnail">
                                        <img
                                            class="img-thumbnail"
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
                                                <button class="cart-btn add-to-cart" onclick="addToCart({{$product->id}})">
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
