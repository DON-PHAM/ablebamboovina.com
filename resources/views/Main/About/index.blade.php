@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-hrading">Giới thiệu</h1>
                        <ul class="breadcrumb-links">
                            <li><a href="{{route('homepage')}}">Trang chủ</a></li>
                            <li>Giới thiệu</li>
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
                @if($abouts)
                    @foreach ($abouts as $about)
                        @if ($loop->first)
                            <div class="col-md-6 mb-50px">
                                <div class="about-left-image">
                                    <img src="{{asset('upload/about/'.$about->image)}}"
                                         alt="{{ $about->translate->title }}"
                                         class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-6 mb-30px">
                                <div class="about-content">
                                    <div class="about-title">
                                        <h2>{{ $about->translate->title }}</h2>
                                    </div>
                                    {{ $about->translate->description }}
                                </div>
                            </div>
                        @else
                            <div class="col-md-6 mb-30px">
                                <div class="single-about">
                                    <h4>{{ $about->translate->title }}</h4>
                                    {{ $about->translate->description }}
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
