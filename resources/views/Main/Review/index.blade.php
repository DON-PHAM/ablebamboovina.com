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
                @if($videos)
                    @foreach($videos as $video)
                        @if($video->status == 1)
                            <div class="col-6 col-sm-4 col-md-3 mb-3">
                                <article class="list-product mb-30px">
                                    <div class="img-block text-center">
                                        <video id="video" autoplay width="300"
                                               src="{{asset('upload/video/'.$video->video)}}" height="300"
                                               controls></video>
                                        <div class="mt-1 mb-3 px-2"
                                             style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 48px">
                                            {{$video->name}}
                                        </div>
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
