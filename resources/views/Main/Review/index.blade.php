@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-hrading">Đánh giá</h1>
                        <ul class="breadcrumb-links">
                            <li><a href="{{route('homepage')}}">Trang chủ</a></li>
                            <li>Đánh giá</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                @if($products)
                    @foreach($products as $product)
                        @if($product->status == 1)
                            <div class="col-6 col-sm-4 col-md-3 mb-3">
                                <article class="list-product mb-30px">
                                    <div class="img-block">
                                        <a href="{{route('detail-page',$product->id)}}" class="thumbnail">
                                            <img
                                                style="max-width: 100%"
                                                class="first-img"
                                                src="{{asset('upload/product/'.$product->code.'/'.$product->image)}}"
                                                alt=""
                                            />
                                        </a>
                                    </div>
                                </article>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
