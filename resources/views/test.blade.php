<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Homestates</title>

    @include('layouts.css')
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
                <div class="col-sm-offset-1 col-sm-6 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-left" style="">
                    <img class="img-responsive" src="{{ url('images/buy/house.jpg') }}" alt=""/>
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-right" style="">
                    <img class="img-responsive" src="{{ url('images/buy/house.jpg') }}" alt="" />
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12 listing-preview" style="">
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
                        <h2 style="color:purple">LOCALLY ESTABLISHED GLOBALLY CONNECTED</h2>
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
                    <div class="house-text" style="padding: 35px 10px;">
                        <h4>"We can warmly recommend Homestates to anyone who appreciates high quality properties with the right price - I can assure that Homestates can be trusted in every situation".</h4>
                        <p>Jasper & Caroline bought this Homestates</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    @include('layouts.footer')
    @include('layouts.js')
    <script>
        // listing-preview
        $( ".listing-preview" ).hover(
            function() {
                $( this ).find(".overlayer-info").fadeIn( "slow" );
            }, function() {
                $( this ).find(".overlayer-info").fadeOut( "slow" );
            }
        );
    </script>
</body>
</html>