<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Homestates</title>
	<!-- core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ url('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ url('css/main.css') }}" rel="stylesheet">
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet">
     
    <link rel="icon" type="image/png" href="{{ url('favicon.png')}}" />
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" style="background-color: #784BA7; color:white"><img src="{{ url('images/buy/logo.png') }}" alt="logo" style="width:auto; height:57px; background-color: #784BA7;"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Buy</a></li>
                        <li class="scroll"><a href="#features">Sell</a></li>
                        <li class="scroll"><a href="#services">Rent</a></li>
                        <li class="scroll"><a href="#portfolio">Projects</a></li>
                        <li class="scroll"><a href="#about">Migration & Education</a></li>
                        <li class="scroll"><a href="#meet-team">Press Room</a></li>
                        <li class="scroll"><a href="#pricing">About Us</a></li>
                        <li class="scroll"><a href="{{ url('login') }}">Login</a></li> 
                        <!-- <li class="scroll"><a href="#get-in-touch">Contact</a></li>                         -->
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/buy/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>3.5%</span> RENTAL MANAGEMENT FEE FOR THE FIRST FIVE YEARS</h2>
                                    <p>Sign up to a 10 year management agreement for your property with Homestates by 31 March 2017 and we'll give you 3.5% for the first five years.</p>
                                    <p>Conditions apply.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url({{ url('images/buy/bg2.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>3.5%</span> RENTAL MANAGEMENT FEE FOR THE FIRST FIVE YEARS</h2>
                                    <p>Sign up to a 10 year management agreement for your property with Homestates by 31 March 2017 and we'll give you 3.5% for the first five years.</p>
                                    <p>Conditions apply.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->  

    <br>

    <section id="">
        <div class="container wow fadeInDown">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-6 col-xs-12 listing-preview listing-preview-top" style="padding: 5px">
                    <img class="img-responsive" src="{{ url('images/buy/house.jpg') }}" alt=""/>
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 listing-preview listing-preview-top" style="padding: 5px">
                    <img class="img-responsive" src="{{ url('images/buy/house.jpg') }}" alt="" />
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12 listing-preview" style="padding: 5px">
                    <img class="img-responsive" src="{{ url('images/buy/house.jpg') }}" alt=""/>
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <section id="">
        <div class="row wow fadeInDown" style="margin: 0px 0px; background: url({{ url('images/buy/world_map.png') }}) no-repeat center center; background-size: cover;">
            <div class="col-sm-offset-1 col-sm-5 col-xs-12" style="padding: 0px 0px; margin-top: 20px; margin-bottom: 20px;">
                <!-- <div style="height:300px;"></div> -->
                <div class="house-content">
                    <div class="house-text" style="padding: 10px 10px; color:purple">
                        <p>LOCALLY ESTABLISHED GLOBALLY CONNECTED</p>
                        <p>Our objective as a client-focused consultancy Group is to link the right investors to the right prperty. We enable businesses, individuals and investors to reach their financial goals, and are committed to acquire and develop quality properties based on realistic values for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    
    <section id="">
        <div class="row wow fadeInDown" style="margin: 0px 0px; background: url({{ url('images/buy/footer1.jpg') }}) no-repeat center center; background-size: cover;">
            <div class="col-sm-offset-1 col-sm-3 col-xs-10 col-xs-offset-1" style="padding: 0px 0px; overflow:hidden">
                <!-- <div style="height:300px;"></div> -->
                <div class="house-content">
                    <div class="house-overlayer"></div>
                    <div class="house-text" style="padding: 10px 10px;">
                        <p>"We can warmly recommend Homestates to anyone who appreciates high quality properties with the right price - I can assure that Homestates can be trusted in every situation".</p>
                        <p>Jasper & Caroline bought this Homestates</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <footer id="footer">
        <div class="container" id="footer-container">
            <div class="row" id="footer-row">
                <div class="col-sm-7 col-sm-12" id="footer-bar-text">
                    <p class="text-right">Talk to us about your next property today <button class="btn-primary">GO</button></p>
                </div>
                <div class="col-sm-5 col-xs-12" id="footer-bar-icons">
                    <ul class="social-icons pull-left">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

<div class="container">
    <div class="row">
        <div class="col-xs-offset-2 col-xs-8">
            <div class="row footer-links">
                <div class="col-xs-3">
                    <p><b>Buy</b></p>
                    <p>Choosing Homestates</p>
                    <p>Current Listings</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Sell</b></p>
                    <p>Our Strategy</p>
                    <p>Research</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Rent</b></p>
                    <p>Renting with Homestates</p>
                    <p>Current Listings</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Projects</b></p>
                    <p>Our Advantage</p>
                    <p>Off-the-Plan Listings</p>
                </div>
            </div>
            <div class="row footer-links">
                <div class="col-xs-3">
                    <p><b>Migration & Education</b></p>
                    <p>Immigration Services</p>
                    <p>Education Support</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Press Room</b></p>
                    <p>Media Release</p>
                    <p>Homestates</p>
                </div>
                <div class="col-xs-3">
                    <p><b>About Us</b></p>
                    <p>Pilosophy</p>
                    <p>Careers</p>
                    <p>FAQ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 40px">
        <div class="col-sm-12 text-center">
            <p><a target="_blank" href="http://homestates.com.au/">Contact Us</a> | 
            <a target="_blank" href="http://homestates.com.au/">Privacy Policy</a> | 
            <a target="_blank" href="http://homestates.com.au/">Terms & Conditions</a> | 
            <a target="_blank" href="http://homestates.com.au/">@ Homestates 2017</a> 
            </p>
        </div>
    </div>


</div>
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ url('js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('js/mousescroll.js') }}"></script>
    <script src="{{ url('js/smoothscroll.js') }}"></script>
    <script src="{{ url('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ url('js/jquery.inview.min.js') }}"></script>
    <script src="{{ url('js/wow.min.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script>
        // listing-preview
        $( ".listing-preview" ).hover(
            function() {
                console.log("yolo");
                $( this ).find(".overlayer-info").fadeIn( "slow" );

            }, function() {
                $( this ).find(".overlayer-info").fadeOut( "slow" );
            }
        );
    </script>
</body>
</html>