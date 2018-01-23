@extends ('frontend.layouts.app')
@section ('title', $page->name)
@section ('seo_description', $page->seo_description)
@section ('seo_keywords', $page->seo_keywords)

@section('content')
    @include('frontend.template.header-white')
    <!-- start of page-404 -->
    <section id="page-404">
        <div class="main-top-container">
            <div class="container">
                <div class="page-head">
                    <h1 class="page-title"><span>404 ошибка</span></h1>
                </div>

                <div class="full-cont">
                    <div class="left-cont">
                        <div class="text-cont-404">
                            <p class="first-text">Все сломал.</p>

                            <p class="second-text">
                                Выпей кофе и введи уже <span>правильный URL-адрес наконец,</span>
                                или просто заходи на нашу главную страницу -
                                <a href="{{ route('frontend.index') }}">FomDih.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="right-cont">
                        <div class="img-cont cat-img-cont">
                            <img src="/images/general/svg/cat-404.svg" alt="cat-img">
                        </div>
                    </div>
                </div>

                <a href="{{ route('frontend.portfolio') }}" class="gl-yellow-btn more-portfolio-btn">
                    //= template-svg/button-more-works.html
                    <span>наши работы</span>
                </a>
            </div>
        </div>
    </section>
    <!-- end of page-404 -->
@endsection