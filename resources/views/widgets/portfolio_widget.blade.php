<div id="our-works" class="our-works">
    <div class="container">
        <div class="our-works-cont">
            <div class="left-cont">
                <nav class="portfolio-menu">
                    <ul>
                        {{--<li class="category-0 active" data-toggle="category-0">--}}
                            {{--<span>все работы</span>--}}
                        {{--</li>--}}
                        {{--@foreach($categories as $key => $category)--}}
                            {{--@php($key++)--}}
                            {{--<li class="category-{{ $key }}" data-toggle="category-{{ $key }}">--}}
                                {{--<span>{!! $category->name !!}</span>--}}
                            {{--</li>--}}
                        {{--@endforeach--}}
                        <li class="category-0 active" data-toggle="category-0">
                            <span>все работы</span>
                        </li>
                        <li class="category-1" data-toggle="category-1">
                            <span>Бренд-дизайн</span>
                        </li>
                        <li class="category-2" data-toggle="category-2">
                            <span>Видео</span>
                        </li>
                        <li class="category-3" data-toggle="category-3">
                            <span>Сайты</span>
                        </li>
                        <li class="category-4" data-toggle="category-4">
                            <span>Digital-маркетинг</span>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="right-cont">
                <!-- start of portfolio-items-cont -->
                <div class="portfolio-items-cont">
                    <!-- https://masonry.desandro.com/options.html
                    Sizing options columnWidth and gutter can be set with an element.
                    The size of the element is then used as the value of the option. -->
                    <div class="grid-sizer"></div>

                    @foreach($portfolios as $portfolio)

                        <div class="portfolio-item small-item category-{{ $portfolio->category_id }}">
                            <a href="{{ route('frontend.portfolio.show', ['slug' => $portfolio->slug]) }}"
                               style="color: {{ $portfolio->main_color }}">
                                <div class="img-cont">
                                    <img src="/storage/app/{{ $portfolio->thumb_image }}" alt="portfolio-image">
                                </div>
                                @include('frontend.template-svg.portfolio-'. $portfolio->type .'-hover')
                                <div class="portfolio-info" style="color: {{ $portfolio->main_color }}">
                                    @include('frontend.template-svg.portfolio-'. $portfolio->type .'-blot')
                                    <p class="portfolio-name" style="color: {{ $portfolio->blot_color }}">
                                        {{ $portfolio->name }} <span>“{{ $portfolio->company_name }}”</span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    {{--<div class="portfolio-item big-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #ff2b67">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-2.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #ff2b67">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #9083c0">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-3.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #9083c0">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-4">--}}
                    {{--<a href="portfolio-material.html" style="color: #f85f01">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-4.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #f85f01">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #fa462f">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-5.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #fa462f">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #bc2b54">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-6.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #bc2b54">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #252525">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-7.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #252525">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-4">--}}
                    {{--<a href="portfolio-material.html" style="color: #a4d6ca">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-8.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #a4d6ca">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #000">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #000000">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-9.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #000000">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<!-- ************************************************************ -->--}}
                    {{--<!-- HIDDEN BLOCKS -->--}}
                    {{--<div class="portfolio-item small-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #fa462f">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-5.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #fa462f">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #bc2b54">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-6.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #bc2b54">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #252525">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-7.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #252525">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-4">--}}
                    {{--<a href="portfolio-material.html" style="color: #a4d6ca">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-8.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #a4d6ca">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #000">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #000000">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-9.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #000000">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #00e8b6">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-1.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #00e8b6">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #3c3c3c">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #ff2b67">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-2.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #ff2b67">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #9083c0">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-3.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #9083c0">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-4">--}}
                    {{--<a href="portfolio-material.html" style="color: #f85f01">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-4.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #f85f01">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<!-- ************************** -->--}}

                    {{--<div class="portfolio-item small-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #00e8b6">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-1.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #00e8b6">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #3c3c3c">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #ff2b67">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-2.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #ff2b67">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #9083c0">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-3.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #9083c0">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-4">--}}
                    {{--<a href="portfolio-material.html" style="color: #f85f01">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-4.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #f85f01">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #fa462f">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-5.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #fa462f">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #bc2b54">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-6.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #bc2b54">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #252525">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-7.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #252525">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-4">--}}
                    {{--<a href="portfolio-material.html" style="color: #a4d6ca">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-8.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #a4d6ca">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #000">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #000000">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-9.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #000000">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #fa462f">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-5.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #fa462f">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #bc2b54">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-6.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #bc2b54">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #252525">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-7.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #252525">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-4">--}}
                    {{--<a href="portfolio-material.html" style="color: #a4d6ca">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-8.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #a4d6ca">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #000">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #000000">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-9.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #000000">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--Дизайн этикетки для <span>“PETIT”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-1">--}}
                    {{--<a href="portfolio-material.html" style="color: #00e8b6">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-1.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #00e8b6">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #3c3c3c">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-2">--}}
                    {{--<a href="portfolio-material.html" style="color: #ff2b67">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-2.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-big-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #ff2b67">--}}
                    {{--//= template-svg/portfolio-big-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item small-item category-3">--}}
                    {{--<a href="portfolio-material.html" style="color: #9083c0">--}}
                    {{--<div class="img-cont">--}}
                    {{--<img src="/images/portfolio/portfolio-image-3.png" alt="portfolio-image">--}}
                    {{--</div>--}}
                    {{--//= template-svg/portfolio-small-hover.html--}}
                    {{--<div class="portfolio-info" style="color: #9083c0">--}}
                    {{--//= template-svg/portfolio-small-blot.html--}}
                    {{--<p class="portfolio-name" style="color: #fff">--}}
                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="portfolio-item big-item category-4">--}}
                        {{--<a href="portfolio-material.html" style="color: #f85f01">--}}
                            {{--<div class="img-cont">--}}
                                {{--<img src="/images/portfolio/portfolio-image-4.png" alt="portfolio-image">--}}
                            {{--</div>--}}
                            {{--//= template-svg/portfolio-big-hover.html--}}
                            {{--<div class="portfolio-info" style="color: #f85f01">--}}
                                {{--//= template-svg/portfolio-big-blot.html--}}
                                {{--<p class="portfolio-name" style="color: #fff">--}}
                                    {{--фирменный стиль для <span>“logistic line”</span>--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}

                </div>
                <!-- end of portfolio-items-cont -->

                <a href="{{ route('frontend.portfolio') }}" class="gl-yellow-btn more-portfolio-btn">
                    @include('frontend.template-svg.button-more-works')
                    <span>увидеть больше работ</span>
                </a>
            </div>
        </div>
    </div>

</div>