<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.template.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('seo_description', 'Laravel 5 Boilerplate')">
    <meta name="keywords" content="@yield('seo_keywords', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')

    @stack('after-styles')
</head>
<body>

@yield('content')

@include('frontend.template.footer')
@include('frontend.template.fomdih-forms')
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

</body>
</html>
