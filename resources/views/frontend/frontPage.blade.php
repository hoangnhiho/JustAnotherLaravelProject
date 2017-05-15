@extends('layouts.frontendApp')
@section('content')
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/frontpage/frontheader1.JPG') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>SONGKRAN FESTIVAL</h2>
                                    <h2 style="margin-top: 2px">HOMESTATES TOURING DATES</h2>
                                    <p>Find out where Homesteates is touring in Australia in celebreation of the Thai New Year.</p>
                                    <a class="btn btn-primary btn-lg" href="{{ url('press_event') }}">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ url('images/press/promo.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 style="text-align: left; padding-top: 70px">WELCOME TO OUR<br>NEW WEBSITE</h2>
                                    <p>HELP US FIND WHAT WE MISSED FOR YOUR CHANCE TO WIN</p>
                                    <a class="btn btn-primary btn-lg" href="{{ url('press_promo') }}">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->  

    <br>

    <section>
        <div class="container wow fadeInDown">
            <div class="row">
                <a href="{{ url('/listings/15') }}">
                    <div class="col-sm-offset-1 col-sm-6 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-left" style="">
                        <img class="img-responsive" src="https://i3.au.reastatic.net/1530x841/6cc0e076b3c5a34b53669842ebfc77975c24fabc7f48902a1e94210527d5d636/image3.jpg" alt=""/>
                        <div class="overlayer-info">
                            <h3>Newstead QLD</h3>
                            <p>2 BED 2 BATH 1 CAR</p>
                        </div>
                    </div>
                </a>
                <a href="{{ url('/listings/11') }}">
                    <div class="col-sm-4 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-right" style="">
                        <img class="img-responsive" src="https://i2.au.reastatic.net/1530x841/19fc163bfdf0ee81248fe5b6d86e6c96cff886b85b56588f37bd5c557eabb3f9/image2.jpg" alt="" />
                        <div class="overlayer-info">
                            <h3>Cannon Hill QLD</h3>
                            <p>2 BED 2 BATH 1 CAR</p>
                        </div>
                    </div>
                </a>
            </div>
            <br>
            <div class="row">
                <a href="{{ url('/projects/4 ') }}">
                    <div class="col-sm-offset-1 col-sm-10 col-xs-12 listing-preview" style="">
                        <img class="img-responsive" src="{{ url('images/frontpage/thirdhouse.jpg') }}" alt=""/>
                        <div class="overlayer-info">
                            <h3></h3>
                            <!-- <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p> -->
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <br>

        <div class="container-fluid wow fadeInDown" style="height: 550px;">
            <div class="row wow fadeInDown overlap-img animated" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/worldmap.png') }}) no-repeat center center; background-size: cover;">
                <div class="col-sm-offset-1 col-sm-4 col-xs-10" style="padding: 0px 0px; margin-top: 50px; margin-bottom: 20px;">
                    <!-- <div style="height:300px;"></div> -->
                    <div class="house-content">
                        <div class="house-text" style="padding: 10px 10px; color:#542D6C">
                            <h2 style="color:#542D6C">LOCALLY ESTABLISHED GLOBALLY CONNECTED</h2>
                            <p>Our objective as a client-focused consultancy Group is to link the right investors to the right prperty. We enable businesses, individuals and investors to reach their financial goals, and are committed to acquire and develop quality properties based on realistic values for our clients.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="400ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Japan.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="600ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/S-Korea.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="800ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/China.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1000ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Taiwan.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1200ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Hong-Kong.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1400ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Thailand.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="16000ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Vietnam.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1800ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Malaysia.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="2000ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Singapore.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="2200ms" style="margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Indonesia.png') }}) no-repeat center center; background-size: cover;"></div>
        </div>

    <br>

@endsection
@section('customjs')
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
@endsection
