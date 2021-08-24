<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DOCTOR | Appoinment System</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.js"></script>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 header-logo">
                    <br>
                    <a href="{{url('/home')}}"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
                </div>

                <div class="col-md-7">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid nav-bar">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="menu active" href="{{url('/home')}}">Home</a></li>
                                    <li><a class="menu" href="{{url('/about')}}">about us</a></li>
                                    <li><a class="menu" href="{{url('/service')}}">our services </a></li>
                                    <li><a class="menu" href="{{url('/team')}}">our team</a></li>
                                    <li><a class="menu" href="{{url('/home#contact')}}"> contact us</a></li>
                                    <li>
                                        @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                    <li>
                                        <x-app-layout>
                                            <!--a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a-->
                                        </x-app-layout>
                                    </li>
                                    @else
                                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                                    <li>

                                        @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                    @endif
                                    @endauth
                            </div>
                            @endif
                            </li>
                            </ul>
                        </div><!-- /navbar-collapse -->
                </div><!-- / .container-fluid -->
                </nav>
            </div>
        </div>
        </div>
    </header> <!-- end of header area -->

    <!-- about section -->
    <section class="about text-center" id="about">
        <div class="container">
            <div class="rows">
                <h2>about us</h2>
                <h4> Since the begining of the Covid - 19 pandemic we aim to give the best service to our customers, along with the best doctors in Sri Lanka</h4>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail clearfix">
                        <div class="about-img">
                            <img class="img-responsive" src="img/item1.jpg" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>C</h1>
                            </div>
                            <h3>Children’s specialist</h3>
                            <!--p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p-->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="img/item2.jpg" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>P</h1>
                            </div>

                            <h3>Psychiatrist</h3>
                            <!--p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p-->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-about-detail">
                        <div class="about-img">
                            <img class="img-responsive" src="img/item3.jpg" alt="">
                        </div>
                        <div class="about-details">
                            <div class="pentagon-text">
                                <h1>G</h1>
                            </div>
                            <h3>General Physician</h3>
                            <!--p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of about section -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>