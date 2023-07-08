<aside class="main-sidebar sidebar-light-pink elevation-4 sidebar-no-expand">
    <a href="{{route('admin')}}" class="brand-link navbar-secondary" >
    Bambo <span class="brand-text font-weight-light">Admin</span>
    </a>
    <div class="sidebar sidebar-lightblue">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu">
                <form action="#" method="get" class="form-inline m-1 d-block d-sm-none">
                    <div class="input-group input-group-sm">
                        <input name="keyword" class="form-control form-control-navbar" type="search" placeholder="Tìm đơn hàng" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin')}}" class="nav-link">
                        <i class="nav-icon  fas fa-home "></i>
                        <p>
                            {{trans('home.general')}}
                        </p>
                    </a>

                </li>

                <li class="nav-link header">
                    <i class="nav-icon  fas fa-cogs "></i>
                    <p class="sub-header"> Cấu hình hệ thống</p>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fas fa-users-cog "></i>
                        <p>
                            {{trans('home.user-manager')}}
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li>
                            <a href="{{route('user-create')}}" class="nav-link">
                                <i class="fas fa-user-circle nav-icon"></i>
                                <p>Đăng ký</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('user')}}" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>{{trans('home.user')}}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('get-setting-create')}}" class="nav-link">
                        <i class="nav-icon  fab fa-whmcs "></i>
                        <p>
                            {{trans('home.setting')}}
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('branch-list')}}" class="nav-link">
                        <i class="fas fa-user-secret nav-icon"></i>
                        <p>{{trans('home.branch')}}</p>
                    </a>
                </li>
                <li class="nav-link header">
                    <i class="nav-icon  fab fa-shopify "></i>

                    <p class="sub-header">{{trans('home.online-buy')}}</p>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fas fa-cart-arrow-down "></i>
                        <p>
                            {{trans('home.order-manager')}}
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <i class="fas fa-shopping-cart nav-icon"></i>
                                <p>{{trans('home.order')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fas fa-folder-open "></i>
                        <p>
                            {{trans('home.product-category-manager')}}
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{route('product-list')}}" class="nav-link">
                                <i class="far fa-file-image nav-icon"></i>
                                <p>{{trans('home.product')}}</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('category-list')}}" class="nav-link">
                                <i class="fas fa-folder-open nav-icon"></i>
                                <p>{{trans('home.category-product')}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-link header">
                    <i class="nav-icon  fas fa-file-signature "></i>
                    <p class="sub-header"> {{trans('home.post')}}</p>
                </li>
                <li class="nav-item ">
                    <a href="{{route('feedback-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            {{trans('home.feedback')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('about')}}" class="nav-link">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            {{trans('home.about')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('slider-list')}}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>
                            {{trans('home.slider')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{route('new-list')}}" class="nav-link">
                        <i class="nav-icon far fa-file-powerpoint"></i>
                        <p>
                           {{trans('home.post')}}
                        </p>
                    </a>
                </li>
                <li class="nav-link header">
                    <i class="nav-icon  fas fa-sort-amount-up "></i>
                    <p class="sub-header"> Marketing</p>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fas fa-chart-pie "></i>
                        <p>
                            Quản lý báo cáo
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Báo cáo sản phẩm</p>
                            </a>
                        </li>
                    </ul>


                </li>
                <li class="nav-item ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-file-code"></i>
                        <p>
                            Sự kiện
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>
                            Video
                        </p>
                    </a>
                </li>


                <li class="nav-link header">
                    <i class="nav-icon  fas fa-th "></i>
                    <p class="sub-header"> Phần mở rộng</p>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fas fa-puzzle-piece "></i>
                        <p>
                            Tiện ích
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <i class="far fa-money-bill-alt nav-icon"></i>
                                <p>Thanh toán <span class="right badge badge-warning">2</span></p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <i class="fas fa-ambulance nav-icon"></i>
                                <p>Vận chuyển <span class="right badge badge-warning">1</span></p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <i class="fas fa-atom nav-icon"></i>
                                <p>Giá trị đơn hàng <span class="right badge badge-warning">1</span></p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <i class="fas fa-box nav-icon"></i>
                                <p>Phí đơn hàng <span class="right badge badge-warning">0</span></p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li id="summary">
                    <ul>
                        <li class="footer-static">
                            <div>Orders New <span class="float-right">100%</span></div>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">100%</span></div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
