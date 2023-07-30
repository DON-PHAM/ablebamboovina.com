@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')
    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area"></section>
    <!-- Breadcrumb Area End -->
    <section class="about-area review pt-3">
        <div class="section-title border-bottom">
            <div class="container">
                <h2 class="pb-3">Review</h2>
            </div>
        </div>

        <div class="container">
            <div class="shop-top-bar">
                <!-- Right Side Start -->
                <div class="select-shoing-wrap">
                    <div class="shot-product">
                        <p>Bộ lọc:</p>
                    </div>
                    <div class="shop-select" style="max-width: 27%">
                        <select class="nice-select">
                            <option value="">Mới nhất</option>
                            <option value="">A-Z</option>
                            <option value="">Z-A</option>
                        </select>
                    </div>
                </div>
                <!-- Right Side End -->
            </div>
            <div class="row">
                @if($videos)
                    @foreach($videos as $video)
                        <div class="col-6 col-sm-4 col-md-3 mb-3 video-container">
                            <article class="list-product mb-30px">
                                <div class="img-block text-center" style="position: relative;width: 100%;height: 100%">
                                    @php
                                        $path = public_path('upload/review/'.$video->video);
                                        $extension = \Illuminate\Support\Facades\File::extension($path);
                                        $videoExtensions = ['mp4', 'avi', 'mov', 'wmv'];
                                    @endphp
                                    @if(in_array($extension,$videoExtensions))
                                        <div style="height: 70%;width: 100%">
                                            <video src="{{asset('upload/review/'.$video->video)}}" preload="auto" loop playsinline webkit-playsinline x5-playsinline autoplay width="100%" height="100%"></video>
                                        </div>
                                        <div class="mt-1 mb-3 px-2 info-review">
                                            <div class="rating-product">
                                                @for($i = 0; $i < $video->rate;$i++)
                                                    <i class="ion-android-star"></i>
                                                @endfor
                                            </div>
                                            <span class="name-review">{{$video->name}}</span>
                                            <span class="time-review">{{$video->created_at}}</span>
                                        </div>
                                    @else
                                        <div style="height: 70%;width: 100%">
                                            <img src="{{asset('upload/review/'.$video->video)}}" width="100%" height="100%">
                                        </div>

                                        <div class="mt-1 mb-3 px-2 info-review">
                                            <div class="rating-product">
                                                @for($i = 0; $i < $video->rate;$i++)
                                                    <i class="ion-android-star"></i>
                                                @endfor
                                            </div>
                                            <span class="name-review"> {{$video->name}}</span>
                                            <span class="time-review">{{$video->created_at}}</span>

                                        </div>
                                    @endif
                                </div>
                            </article>
                        </div>

                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <script>

        let videoContainers = document.querySelectorAll(".video-container");

        for (let i = 0; i < videoContainers.length; i++) {
            let video = videoContainers[i].querySelector(".video");
            let isPlaying = false;

            // Pause the video on page load
            video.pause();

            // Play the video on hover
            videoContainers[i].onmouseover = function() {
                if (!isPlaying) {
                    video.play();
                    isPlaying = true;
                }
            };

            // Pause the video when the mouse leaves the video element
            videoContainers[i].onmouseleave = function() {
                video.pause();
                isPlaying = false;
            };
        }

    </script>

@endsection
