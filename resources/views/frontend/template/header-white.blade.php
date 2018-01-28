<!-- start of header -->
<header class="header-white">
    <div class="container">
        <div class="img-cont logo-cont">
            <a href="{{ route('frontend.index') }}" target="_self">
                <img class="logo-black" src="/images/general/svg/fomdih-logo-black.svg" alt="fomdih-logo">
                <img class="logo-white" src="/images/general/svg/fomdih-logo.svg" alt="fomdih-logo">
            </a>
        </div>

        <div class="menu-btn-cont">
            <div class="menu-btn">
                @include('frontend.template-svg.menu-hamburger-white')
                @include('frontend.template-svg.menu-close-icon-white')
            </div>
        </div>

        <nav class="main-menu">
            <ul>
                <li class="header-contacts">
                    <span class="tel">
                        <a href="tel:+38(098)8171519"><span class="yellow-color">+38</span> (098) 817 15 19</a>
                    </span>
                </li>
                <li class="nav-btn">
                    <a href="/" class="gl-yellow-btn order-form-btn">
                        @include('frontend.template-svg.button-order')

                        <span>сделать заказ</span>
                    </a>
                </li>
                <li class="menu-item menu-home active"><a href="{{ route('frontend.index') }}">главная</a></li>
                <li class="menu-item menu-about-us"><a href="{{ route('frontend.company') }}">кто мы</a></li>
                <li class="menu-item menu-our-works"><a href="{{ route('frontend.portfolio') }}">наши работы</a></li>
                <li class="menu-item menu-contacts"><a href="{{ route('frontend.contacts') }}">контакты</a></li>
            </ul>
        </nav>
    </div>

</header>
<!-- end of header -->

<!--PRELOADER!!! -->
<div id="preloader"></div>