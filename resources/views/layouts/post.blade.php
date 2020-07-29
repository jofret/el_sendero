<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
     @include('includes.links')
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    @include('includes.header')
    
    @yield('content')

    @include('includes.footer')

    <!-- JS here -->
    @include('includes.js')        
</body>
</html>