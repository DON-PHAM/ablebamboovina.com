
<nav class="main-header navbar navbar-expand navbar-dark navbar-lightblue">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

            <select name="language" id="language" class="form-control">
                <option value="vi">Tiếng Việt</option>
                <option value="ko">Korean</option>
            </select>

    </ul>
    <form action="" method="get" class="form-inline ml-3 d-none d-sm-block">
        <div class="input-group input-group-sm">
            <input name="keyword" class="form-control form-control-navbar" type="search" placeholder="Tìm đơn hàng" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <a class="nav-link" href="{{route('admin')}}" target="_new">
            <i class="fas fa-home"></i>
        </a>
        @auth()
        <li class="nav-item dropdown user-menu">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                <img src="{{url('/upload/avatar/'.Auth::user()->avatar)}}" class="user-image" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="text-center">
                    <img src="{{url('/upload/avatar/'.Auth::user()->avatar)}}" class="img-circle" alt="{{Auth::user()->name}}" width="50px" height="50px">
                    <div>
                        {{Auth::user()->name}}<br>
                        <small>{{ Auth::user()->created_at->format('Y-m-d H:i:s') }}</small>
                    </div>
                </div>
                <div class="user-footer">
                    <div class="float-left">
                        <a href="{{route('get-profile')}}"
                           class="btn btn-default btn-flat">{{trans('home.profile')}}</a>
                    </div>
                    <div class="float-right">
                        <a href="{{route('logout')}}" class="btn btn-default btn-flat">{{trans('home.logout')}}</a>
                    </div>
                </div>
            </div>
        </li>
        @endauth
    </ul>
</nav>
