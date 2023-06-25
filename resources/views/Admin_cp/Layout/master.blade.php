@include('Admin_cp.Layout.Header.header')
<div class="wrapper">
    <!-- header -->
    <header class="main-header">
        <div class="container_header">
            <div class="logo d-flex align-items-center justify-content-center justify-content-lg-start">
                <a href="#"> <strong class="logo_icon"> <img src="{!! asset('backend/assets/images/small-logo.png') !!}" alt=""> </strong> <span class="logo-default"> <img src="{!! asset('backend/assets/images/logo.png') !!}" alt=""> </span> </a>
                <div class="icon_menu">
                    <a href="#" class="menu-toggler sidebar-toggler"></a>
                </div>
            </div>

            <div class="right_detail">
                <div class="row d-flex align-items-center min-h pos-md-r">
                    <div class="col-xl-5 col-3 search_col">
                        <div class="top_function">

                        </div>
                    </div>

                    <div class="col-xl-7 col-9 d-flex justify-content-end">
                        <div class="right_bar_top d-flex align-items-center">

                            <select class="language custom-select mb-2 mr-sm-2 mb-sm-0" id="language">
                                <?php $locale = session()->get('locale');  ?>
                                    <option value="vi" @if($locale == 'vi') selected @endif>Tiếng Việt</option>
                                    <option value="ko" @if($locale == 'ko') selected @endif>한국인</option>
                            </select>



                            <!-- Dropdown_User -->
                            <div class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <img class="img-circle pro_pic" src="{!! asset('backend/assets/images/about-1.jpg') !!}" alt=""> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="#"> <i class="icon-user"></i> {!! trans('home.profile') !!} </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="icon-settings"></i>{!! trans('home.setting') !!} </a>
                                    </li>

                                    <li>
                                        <a href="#"> <i class="icon-logout"></i> {!! trans('home.logout') !!} </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown_User_End -->
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </header>
    <!-- header_End -->
    <!-- Content_right -->
    <div class="container_full">

        @include('Admin_cp.Layout.Siderbar.siderbar')
        <div class="content_wrapper">
            @yield('content')
        </div>
    </div>
    <!-- Content_right_End -->

@include('Admin_cp.Layout.Footer.footer')
