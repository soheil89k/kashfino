@php
    $is_auth = Auth::check();
@endphp
<div class="header">
    <div class="right-box">
        <div class="banner-box">
            <a href="{{route("web.home")}}">
                <img src="{{url("img/banner/logo/logo.png")}}"/>
            </a>

        </div>
        <ul class="menu-box">
            <li>
                <a href="{{route("web.home")}}">
                    @lang("VIEW.MENU.HOME_PAGE")
                </a>
            </li>
            <li>
                <a href="BusinessRegister.php">
                    @lang("VIEW.MENU.WHAT_IS_BRAND")
                </a>
            </li>
            <li>
                <a href="BusinessRegister.php">
                    @lang("VIEW.MENU.BLOG")

                </a>
            </li>
            <li class="frame">
                <a href="BusinessRegister.php">
                    @lang("VIEW.MENU.GET_APP")
                </a>
            </li>
        </ul>

    </div>
    <div class="left-box">
        <ul class="tool-box">
            @if(!$is_auth)
                <li>
                    <a href="{{route("web.login")}}">
                        @lang("VIEW.GENERAL.LOGIN")
                    </a>
                </li>
                <li>
                    <a href="{{route("web.register")}}">
                        @lang("VIEW.GENERAL.REGISTER_BRAND")
                    </a>
                </li>
            @else
                <li>
                    <a href="{{route("web.logout")}}">
                        <i class="far fa-user"></i>
                        @lang("VIEW.GENERAL.PROFILE")
                    </a>

                </li>
            @endif
        </ul>

    </div>
</div>