<!DOCTYPE html>
<html lang="en">
<head>
    @stack('before-styles')

    @include('frontend.template.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('seo_description', 'Laravel 5 Boilerplate')">
    <meta name="keywords" content="@yield('seo_keywords', 'Anthony Rappa')">
    @yield('meta')
    @stack('after-styles')
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

@yield('content')

@include('frontend.template.footer')
{{--@include('frontend.template.fomdih-forms')--}}
@widget('fomdihForms')
<!-- Scripts -->
@stack('before-scripts')
@include('frontend.template.script')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('after-scripts')

{{-- Global site tag (gtag.js) - Google Analytics --}}
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113127040-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113127040-1');
</script>

</body>
</html>
