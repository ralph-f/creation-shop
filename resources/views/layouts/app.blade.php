<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel').' '.$title }} </title>

    <link rel="icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('/public/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/vendor/font-awesome/css/font-awesome.min.css') }}">

    @yield( 'stylesheets' )

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('/public/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/color_skins.css') }}">
</head>
<body class="theme-cyan">


    @yield( 'content' )

    <!-- Scripts -->
    @yield( 'scripts' )
</body>
</html>
