<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('admin')}}" class="waves-effect waves-light">
                        <i class="mdi mdi-home-map-marker"></i>
                        <span>  {{trans('home.home')}}  </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user')}}" class="waves-effect waves-light">
                        <i class=" mdi mdi-account-details"></i>
                        <span>  {{trans('home.user')}}  </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('category-list')}}" class="waves-effect waves-light">
                        <i class="mdi mdi-layers"></i>
                        <span>  {{trans('home.category-product')}} </span>
                    </a>

                </li>
                <li>

                    <a href="{{route('category-new-list')}}" class="waves-effect waves-light">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>  {{trans('home.categoryPost')}}  </span>
                    </a>

                </li>

                <li>

                    <a href="{{route('product-list')}}" class="waves-effect waves-light">
                        <i class="mdi mdi-sprout-outline"></i>
                        <span>  {{trans('home.product')}}  </span>
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect waves-light">
                        <i class="mdi mdi-comment-text-outline"></i>
                        <span>  {{trans('home.post')}}  </span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html" class="waves-effect waves-light">
                        <i class="mdi mdi-projector-screen"></i>
                        <span> {{trans('home.slider')}} </span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect waves-light">
                        <i class="mdi mdi-settings"></i>
                        <span>  {{trans('home.setting')}} </span>
                    </a>

                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect waves-light">
                        <i class="mdi mdi-settings"></i>
                        <span>  {{trans('home.feedback')}} </span>
                    </a>

                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
