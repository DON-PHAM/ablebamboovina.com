@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area"></section>
    <!-- Breadcrumb Area End -->
    <section class="about-area review pt-3">
        <div class="section-title border-bottom">
            <div class="container">
                <h2 class="pb-3">Promotion</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if($videos)
                    @foreach($videos as $video)
                        @if($video->status == 1)
                            <div class="col-6 col-sm-4 col-md-3 mb-3 video-container">
                                <article class="list-product mb-30px" style="height: 215px">
                                    <div class="img-block text-center" style="height: 100%;width: 100%">
                                        <div style="height: 70%">
                                            <video id="video" class="video" autoplay  width="100%"
                                                   src="{{asset('upload/video/'.$video->video)}}" height="100%"
                                            ></video>
                                        </div>

                                        <div class="mt-1 mb-3 px-2 name-promotion">
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
