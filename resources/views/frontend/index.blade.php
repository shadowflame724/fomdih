@extends ('frontend.layouts.app')
@section ('title', $page->name)
@section ('seo_description', $page->seo_description)
@section ('seo_keywords', $page->seo_keywords)

@section('content')
    @include('frontend.template.header-transparent')
    <section id="index-page">
        <div class="main-top-container bg-cont">
            <!--<div class="dark-mask"></div>-->
            <div class="container">
                <div class="full-cont">
                    <div class="left-cont">
                        <h1 class="main-header wow fadeInLeft" data-wow-delay="0s">Мы <span
                                    class="yellow-color">креативное</span> агентство</h1>
                        <div class="img-cont">
                            <img class="creative-agency-underlining" src="/images/index/svg/creative-agency-underlining.svg"
                                 alt="creative-agency-underlining">
                        </div>

                        <div class="right-cont desktop-hidden">
                            <div class="lamp-cont">
                                <img src="/images/index/svg/fomdih-lamp.svg">
                            </div>
                            <div class="lamp-text">
                                <p class="size-80 wow fadeInRight" data-wow-delay="0.2s">Без</p>
                                <p class="wow fadeInRight" data-wow-delay="0.2s"><span class="yellow-color">пафоса</span>,</p>
                                <p class="yellow-color wow fadeInRight" data-wow-delay="0.3s">лжи</p>
                                <p class="wow fadeInRight" data-wow-delay="0.4s"><span class="light-font">и </span><span class="yellow-color">халтуры</span></p>
                            </div>
                        </div>

                        <div class="illustrations-cont">
                            <div class="img-cont">
                                <img src="/images/index/svg/illustration-banner-1.svg" alt="illustration-banner">
                            </div>
                            <div class="img-cont">
                                <img src="/images/index/svg/illustration-banner-2.svg" alt="illustration-banner">
                            </div>
                            <div class="img-cont">
                                <img src="/images/index/svg/illustration-banner-3.svg" alt="illustration-banner">
                            </div>
                        </div>
                    </div>
                    <div class="right-cont desktop-visible">
                        <div class="lamp-cont">
                            <img src="/images/index/svg/fomdih-lamp.svg">
                        </div>
                        <div class="lamp-text">
                            <p class="size-80 wow fadeInRight" data-wow-delay="0.2s">Без</p>
                            <p class="wow fadeInRight" data-wow-delay="0.2s"><span class="yellow-color">пафоса</span>,</p>
                            <p class="yellow-color wow fadeInRight" data-wow-delay="0.3s">лжи</p>
                            <p class="wow fadeInRight" data-wow-delay="0.4s"><span class="light-font">и </span><span class="yellow-color">халтуры</span></p>
                        </div>
                    </div>
                </div>
                <p class="main-text">
                    Давно тебя мучает эта мысль, <span class="yellow-color">что чего-то не хватает?</span><br>
                    У <span class="yellow-color">Иисуса</span> тоже были последователи, чем ты хуже? Мы знаем <span>как он закончил.</span>
                    Он не был знаком с <span class="yellow-color">нами</span>;)
                </p>
            </div>
        </div>

        <!-- start of our-services -->
        <div class="our-services">
            <img class="services-block-border" src="/images/index/svg/services-block-border.svg"
                 alt="services-block-border">

            <div class="container">
                <h2 class="section-header">Собственно, чем мы занимаемся</h2>
                <div class="img-cont">
                    <img class="services-underlining" src="/images/general/svg/services-underlining.svg"
                         alt="services-underlining">
                </div>
            </div>

            <div class="services-items-cont">
                <div class="service-item-cont">
                    <div class="service-item">
                        <!--<div class="service-img-cont" style="background-image: url('images/index/svg/service-image-1.svg')">-->
                        <!--</div>-->
                        <div class="service-img-cont">
                            <img src="/images/index/svg/service-image-1.svg" alt="service-image">
                        </div>
                        <div class="service-info">
                            <h3 class="service-header">Брендинг</h3>
                            <h4 class="service-cta">Причешем ваш бизнес</h4>
                        </div>
                        <ul class="service-list">
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-1')
                                <span>Фирменный стиль</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-2')
                                <span>логотип</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>Брендбук</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-4')
                                <span>Дизайн упаковки</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-5')
                                <span>Ребрендинг</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-2')
                                <span>UI / UX</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>IA, IxD</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service-item-cont">
                    <div class="service-item">
                        <!--<div class="service-img-cont" style="background-image: url('images/index/svg/service-image-2.svg')">-->
                        <!--</div>-->
                        <div class="service-img-cont">
                            <img src="/images/index/svg/service-image-2.svg" alt="service-image">
                        </div>
                        <div class="service-info">
                            <h3 class="service-header">Продакшн</h3>
                            <h4 class="service-cta">Создадим вкусную картинку</h4>
                        </div>
                        <ul class="service-list">
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-1')
                                <span>Рекламный ролик</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-4')
                                <span>Дизайн рекламы</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-5')
                                <span>инфографика</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>Сториборд</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-6')
                                <span>Съемка/монтаж видео</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-2')
                                <span>Илюстрации</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>Предметка</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service-item-cont">
                    <div class="service-item">
                        <!--<div class="service-img-cont" style="background-image: url('images/index/svg/service-image-3.svg')">-->
                        <!--</div>-->
                        <div class="service-img-cont">
                            <img src="/images/index/svg/service-image-3.svg" alt="service-image">
                        </div>
                        <div class="service-info">
                            <h3 class="service-header">Стратегия</h3>
                            <h4 class="service-cta">Удивим Цукерберга</h4>
                        </div>
                        <ul class="service-list">
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-7')
                                <span>Маркетинговые исследования</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-2')
                                <span>SMM</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>Сайт</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-4')
                                <span>E-mail marketing</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-1')
                                <span>Построение воронок</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-2')
                                <span>YouTube</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>SEO и PPC</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service-item-cont">
                    <div class="service-item">
                        <!--<div class="service-img-cont" style="background-image: url('images/index/svg/service-image-4.svg')">-->
                        <!--</div>-->
                        <div class="service-img-cont">
                            <img src="/images/index/svg/service-image-4.svg" alt="service-image">
                        </div>
                        <div class="service-info">
                            <h3 class="service-header">Креатив</h3>
                            <h4 class="service-cta">Выкинем все клише</h4>
                        </div>
                        <ul class="service-list">
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-1')
                                <span>Создание персонажа</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-2')
                                <span>Сценарий</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>Нейминг</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-4')
                                <span>Механики и акции</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-5')
                                <span>Сторителлинг</span>
                            </li>
                            <li class="yellow-item">
                                @include('frontend.template-svg.service-blot-2')
                                <span>УТП</span>
                            </li>
                            <li class="black-item">
                                @include('frontend.template-svg.service-blot-3')
                                <span>Слоган</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="img-cont">
                <img class="block-line" src="/images/index/svg/block-line.svg" alt="block-line">
            </div>

        </div>
        <!-- end of our-services -->

        <!-- start of our-works -->
        @widget('portfolioWidget')
        <!-- end of our-works -->

    </section>
@endsection

@push('after-scripts')
    <!-- start of scripts only for this page -->

    <script src="/js/libs/wow.min.js"></script>
    <script>
        var wow = new WOW(
            {
                boxClass: 'wow',      // default
                animateClass: 'animated', // default
                offset: 0,          // default
                mobile: false,       //
                live: true        // default
            }
        );
        wow.init();
    </script>

    <script src="/js/index.js"></script>
    <script src="/js/portfolio.js"></script>

    <!-- end of scripts only for this page -->
@endpush
