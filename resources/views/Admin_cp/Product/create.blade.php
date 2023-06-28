@extends('Admin_cp.Layout.master')
@section('title',trans('product.title'))
@section('content')
    <!--page title start-->
    <div class="page-heading">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="page-breadcrumb">
                        <h1>{{trans('category.list-category-product')}}</h1>
                    </div>

                </div>
                <div class="col-md-6 justify-content-md-end d-flex">
                    <div class="breadcrumb_nav">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a class="parent-item" href="{{route('admin')}}">{{trans('home.home')}}</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">
                                {{trans('home.category-product')}}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page title end-->
    <div class="container-fluid">
        <form id="signupForm1" method="post" class=" right-text-label-form feedback-icon-form">
            <!-- state start-->
            <div class="row">
                <div class=" col-md-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Basic Validation
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="signupForm" method="post" class=" right-text-label-form" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label" for="firstname">First name</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                               placeholder="First name"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-4 control-label" for="lastname">Last name</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                               placeholder="Last name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label" for="username">Username</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="username" name="username"
                                               placeholder="Username"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label" for="email">Email</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="email" name="email"
                                               placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label" for="password">Password</label>
                                    <div class="col-sm-5">
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="Password"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 control-label" for="confirm_password">Confirm
                                        password</label>
                                    <div class="col-sm-5">
                                        <input type="password" class="form-control" id="confirm_password"
                                               name="confirm_password" placeholder="Confirm password"
                                        />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 ml-auto">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="agree" name="agree" value="agree"/>
                                                Please agree to our policy </label>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class=" col-md-12">

                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Using feedback icons
                            </div>
                        </div>
                        <div class="card-body">

                            action="#">
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="firstname1">First name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="firstname1" name="firstname1"
                                           placeholder="First name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="lastname1">Last name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="lastname1" name="lastname1"
                                           placeholder="Last name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="username1">Username</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username1" name="username1"
                                           placeholder="Username"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="email1">Email</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="email1" name="email1"
                                           placeholder="Email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="password1">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password1" name="password1"
                                           placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="confirm_password1">Confirm password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="confirm_password1"
                                           name="confirm_password1" placeholder="Confirm password"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label"> </label>
                                <div class="col-sm-5 ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="agree1" name="agree1" value="agree"/>
                                            Please agree to our policy </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Using feedback icons
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="firstname1">First name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="firstname1" name="firstname1"
                                           placeholder="First name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="lastname1">Last name</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="lastname1" name="lastname1"
                                           placeholder="Last name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="username1">Username</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="username1" name="username1"
                                           placeholder="Username"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="email1">Email</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="email1" name="email1"
                                           placeholder="Email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="password1">Password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="password1" name="password1"
                                           placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label" for="confirm_password1">Confirm password</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="confirm_password1"
                                           name="confirm_password1" placeholder="Confirm password"
                                    />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label"> </label>
                                <div class="col-sm-5 ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="agree1" name="agree1" value="agree"/>
                                            Please agree to our policy </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 ml-auto">
                                    <button type="submit" class="btn btn-info" name="signup1" value="Sign up">
                                        Sign up
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
