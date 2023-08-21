@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
        {{--        <div class="container">--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-md-12">--}}
        {{--                    <div class="breadcrumb-content">--}}
        {{--                        <h1 class="breadcrumb-hrading">Đánh giá</h1>--}}
        {{--                        <ul class="breadcrumb-links">--}}
        {{--                            <li><a href="{{route('homepage')}}">{{trans('home.home')}}</a></li>--}}
        {{--                            <li>Đánh giá</li>--}}
        {{--                        </ul>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </section>
    <!-- Breadcrumb Area End -->
    <section class="about-area review pt-3">
        <div class="section-title border-bottom banner-3-area">
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
                                <article class="list-product mb-30px">
                                    <div class="img-block text-center">
                                        <video id="video-{{$video->id}}" class="video" width="300"
                                               src="{{asset('upload/video/'.$video->video)}}" height="300"
                                               controls></video>
                                        <div class="mt-1 mb-3 px-2"
                                             style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 48px">
                                            {{$video->name}}
                                        </div>
                                    </div>
                                </article>
                            </div>

                            <div class="modal fade" id="showVideoDetail-video-{{$video->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <video class="video-render" width="100%"
                                                   src="{{asset('upload/video/'.$video->video)}}"
                                                   controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
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

                let videoContainersRender = document.querySelectorAll(`#showVideoDetail-${video.id}`);
                let videoRender = videoContainersRender[0].querySelector(".video-render");
                videoContainers[i].onclick = function() {
                    $(`#showVideoDetail-${video.id}`).modal('show');
                    video.pause();
                    videoRender.play();
                    isPlaying = false;
                }

                $(`#showVideoDetail-${video.id}`).on('hide.bs.modal', function(){
                    video.pause();
                    videoRender.pause();
                });
            }
        });
    </script>
@endsection
