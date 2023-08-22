 @extends('Main.Layout.main')
@section('title',trans('Ablebamboovina'))
@section('content')

    <!-- Breadcrumb Area start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-hrading">Account</h1>
                        <ul class="breadcrumb-links">
                            <li><a href="{{route('homepage')}}">{{trans('home.home')}}</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
    <div class="checkout-area mtb-60px">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-9">
                    <div class="checkout-wrapper">
                        <div id="faq" class="panel-group">
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>1 .</span> <a data-bs-toggle="collapse" data-parent="#faq" href="#my-account-1" aria-expanded="true" class="">Edit your account information </a></h3>
                                </div>
                                @if(session()->get('user'))
                                <div id="my-account-1" class="panel-collapse collapse show" style="">
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>My Account Information</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Full Name</label>
                                                        <input type="text" name="name" value="{{session()->get('user')->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>UserName</label>
                                                        <input type="text" name="username" value="{{session()->get('user')->username}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Email</label>
                                                        <input type="email" name="email" disabled value="{{session()->get('user')->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Phone</label>
                                                        <input type="text" name="phonenumber" value="{{session()->get('user')->phonenumber}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="panel panel-default single-my-account">
                                <div class="panel-heading my-account-title">
                                    <h3 class="panel-title"><span>2 .</span> <a data-bs-toggle="collapse" data-parent="#faq" href="#my-account-2" class="" aria-expanded="true">Change your password </a></h3>
                                </div>
                                <div id="my-account-2" class="panel-collapse collapse show" style="">
                                    <div class="panel-body">
                                        <div class="myaccount-info-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>Change Password</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Password</label>
                                                        <input type="password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Password Confirm</label>
                                                        <input type="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-back">
                                                    <a href="#"><i class="fa fa-arrow-up"></i> back</a>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit">Save</button>
                                                </div>
                                            </div>
                                        </div>
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
