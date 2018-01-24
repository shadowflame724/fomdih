@extends ('frontend.layouts.app')
@section ('title', $page->seo_title)
@section ('seo_description', $page->seo_description)
@section ('seo_keywords', $page->seo_keywords)

@section('content')
    @include('frontend.template.header-white')
<!-- start of portfolio-page -->
<section id="portfolio-page">
    <div class="main-top-container">
        <div class="container">
            <div class="page-head">
                <div class="bread-crumbs">
                    <a href="{{ route('frontend.index') }}">главная</a>
                    <span class="active">
                        @include('frontend.template-svg.breadcrumps-portfolio')
                        <span>наши работы</span>
                    </span>
                </div>
                <h1 class="page-title">наши <span class="yellow-color">работы</span></h1>
            </div>

        </div>
    </div>

    <!-- start of our-works -->
    @widget('portfolioWidget')
    <!-- end of our-works -->


</section>
<!-- end of portfolio-page -->
@endsection

@push('after-scripts')
<script>
    // $(function () {
    //     $(".more-portfolio-btn").click(function (event) {
    //         event.preventDefault();
    //         $(this.querySelector("span")).toggleText("больше работ", "меньше работ");
    //         $(".more-portfolio-cont").slideToggle();
    //     });
    // });
</script>
@push('after-scripts')
    <!-- start of scripts only for this page -->


    <script src="/js/portfolio.js"></script>

    <!-- end of scripts only for this page -->
@endpush

@endpush