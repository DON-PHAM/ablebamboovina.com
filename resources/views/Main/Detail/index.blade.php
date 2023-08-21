@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')
    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        #rating {
            border: none;
            float: left;
        }

        #rating > input {
            display: none;
        }

        /*ẩn input radio - vì chúng ta đã có label là GUI*/
        #rating > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        /*1 ngôi sao*/
        #rating > .half:before {
            content: "\f089";
            position: absolute;
        }

        /*0.5 ngôi sao*/
        #rating > label {
            color: #ddd;
            float: right;
        }

        /*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
        /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
        #rating > input:checked ~ label,
        #rating:not(:checked) > label:hover,
        #rating:not(:checked) > label:hover ~ label {
            color: #FFD700;
        }

        /* Hover vào các sao phía trước ngôi sao đã chọn*/
        #rating > input:checked + label:hover,
        #rating > input:checked ~ label:hover,
        #rating > label:hover ~ input:checked ~ label,
        #rating > input:checked ~ label:hover ~ label {
            color: #FFED85;
        }

        /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    </style>

    <!-- Breadcrumb Area start -->
    <!-- Slider Arae Start -->
    <section class="breadcrumb-area"
             style="background-image: url({{asset('upload/category/'.$product->getCategory->banner)}})"></section>
    <!-- Breadcrumb Area End -->
    <!-- Shop details Area start -->
    <section class="product-details-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 product-detail">
                    <div class="product-details-img product-details-tab">
                        <div class="zoompro-wrap zoompro-2">
                            <div class="zoompro-border zoompro-span">
                                <img
                                    class="zoompro"
                                    src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                    data-zoom-image="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div id="gallery" class="product-dec-slider-2 mt-3">
                            <a
                                class="active"
                                data-image="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                data-zoom-image="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                            >
                                <img
                                    style="max-width: 100px"
                                    src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                    alt=""
                                />
                            </a>
                            @foreach($product->images as $thumb)
                                <a
                                    class="active"
                                    data-image="{{asset('upload/product/'.$product->code.'/'.$thumb->image)}}"
                                    data-zoom-image="{{asset('upload/product/'.$product->code.'/'.$thumb->image)}}"
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
                                    <li class="old-price not-cut pe-2">{{number_format($product->price)}}</li>
                                    <li class="current-price old-price">{{$product->price * $product->discount / 100}}</li>
                                    <li class="discount-price">-{{$product->discount}}%</li>
                                @else
                                    <li class="old-price not-cut">{{number_format($product->price)}} VNĐ</li>
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
                                <a href="javascript:void(0)"
                                   onclick="addToCart({{$product->id}})">
                                    + {{trans('homepage.addToCart')}}</a>
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
                    <a class="active" data-bs-toggle="tab" href="#des-details1">Mô tả</a>
                    <a data-bs-toggle="tab" href="#des-details3">Reviews </a>
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details1" class="tab-pane active">
                        <div class="product-description-wrapper">
                            {!! $product->translate->content !!}
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="row w-100">
                            <div class="col-lg-7">
                                <div class="review-wrapper">
                                    @if(isset($product->review))
                                        @foreach($product->review as $review)
                                            <div class="single-review" style="border-bottom: 1px solid #eee;
    padding: 17px;">
                                                <div class="review-img" style="width: 20px;height: 20px">
                                                    <img
                                                        src="{{asset('upload/product/'.$product->code.'/'.$thumb->image)}}"
                                                        width="100%" alt="">
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h2><strong>{{$review->name}}</strong></h2>
                                                                <span>({{$review->created_at}})</span>
                                                            </div>
                                                            <div class="rating-product">
                                                                @for($i = 0; $i < $review->rate;$i++)
                                                                    <i class="ion-android-star"></i>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                            {{$review->content}}

                                                        </p>
                                                        <p>
                                                            @php
                                                                $path = public_path('upload/review/'.$review->video);
                                                                $extension = \Illuminate\Support\Facades\File::extension($path);
                                                                $videoExtensions = ['mp4', 'avi', 'mov', 'wmv'];
                                                            @endphp
                                                            @if(in_array($extension,$videoExtensions))
                                                                <video id="video" class="video" autoplay width="150"
                                                                       src="{{asset('upload/review/'.$review->video)}}" height="150"
                                                                       preload="auto" loop playsinline webkit-playsinline x5-playsinline autoplay></video>
                                                            @else
                                                                <img src="{{asset('upload/review/'.$review->video)}}" width="200px">
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="col-lg-5">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <div class="ratting-form-wrapper pl-50">
                                        <h3>Add a Review</h3>
                                        <div class="ratting-form">
                                            <form id="review" method="post"
                                                  action="{{route('post-review',$product->id)}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="star-box">
                                                    <span>Your rating:</span>
                                                    <div id="rating">
                                                        <input type="radio" id="star5" name="rating" checked value="5"/>
                                                        <label class="full" for="star5"
                                                               title="Awesome - 5 stars"></label>

                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4"/>
                                                        <label class="half" for="star4half"
                                                               title="Pretty good - 4.5 stars"></label>

                                                        <input type="radio" id="star4" name="rating" value="4"/>
                                                        <label class="full" for="star4"
                                                               title="Pretty good - 4 stars"></label>

                                                        <input type="radio" id="star3" name="rating" value="3"/>
                                                        <label class="full" for="star3" title="Meh - 3 stars"></label>

                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/>
                                                        <label class="half" for="star2half"
                                                               title="Kinda bad - 2.5 stars"></label>

                                                        <input type="radio" id="star2" name="rating" value="2"/>
                                                        <label class="full" for="star2"
                                                               title="Kinda bad - 2 stars"></label>

                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/>
                                                        <label class="half" for="star1half"
                                                               title="Meh - 1.5 stars"></label>

                                                        <input type="radio" id="star1" name="rating" value="1"/>
                                                        <label class="full" for="star1"
                                                               title="Sucks big time - 1 star"></label>

                                                        <input type="radio" id="starhalf" name="rating" value="half"/>
                                                        <label class="half" for="starhalf"
                                                               title="Sucks big time - 0.5 stars"></label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style mb-10">
                                                            <input placeholder="Name" type="text" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="rating-form-style mb-10">
                                                            <input placeholder="Email" type="email" name="email">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="rating-form-style form-submit">
                                                            <textarea name="contents" placeholder="Message"></textarea>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="rating-form-style form-submit">
                                                            <input type="file" class="form-control" name="file"
                                                                   id="file">
                                                            <button type="submit" class="btn btn-primary">Đánh giá
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <div class="ratting-form-wrapper pl-50">
                                        <h3>Vui lòng <a href="{{route('login-page')}}">đăng nhập</a> để bình luận sản phẩm</h3>
                                    </div>
                                @endif
                            </div>
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
                                    <li class="cart">
                                        <a class="cart-btn" href="javascript:void(0)"
                                           onclick="addToCart({{$product->id}})">
                                            + {{trans('homepage.addToCart')}}</a>
                                    </li>
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
                                    <li class="cart">
                                        <a class="cart-btn" href="javascript:void(0)"
                                           onclick="addToCart({{$product->id}})">
                                            + {{trans('homepage.addToCart')}}</a>
                                    </li>
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
@section('script')
    <script>
        function addToCart(id) {
            $.ajax({
                url:'{{route('add-to-cart',':id')}}'.replace(':id',id),
                dataType:'json',
                method:'get',
                success:function (response){
                    location.reload();
                    toastr.success('Thêm thành công giỏ hàng');
                }
            })
        }
    </script>
@endsection



