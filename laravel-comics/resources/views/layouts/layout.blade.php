<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @yield('header-scripts')
</head>
<body>
    @include('includes.header')

    @yield('main-content')

    @include('includes.products')

    @include('includes.footer')

    @yield('final-scripts')
    
</body>
</html>