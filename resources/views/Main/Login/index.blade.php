@extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-hrading">{{trans('homepage.login')}} / {{trans('homepage.register')}}</h1>
                        <ul class="breadcrumb-links">
                            <li><a href="{{route('homepage')}}">{{trans('home.home')}}</a></li>
                            <li>{{trans('homepage.login')}} / {{trans('homepage.register')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <div class="login-register-area mb-60px mt-53px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mx-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>{{trans('homepage.login')}}</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>{{trans('homepage.register')}}</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container w-100">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="username" placeholder="{!! trans('login.email') !!}">
                                            <input type="password" name="password" placeholder="{!! trans('login.password') !!}">
                                            <div class="button-box text-center">
                                                <button type="submit"><span>{{trans('homepage.login')}}</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="{{route('post-register')}}" method="Post">
                                            @csrf
                                            <input type="email" name="email" placeholder="{!! trans('login.email') !!}">
                                            <input type="text" name="username" placeholder="Tên người dùng">
                                            <input type="text" name="name" placeholder="Tên hiển thị">
                                            <input type="password" name="password" placeholder="{!! trans('login.password') !!}">
                                            <input type="password" name="confirm" placeholder="{!! trans('login.passwordConfirm') !!}">
                                            <input type="text" name="phonenumber" placeholder="{{trans('login.phone')}}">
                                            <div class="button-box text-center">
                                                <button type="submit"><span>{{trans('homepage.register')}}</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
