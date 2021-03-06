<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

  