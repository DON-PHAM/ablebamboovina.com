@include('Admin_cp.Layout.Header.header')
<div class="wrapper">
    <!-- header -->
    <header class="main-header">
        <div class="container_header">
            <div class="logo d-flex align-items-center justify-content-center justify-content-lg-start">
                <a href="#"> <strong class="logo_icon"> <img src="assets/images/small-logo.png" alt=""> </strong> <span class="logo-default"> <img src="assets/images/logo.png" alt=""> </span> </a>
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
                            <div class="search">
                                <a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view collapsed" href="javascript:void(0);" aria-expanded="false"> <i class=" icon-magnifier"></i> </a>
                                <form id="search_form" role="search" class="search-form collapse" action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <button type="button" class="btn" data-target="#search_form" data-toggle="collapse" aria-label="Close">
                                            <i class="ion-android-search"></i>
                                        </button>
                                    </div>
                                </form>

                            </div>
                            <!-- notification_Start -->
                            <div class="dropdown dropdown-notification">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false"> <i class="fa fa-bell-o"></i> <span class="badge_coun"> 6 </span> </a>
                                <ul class="dropdown-menu scroll_auto height_fixed" >
                                    <li class="bigger">
                                        <h3><span class="bold">Notifications</span></h3>
                                        <span class="notification-label">New 6</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list">
                                            <li>
                                                <a href="javascript:;"> <span class="time">just now</span> <span class="details"> <span class="notification-icon deepPink-bgcolor"> <i class="fa fa-check"></i> </span> Congratulations!. </span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> <span class="time">3 mins</span> <span class="details"> <span class="notification-icon purple-bgcolor"> <i class="fa fa-user o"></i> </span> <b>John Micle </b>is now following you. </span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> <span class="time">7 mins</span> <span class="details"> <span class="notification-icon blue-bgcolor"> <i class="fa fa-comments-o"></i> </span> <b>Sneha Jogi </b>sent you a message. </span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> <span class="time">12 mins</span> <span class="details"> <span class="notification-icon pink"> <i class="fa fa-heart"></i> </span> <b>Ravi Patel </b>like your photo. </span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> <span class="time">15 mins</span> <span class="details"> <span class="notification-icon yellow"> <i class="fa fa-warning"></i> </span> Warning! </span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;"> <span class="time">10 hrs</span> <span class="details"> <span class="notification-icon red"> <i class="fa fa-times"></i> </span> Application error. </span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- notification_End -->

                            <!-- DropDown_Inbox -->
                            <div class="dropdown dropdown-inbox">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="fa fa-envelope-o"></i> <span class="badge_coun"> 2 </span> </a>
                                <ul class="dropdown-menu scroll_auto height_fixed" >
                                    <li class="bigger">
                                        <h3><span class="bold">Messages</span></h3>
                                        <span class="notification-label">New 2</span>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list">
                                            <li>
                                                <a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="photo"> <img src="assets/images/about-1.jpg" class="img-circle" alt=""> </span> <span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span> <span class="message"> Jatin I found you on LinkedIn... </span> </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--DropDown_Inbox_End -->

                            <!-- Dropdown_User -->
                            <div class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"> <img class="img-circle pro_pic" src="assets/images/about-1.jpg" alt=""> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="#"> <i class="icon-user"></i> Profile </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="icon-settings"></i> Settings </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="icon-directions"></i> Help </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="lock_screen.html"> <i class="icon-lock"></i> Lock </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="icon-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown_User_End -->

                            <div class="panle_right">
                                <div class="icon_rightpenle">
                                    <img src="assets/images/table.svg" alt="" height="20" width="20" />
                                </div>
                                <div id="right-sidebar" class="settings-panel">

                                    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="setting-content">
                                        <div class="tab-pane fade show active scroll-wrapper  scroll_auto height_bar" id="todo-section" role="tabpanel" aria-labelledby="todo-section">

                                            <div class="list_space card card-shadow">

                                                <div class="list_space border-bottom">

                                                    <div class="todo--panel">
                                                        <form action="#">
                                                            <div class="input-group add-items">
                                                                <input type="text" name="todo" placeholder="Add New Task" class="form-control" autocomplete="off" required="">
                                                                <div class="input-group-btn">
                                                                    <button type="submit" class="btn-link add btn btn-primary todo-list-add-btn">
                                                                        Add
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="same_todo">
                                                                <ul class="list-group ps" data-trigger="scrollbar">
                                                                    <li class="list-group-item">
                                                                        <label class="todo--label">
                                                                            <input type="checkbox" name="checkbox" value="1" class="todo--input" checked="">
                                                                            <span class="todo--text">Schedule Meeting</span> </label>
                                                                        <a href="#" class="todo--remove">&times;</a>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label class="todo--label">
                                                                            <input type="checkbox" name="checkbox" value="2" class="todo--input">
                                                                            <span class="todo--text">Call Clients To Follow-Up</span> </label>
                                                                        <a href="#" class="todo--remove">&times;</a>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label class="todo--label">
                                                                            <input type="checkbox" name="checkbox" value="3" class="todo--input" checked="">
                                                                            <span class="todo--text">Book Flight For Holiday</span> </label>
                                                                        <a href="#" class="todo--remove">&times;</a>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <label class="todo--label">
                                                                            <input type="checkbox" name="checkbox" value="4" class="todo--input">
                                                                            <span class="todo--text">Forward Important Tasks</span> </label>
                                                                        <a href="#" class="todo--remove">&times;</a>
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="events py-4 border-bottom px-3">
                                                <div class="wrapper d-flex align-items-center mb-2">
                                                    <i class="fa fa-circle-o text-primary mr-2" aria-hidden="true"></i>
                                                    <span class="f18">Feb 11 2018</span>
                                                </div>
                                                <p class="mb-0 font-weight-thin text-gray">
                                                    Creating component page
                                                </p>
                                                <p class="text-gray mb-0">
                                                    build a js based app
                                                </p>
                                            </div>
                                            <div class="events pt-4 px-3">
                                                <div class="wrapper d-flex align-items-center mb-2">
                                                    <i class="fa fa-circle-o text-primary mr-2" aria-hidden="true"></i>
                                                    <span class="f18">Feb 7 2018</span>
                                                </div>
                                                <p class="mb-0 font-weight-thin text-gray">
                                                    Meeting with Alisa
                                                </p>
                                                <p class="text-gray mb-0 ">
                                                    Call Sarah Graves
                                                </p>
                                            </div>
                                        </div>
                                        <!-- To do section tab ends -->
                                        <div class="tab-pane fade  scroll_auto height_bar" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                                            <div class="d-flex align-items-center justify-content-between border-bottom">
                                                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">
                                                    Friends
                                                </p>
                                                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                                            </div>
                                            <ul class="chat-list">
                                                <li class="list active">
                                                    <div class="profile"><img src="assets/images/img_new1.jpg" alt="image"><span class="online"></span>
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            Thomas Douglas
                                                        </p>
                                                        <p>
                                                            Available
                                                        </p>
                                                    </div>
                                                    <small class="text-muted my-auto">19 min</small>
                                                </li>
                                                <li class="list">
                                                    <div class="profile"><img src="assets/images/img_new2.jpg" alt="image"><span class="offline"></span>
                                                    </div>
                                                    <div class="info">
                                                        <div class="wrapper">
                                                            <p>
                                                                Catherine
                                                            </p>
                                                            <p>
                                                                Away
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <div class="badge badge-success badge-pill my-auto mx-2">
                                                        4
                                                    </div>
                                                    <small class="text-muted my-auto">23 min</small>
                                                </li>
                                                <li class="list">
                                                    <div class="profile"><img src="assets/images/img_new3.jpg" alt="image"><span class="online"></span>
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            Daniel Russell
                                                        </p>
                                                        <p>
                                                            Available
                                                        </p>
                                                    </div>
                                                    <small class="text-muted my-auto">14 min</small>
                                                </li>
                                                <li class="list">
                                                    <div class="profile"><img src="assets/images/img_new4.jpg" alt="image"><span class="offline"></span>
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            James Richardson
                                                        </p>
                                                        <p>
                                                            Away
                                                        </p>
                                                    </div>
                                                    <small class="text-muted my-auto">2 min</small>
                                                </li>
                                                <li class="list">
                                                    <div class="profile"><img src="assets/images/img_new5.jpg" alt="image"><span class="online"></span>
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            Madeline Kennedy
                                                        </p>
                                                        <p>
                                                            Available
                                                        </p>
                                                    </div>
                                                    <small class="text-muted my-auto">5 min</small>
                                                </li>
                                                <li class="list">
                                                    <div class="profile"><img src="assets/images/img_new6.jpg" alt="image"><span class="online"></span>
                                                    </div>
                                                    <div class="info">
                                                        <p>
                                                            Sarah Graves
                                                        </p>
                                                        <p>
                                                            Available
                                                        </p>
                                                    </div>
                                                    <small class="text-muted my-auto">47 min</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- chat tab ends -->
                                    </div>
                                </div>

                            </div>

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
    <!-- Footer -->
    <footer class="footer ptb-20">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="copy_right">
                    <p>
                        {{date('Y')}} © donpv

                    </p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer_End -->
</div>
@include('Admin_cp.Layout.Footer.footer')
