<div class="side_bar scroll_auto">
    <div class="user-panel">
        <div class="user_image">
            <img src="{{asset('backend/assets/images/about-1.jpg')}}" class="img-circle mCS_img_loaded" alt="User Image">
        </div>
        <div class="info">
            <p>
                Ablebamboovina
            </p>
            <a href="javascript:void()"> <i class="fa fa-circle text-success"></i> {!! trans('home.online') !!}</a>
        </div>
    </div>

    <ul id="dc_accordion" class="sidebar-menu tree">

        <li class="menu_sub" title="{!! trans('home.user') !!}">
            <a href="{{route('user')}}"> <i class="fa fa-user"></i> <span>{!! trans('home.user') !!} </span> </a>

        </li>

        <li class="menu_sub">
            <a href="{{ route('category-list') }}"> <i class="fa fa-indent"></i> <span>{!! trans('home.categoryProduct') !!} </span> </a>

        </li>

        <li class="menu_sub">
            <a href="{{route('category-new-list')}}"> <i class="fa fa-inbox"></i> <span>{!! trans('home.categoryPost') !!} </span> </a>

        </li>
        <li class="menu_sub">
            <a href="{{route('category-list')}}"> <i class="fa fa-product-hunt"></i> <span>{!! trans('home.product') !!} </span> </a>

        </li>

        <li class="menu_sub">
            <a href="{{route('new-list')}}"> <i class="fa fa-edit"></i> <span>{!! trans('home.post') !!} </span> </a>

        </li>
        <li class="menu_sub">
            <a href="{{route('setting-list')}}"> <i class="fa fa-gear"></i> <span>{!! trans('home.setting') !!} </span> </a>

        </li>
        <li class="menu_sub">
            <a href="#"> <i class="fa fa-shopping-cart"></i> <span>{!! trans('home.order') !!} </span> </a>

        </li>
        <li class="menu_sub">
            <a href="{{route('slider-list')}}"> <i class="fa fa-sliders"></i> <span>{!! trans('home.slider') !!} </span> </a>

        </li>

    </ul>
</div>
