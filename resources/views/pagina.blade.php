@extends('layouts.app')

@section('content')
<!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Welcome To <span>Krushis Indian Bistro</span></h1>
                        <h3>Who we are?</h3>
                        <p>Krushis Indian Bistro starts in a little town at 1999, as a little Indian restaurant. Today our manager Mohammed Avdol, who is the actual owner has been working around 20 years giving us delicious food made by him. </p>
                        <p>We have more than 20 years giving our services and we are growing up for you. Check our menu and see what are our most famous dishes.</p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Menu</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="img/k5.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Our favorites</h2>
                        <p>Take a look of our top best dishes!</p>
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="img/AlooGobi.jpg">
                            <img class="img-fluid" src="img/AlooGobi.jpg" alt="Gallery Images">
                        </a>
                        <h4>Aloo gob</h4>
                        <br>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="img/butterChicken.jpg">
                            <img class="img-fluid" src="img/butterChicken.jpg" alt="Gallery Images">
                        </a>
                        <h4>Butter chicken</h4>
                        <br>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="img/ChanaMasala.jpg">
                            <img class="img-fluid" src="img/ChanaMasala.jpg" alt="Gallery Images">
                        </a>
                        <h4>Chana masala</h4>
                        <br>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="img/palak.jpg">
                            <img class="img-fluid" src="img/palak.jpg" alt="Gallery Images">
                        </a>
                        <h4>Palak paneer</h4>
                        <br>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="img/chickentikka.jpg">
                            <img class="img-fluid" src="img/chickentikka.jpg" alt="Gallery Images">
                        </a>
                        <h4>Chicken tikka masala</h4>
                        <br>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="img/fishcurry.jpg">
                            <img class="img-fluid" src="img/fishcurry.jpg" alt="Gallery Images">
                        </a>
                        <h4>Fish curry</h4>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
