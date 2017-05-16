<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ToDo Application</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap-material-design.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>

    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-inverse ">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapse -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    ToDo
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="#">{{ ucfirst(Auth::user()->name) }}</a></li>
                        <li class="dropdown">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content') <!-- Here Is The Content  -->

<script src="{{ asset('/') }}js/jquery-3.1.1.min.js"></script>
<script src="{{ asset('/') }}js/bootstrap.js"></script>
<script src="{{ asset('/') }}js/material.min.js"></script>
<script src="{{ asset('/') }}js/ripples.min.js"></script>
<script src="{{ asset('/') }}js/laravel.js"></script>
    @yield('scripts')  <!-- Here Is If There is another scripts  -->
</body>
</html>
