<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
{{--    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="{{ asset( 'css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tooplate-main.css') }}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('css/flex-slider.css')}}">


</head>

<body>

<!-- Pre Header -->
<div id="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>Fashion E-commerce Site</span>
            </div>
        </div>
    </div>
</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
{{--        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>--}}
        <a class="navbar-brand" href="{{url ('/')}}"><img src="{{ asset('images/header-logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url ('/') }}">Home

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('/product') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{ url ('/about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url ('/contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
