@extends('Admin_cp.Layout.master')
@section('title',trans('product.title'))
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <i class="fas fa-cogs" aria-hidden="true"></i> Store infomation
                    </h1>
                    <div class="more_info"></div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}"><i
                                    class="fa fa-home fa-1x"></i> Home</a></li>
                        <li class="breadcrumb-item active">{{trans('setting.setting')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline card-outline-tabs">

                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="row">
                            <div class="col-md-5">
                                <form>
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Logo</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="file" id="logo" name="logo"
                                                           value=""
                                                           class="form-control input-sm logo" placeholder="">
                                                </div>
                                                <div id="preview_image" class="img_holder"><img alt="Logo" title=""
                                                                                                src="https://demo.s-cart.org/data/logo/scart-mid.png"
                                                                                                style=" width:100px;">
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Company</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" id="company" name="company" value=""
                                                           class="form-control input-sm icon" placeholder="">
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>slogan</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="text" id="slogan" name="slogan" value=""
                                                           class="form-control input-sm icon" placeholder="">
                                                </div>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-envelope"></i> Tax</td>
                                            <td><input type="text" id="tax" name="tax" value=""
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-envelope"></i> Email</td>
                                            <td><input type="email" id="Email" name="Email" value=""
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-phone-alt"></i> Phone</td>
                                            <td><input type="text" id="phone" name="phone" value=""
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>

                                        <tr>
                                            <td><i class="far fa-calendar-alt"></i> Địa chỉ</td>
                                            <td><input type="text" id="address" name="address" value=""
                                                       class="form-control input-sm icon" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-map-marked"></i> facebook</td>
                                            <td><input type="text" id="facebook" name="facebook" value=""
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-location-arrow"></i> tiktok</td>
                                            <td><input type="text" id="tiktok" name="tiktok" value=""
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-warehouse"></i> intagram</td>
                                            <td><input type="text" id="intagram" name="intagram" value=""
                                                       class="form-control input-sm icon" placeholder="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><i class="fab fa-chrome"></i> kakaotalk</td>
                                            <td><input type="text" id="kakaotalk" name="kakaotalk" value=""
                                                       class="form-control input-sm icon" placeholder=""></td>
                                        </tr>

                                        <tr>
                                            <td><i class="nav-icon  fas fab-button "></i>Thực hiện</td>
                                            <td>
                                                <input type="submit" id="submit" name="icon" value="Save"
                                                       class="btn btn-success input-sm icon" placeholder="">
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
