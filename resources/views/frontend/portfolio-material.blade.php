@extends ('frontend.layouts.app')
@section ('title', $portfolio->name)
@section ('seo_description', $portfolio->seo_description)
@section ('seo_keywords', $portfolio->seo_keywords)
@push('after-styles')
    <style>
        #portfolio-material .main-top-container .page-head {
            fill: {{ $portfolio->blot_color }};
        }

        #portfolio-material .main-top-container .page-head .bread-crumbs span.active {
            color: #000;
        }

        #portfolio-material .main-top-container .page-head .bread-crumbs span.active svg path {
            fill: {{ $portfolio->main_color }};
        }

        #portfolio-material .gl-yellow-btn {
            color: #000;
        }

        #portfolio-material .gl-yellow-btn path {
            fill: {{ $portfolio->blot_color }};
        }

        #portfolio-material .gl-yellow-btn:hover {
            color: #fff;
        }

        #portfolio-material .gl-yellow-btn:hover path {
            fill: #000;
        }
    </style>
@endpush

@section('content')
    @include('frontend.template.header-transparent')

    <!-- start of portfolio-material -->
    <section id="portfolio-material">
        <div class="main-top-container bg-cont">
            <div class="container">
                <div class="page-head">
                    <div class="bread-crumbs">
                        <a href="{{ route('frontend.index') }}">главная</a>
                        <a href="{{ route('frontend.portfolio') }}">наши работы</a>
                        <span class="active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.94 58.36"><defs><style>.cls-1 {
                                            fill: {{ $portfolio->main_color }};
                                        }</style></defs><title>breadcrumps-material</title>
                                {!! $portfolio->svg !!}</svg>
                            <span>{{ $portfolio->company_name }}</span>
                    </span>
                    </div>
                </div>

                <div class="material-header-cont">
                    <div class="img-cont material-logo-cont">
                        <img src="/storage/app/{{ $portfolio->header_image }}"
                             alt="logistic-line-logo-white">

                    </div>
                    <h1 class="material-header">{{ $portfolio->description }} <span
                                style="color: {{ $portfolio->main_color }}">“{{ $portfolio->company_name }}”</span></h1>
                </div>

            </div>
        </div>

        @foreach($portfolioBlocks as $block)
            @switch($block->type)
                @case('image')
                    {!! $block->content !!}
                @break

                @case('two_image')
                    {!! $block->content !!}
                </div>
                @break

                @case('pdf')
                <div class="fomdih-book-container">
                    <div data-configid="{!! $block->content !!}" style="" class="issuuembed"></div>
                    <script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
                </div>
                @break

                @default
                <div class="portfolio-material-cont"
                     style="background-color: {{ $block->bg_color }}; color: {{ $block->color }}; text-align: {{ $block->text_align }}">
                    {!! $block->content !!}

                </div>
                @break
            @endswitch
        @endforeach

        <!-- portfolio-cta-cont: WILL BE SIMILAR on all portfolio-material-pages -->
        <div class="portfolio-material-cont portfolio-cta-cont"
             style="background-color: #313131; color: #fff; text-align: center">
            <div class="middle-container">
                <p>
                    <span>Спасибо за внимание!</span>
                </p>

                <a href="/" class="gl-yellow-btn order-form-btn">
                    @include('frontend.template-svg.button-brief')
                    <span>хочу так же</span>
                </a>

            </div>
        </div>

    </section>
    <!-- end of portfolio-material -->
@endsection

@push('after-scripts')
    <script src="/js/portfolio-material.js"></script>
@endpush