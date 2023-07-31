@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')
    <style>
        .about-area .col-6 {
            width: calc(25% - 15px); /* Tính toán chiều rộng của mỗi phần tử */
            margin-right: 15px; /* Khoảng cách giữa các phần tử */
            margin-bottom: 15px; /* Khoảng cách giữa các hàng */
        }
        .about-area .item {
            display: inline-block;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: none;
            transition: all 0.1s ease-in-out;
        }

        .about-area .item > img {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -ms-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
            box-sizing: border-box;
            height: 100%;
        }
        .about-area .item:hover > img {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .about-area .col-6:nth-child(4n+1) {
            clear: left; /* Xuống dòng sau khi hiển thị 4 phần tử trên 1 hàng */
        }

        .about-area .col-6 img {
            max-width: 100%;
            border: 1px solid #ede1e1; /* Border cho ảnh */
        }
    </style>

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area" style="background-image: url({{asset('upload/category/'.$categoryParent->banner)}})">
    </section>
    <!-- Breadcrumb Area End -->
    <section class="about-area category pt-3 banner-3-area">
        <div class="section-title border-bottom">
            <div class="container">
                <h2 class="pb-3">Category</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if($categoryChildren)
                    @foreach($categoryChildren as $category)
                        @if(isset($category->product))
                        <div class="col-6 col-sm-3 col-md-3 mb-4">
                            <div class="col-category border">
                                <a href="{{route('detail-page', $category->product->id)}}" class="item">
                                    <img style="max-width: 100%" src="{{asset('upload/category/'.$category->image)}}" alt=""/>
                                </a>
                                <div class="name text-center mt-1 mb-2">{{$category->translate->name}}</div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
