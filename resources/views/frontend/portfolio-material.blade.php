@extends ('frontend.layouts.app')
@section ('title', $portfolio->seo_title)
@section ('seo_description', $portfolio->seo_description)
@section ('seo_keywords', $portfolio->seo_keywords)
@push('after-styles')
    <style>
        #portfolio-material .main-top-container .page-head {
            color: {{ $portfolio->page_head_bread_color }};
        }

        #portfolio-material .main-top-container .page-head .bread-crumbs span.active {
            color: {{ $portfolio->page_head_bread_active_color }};
        }

        #portfolio-material .main-top-container .page-head .bread-crumbs span.active svg path {
            fill: {{ $portfolio->main_color }};
        }

        #portfolio-material .gl-yellow-btn {
            color: {{ $portfolio->thx_but_color }};
        }

        #portfolio-material .gl-yellow-btn path {
            fill: {{ $portfolio->thx_text_color }};
        }

        #portfolio-material .gl-yellow-btn:hover {
            color: {{ $portfolio->thx_but_color_hv }};
        }

        #portfolio-material .gl-yellow-btn:hover path {
            fill: {{ $portfolio->thx_text_color_hv }};
        }
    </style>
@endpush

@section('content')
    @if($portfolio->header_type == 'black')
        @include('frontend.template.header-white')
    @else
        @include('frontend.template.header-transparent')
    @endif

    <!-- start of portfolio-material -->
    <section id="portfolio-material">
        <div class="main-top-container bg-cont"
             style="background-image: url('../storage/portfolio/{{ $portfolio->main_image }}')">
            <div class="container">
                <div class="page-head">
                    <div class="bread-crumbs">
                        <a href="{{ route('frontend.index') }}">главная</a>
                        <a href="{{ route('frontend.portfolio') }}">наши работы</a>
                        <span class="active">
                                {!! $portfolio->svg !!}
                            <span>{{ $portfolio->company_name }}</span>
                    </span>
                    </div>
                </div>

                <div class="material-header-cont">
                    <div class="img-cont material-logo-cont">
                        <img src="/storage/portfolio/{{ $portfolio->header_image }}"
                             alt="logistic-line-logo-white">

                    </div>
                    <h1 class="material-header" style="color: {{ $portfolio->page_head_color }};">{{ $portfolio->description }} <span
                                style="color: {{ $portfolio->main_color }}">{{ $portfolio->company_name }}</span></h1>
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

        @case('video-16-9')
        <div class="video-cont ratio-16-to-9">
            {!! $block->content !!}

        </div>
        @break

        @case('video-4-3')
        <div class="video-cont ratio-4-to-3">
            {!! $block->content !!}
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
             style="background-color: {{ $thxBlock['bg_color'] }}; color: {{ $portfolio->thx_attention_color }}; text-align: center">
            <div class="middle-container">
                <p>
                    <span style="color: {{ $portfolio->thx_attention_color }}">Спасибо за внимание!</span>
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