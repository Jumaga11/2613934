<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('CSS/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/master.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/owl.theme.default.min.css') }}">
</head>

<body>
    <main class="@yield('class')">
        @yield('content')
    </main>
    <script src="{{ asset ('JS/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset ('JS/owl-carousel.min.js') }}"></script>
    <script src="{{ asset ('JS/sweetalert2.js')      }}"></script>
    @yield('js')
</body>

</html>
