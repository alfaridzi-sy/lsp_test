<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('page_title')</title>

    @include('customer.layouts.styles')
</head>

<body>
    @yield('page_type')
        <!-- header section strats -->
        @include('customer.layouts.navbar')
        <!-- end header section -->
        @yield('slider')
        <!-- slider section -->

        <!-- end slider section -->
    </div>

    @yield('content')

    <!-- footer section -->
    @include('customer.layouts.footer')
    <!-- footer section -->

    @include('customer.layouts.scripts')
</body>

</html>
