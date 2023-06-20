@extends('Admin_cp.Layout.master')
@section('content')
    <div class="container-fluid">
        <!-- breadcrumb -->
        <div class="page-heading">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="page-breadcrumb">
                        <h1>Dashboard</h1>
                    </div>
                </div>
                <div class="col-md-6 justify-content-md-end d-md-flex">
                    <div class="breadcrumb_nav">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a class="parent-item" href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb_End -->

        <!-- Section -->
        <section class="chart_section">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-primary border-0 text-light">
                        <div class="card-body">
                            <div class="row d-flex row d-flex align-items-center pl-3">
                                <div class="pr-3">

                                    <i class="fa fa-bar-chart f30" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 text-light">Total Leads</h6>
                                    <p class="f12 mb-0">
                                        1398
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-info border-0 text-light">
                        <div class="card-body">
                            <div class="row d-flex row d-flex align-items-center pl-3">
                                <div class="pr-3">
                                    <i class="icon-wallet f30"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 text-light">Total Payment</h6>
                                    <p class="f12 mb-0">
                                        $6,547
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 text-light bg-warning">
                        <div class="card-body">
                            <div class="row d-flex row d-flex align-items-center pl-3">
                                <div class="pr-3">
                                    <i class="fa fa-shopping-basket f30" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 text-light">Total Sales </h6>
                                    <p class="f12 mb-0">
                                        379
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card bg-danger border-0 text-light">
                        <div class="card-body">
                            <div class="row d-flex row d-flex align-items-center pl-3">
                                <div class="pr-3">
                                    <i class="fa fa-database f30" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h6 class="m-0 text-light">New Orders</h6>
                                    <p class="f12 mb-0">
                                        4567
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-lg-12 col-xl-7">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Sales This week
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="b-area" class="box_height"></div>
                        </div>
                    </div>
                </div>


                <div class="col-md-5 col-lg-12 col-xl-5">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header">
                            <div class="card-title">
                                Recent Buyer
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="rb_card scroll_auto scroll_mr light_scroll">
                                <div class="media mb-4">
											<span class="avatar_pic avatar_pic-md ">
											<img class="align-self-center mr-3 rounded-circle" src="assets/images/img1.jpg" alt="">
											<i></i>
											</span>
                                    <div class="media-body pl-3">
                                        <p class="mb-0">
                                            <strong class="weight-600">John Smith</strong>
                                        </p>
                                        <span class="badge badge-info weight-300">Office </span> <span class="badge badge-danger weight-300">Home</span>
                                    </div>
                                    <div class="float-right text-info">
                                        <span>$498</span>
                                    </div>
                                </div>
                                <div class="media mb-4">
											<span class="avatar_pic avatar_pic-md ">
											<img class="align-self-center mr-3 rounded-circle" src="assets/images/img2.jpg" alt="">
											<i></i>
											</span>
                                    <div class="media-body pl-3">
                                        <p class="mb-0">
                                            <strong class="weight-600">Jully Roy</strong>
                                        </p>
                                        <span class="badge badge-success  weight-300">Police </span> <span class="badge badge-warning  weight-300">BMK</span>
                                    </div>
                                    <div class="float-right text-info">
                                        <span>$15.5</span>
                                    </div>
                                </div>
                                <div class="media mb-4">
											<span class="avatar_pic avatar_pic-md ">
											<img class="align-self-center mr-3 rounded-circle" src="assets/images/img3.jpg" alt="">
											<i></i>
											</span>
                                    <div class="media-body pl-3">
                                        <p class="mb-0">
                                            <strong class="weight-600">Shame Piker</strong>
                                        </p>
                                        <span class="badge badge-primary weight-300">Student </span> <span class="badge badge-danger  weight-300">College</span>
                                    </div>
                                    <div class="float-right text-info">
                                        <span>$362</span>
                                    </div>
                                </div>
                                <div class="media mb-4">
											<span class="avatar_pic avatar_pic-md ">
											<img class="align-self-center mr-3 rounded-circle" src="assets/images/img3.jpg" alt="">
											<i></i>
											</span>
                                    <div class="media-body pl-3">
                                        <p class="mb-0">
                                            <strong class="weight-600">Royeen Joshef</strong>
                                        </p>
                                        <span class="badge badge-primary weight-300">Dr. </span> <span class="badge badge-secondary weight-300">Hospital</span>
                                    </div>
                                    <div class="float-right text-info">
                                        <span>$200</span>
                                    </div>
                                </div>
                                <div class="media mb-4">
											<span class="avatar_pic avatar_pic-md ">
											<img class="align-self-center mr-3 rounded-circle" src="assets/images/img1.jpg" alt="">
											<i></i>
											</span>
                                    <div class="media-body pl-3">
                                        <p class="mb-0">
                                            <strong class="weight-600">John Smith</strong>
                                        </p>
                                        <span class="badge badge-info weight-300">Office </span> <span class="badge badge-danger weight-300">Home</span>
                                    </div>
                                    <div class="float-right text-info">
                                        <span>$498</span>
                                    </div>
                                </div>
                                <div class="media mb-4">
											<span class="avatar_pic avatar_pic-md ">
											<img class="align-self-center mr-3 rounded-circle" src="assets/images/img2.jpg" alt="">
											<i></i>
											</span>
                                    <div class="media-body pl-3">
                                        <p class="mb-0">
                                            <strong class="weight-600">Jully Roy</strong>
                                        </p>
                                        <span class="badge badge-success  weight-300">Police </span> <span class="badge badge-warning  weight-300">BMK</span>
                                    </div>
                                    <div class="float-right text-info">
                                        <span>$15.5</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>

            <div class="row">

                <div class="col-xl-4">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Recent Product
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle image-w" src="assets/images/watch-img.jpg" alt=" ">
                                <div class="media-body">
                                    <p class="mb-0">
                                        <strong class="">Smart Watch</strong>
                                    </p>
                                    <span>Man collection</span>
                                </div>
                                <div class="float-right text-info">
                                    <span>$498</span>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle image-w" src="assets/images/bag-img.jpg" alt=" ">
                                <div class="media-body">
                                    <p class="mb-0">
                                        <strong class="">Leather Bags</strong>
                                    </p>
                                    <span>Women collection</span>
                                </div>
                                <div class="float-right text-info">
                                    <span>$498</span>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle image-w" src="assets/images/stud-img.jpg" alt=" ">
                                <div class="media-body">
                                    <p class="mb-0">
                                        <strong class="">Student Bag</strong>
                                    </p>
                                    <span>Study Bag</span>
                                </div>
                                <div class="float-right text-info">
                                    <span>$498</span>
                                </div>
                            </div>
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle image-w" src="assets/images/headphone.jpg" alt=" ">
                                <div class="media-body">
                                    <p class="mb-0">
                                        <strong class="">Headphone</strong>
                                    </p>
                                    <span>Man collection</span>
                                </div>
                                <div class="float-right text-info">
                                    <span>$498</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="col-xl-4">
                    <div class="full_chart border-0 card mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Resent Chat
                            </div>
                        </div>
                        <div class="card_chart">
                            <div class="chat_box scroll_auto">
                                <div class="left_align_me">
                                    <img src="assets/images/img1.jpg" alt="" class="rounded-circle" />
                                    <div class="chat-info">
                                        <span class="message">Hello, John<br>What is the update on Project?</span>
                                    </div>
                                </div>

                                <div class="right_align_me">
                                    <img src="assets/images/img2.jpg" alt="" class="rounded-circle" />
                                    <div class="chat-info">
                                        <span class="message">Hello, John<br>What is the update on Project?</span>
                                    </div>
                                </div>

                                <div class="left_align_me">
                                    <img src="assets/images/img1.jpg" alt="" class="rounded-circle" />
                                    <div class="chat-info">
                                        <span class="message">Hello, John<br>What is the update on Project?</span>
                                    </div>
                                </div>

                                <div class="right_align_me">
                                    <img src="assets/images/img2.jpg" alt="" class="rounded-circle" />
                                    <div class="chat-info">
                                        <span class="message">Hello, John<br>What is the update on Project?</span>
                                    </div>
                                </div>

                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter text here...">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 mb-4">

                    <div class="homehei list_space card card-shadow">
                        <div class="card-header">
                            <div class="card-title">
                                To Do List
                            </div>
                        </div>
                        <div class="todo--panel">
                            <form action="#">
                                <div class="scroll_auto light_scroll hero-height">
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
                                <div class="input-group">
                                    <input type="text" name="todo" placeholder="Add New Task" class="form-control" autocomplete="off" required="">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn-link">
                                            +
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>



            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Invoice List
                            </div>
                        </div>
                        <div class="card-body table_invoice">
                            <table id="bs4-table" class="table table-bordered table-striped table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>#Invoice</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Issue</th>
                                    <th>View</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="sorting_1">#5010</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Jan</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5011</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5011</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5012</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9658</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5012</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9658</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5013</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4587</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-May</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5013</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4587</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-May</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5014</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$856</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Mar</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="sorting_1">#5015</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$956</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Aug</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5016</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$568</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>19-Jan</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5017</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$542</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>11-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5017</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>11-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5018</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9958</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>12-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5018</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9958</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>12-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5019</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4553</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>9-May</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5019</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4553</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>9-May</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5020</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$436</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-May</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="sorting_1">#5021</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$956</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Nov</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5010</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Jan</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5011</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5011</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5012</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9658</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5012</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9658</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5013</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4587</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-May</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5013</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4587</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>15-May</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5014</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$856</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Mar</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="sorting_1">#5015</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$956</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Aug</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5016</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$568</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>19-Jan</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5017</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$542</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>11-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5017</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$548</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>11-Sep</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5018</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9958</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>12-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5018</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$9958</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>12-Jun</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5019</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4553</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>9-May</td>
                                    <td><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5019</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$4553</td>
                                    <td><span class="label label-success">Paid</span> </td>
                                    <td>9-May</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="sorting_1">#5020</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$436</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-May</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="sorting_1">#5021</td>
                                    <td>Lorem Ipsum</td>
                                    <td>$956</td>
                                    <td><span class="label label-danger">Unpaid</span> </td>
                                    <td>15-Nov</td>
                                    <td>
                                        <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>


                                </tbody>

                                <tfoot>
                                <tr>
                                    <th>#Invoice</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Issue</th>
                                    <th>View</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="social-box facebook">
                        <i class="fa fa-facebook"></i>
                        <ul>
                            <li>
                                <strong>
                                    <span class="count">40</span> k</strong>
                                <span>friends</span>
                            </li>
                            <li>
                                <strong>
                                    <span class="count">450</span>
                                </strong>
                                <span>feeds</span>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="social-box twitter">
                        <i class="fa fa-twitter"></i>
                        <ul>
                            <li>
                                <strong>
                                    <span class="count">30</span> k</strong>
                                <span>friends</span>
                            </li>
                            <li>
                                <strong>
                                    <span class="count">450</span>
                                </strong>
                                <span>tweets</span>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="social-box linkedin">
                        <i class="fa fa-linkedin"></i>
                        <ul>
                            <li>
                                <strong>
                                    <span class="count">40</span> +</strong>
                                <span>contacts</span>
                            </li>
                            <li>
                                <strong>
                                    <span class="count">250</span>
                                </strong>
                                <span>feeds</span>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="social-box google-plus">
                        <i class="fa fa-google-plus"></i>
                        <ul>
                            <li>
                                <strong>
                                    <span class="count">94</span> k</strong>
                                <span>followers</span>
                            </li>
                            <li>
                                <strong>
                                    <span class="count">92</span>
                                </strong>
                                <span>circles</span>
                            </li>
                        </ul>
                    </div>
                    <!--/social-box-->
                </div>
            </div>


        </section>
        <!-- Section_End -->

    </div>
@endsection
