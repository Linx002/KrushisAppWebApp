<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Metas -->
    <title>Krushis Indian Bistro</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/photos/img/favicon.ico" type="img/x-icon">
    <link rel="apple-touch-icon" href="/photos/img/apple-touch-icon.png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
        <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/photos/img/logo.png" height="60px" alt="Krushi's Indian Bistro" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/menu">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="/news">News</a></li>

                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li> --}}

                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <main class="py-4">
            <div class="content">
                @yield('content')
            </div>
        </main>
    </div>
        <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <img src="/photos/img/logo.png" height="60px" alt="Krushi's Indian Bistro" />
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Our Social Media</h3>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>
                    <p class="lead">Main Street #1829, Canada, Canada, 66755</p>
                    <p class="lead"><a href="#">+01 2000 800 9999</a></p>
                    <p><a href="#"> krushisindianbistro@krushis.com</a></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Opening hours</h3>
                    <p><span class="text-color">Monday: </span>Closed</p>
                    <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                    <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2021 <a href="#">Krushis Indian Bistro</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->
</body>

</html>
