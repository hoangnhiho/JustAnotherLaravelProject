@extends('layouts.frontendApp')
@section('content')
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/frontpage/bg1.jpg') }});">
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
             <div class="item" style="background-image: url({{ url('images/frontpage/bg2.jpg') }});">
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

    <section>
        <div class="container wow fadeInDown">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-6 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-left" style="">
                    <img class="img-responsive" src="{{ url('images/frontpage/house.jpg') }}" alt=""/>
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-right" style="">
                    <img class="img-responsive" src="{{ url('images/frontpage/house.jpg') }}" alt="" />
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10 col-xs-12 listing-preview" style="">
                    <img class="img-responsive" src="{{ url('images/frontpage/house.jpg') }}" alt=""/>
                    <div class="overlayer-info">
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

        <div class="container wow fadeInDown" style="height: 400px;">
            <div class="row wow fadeInDown overlap-img animated" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/worldmap.png') }}) no-repeat center center; background-size: cover;">
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
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="400ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Japan.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="600ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/S-Korea.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="800ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/China.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1000ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Taiwan.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1200ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Hong-Kong.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1400ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Thailand.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="16000ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Vietnam.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="1800ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Malaysia.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="2000ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Singapore.png') }}) no-repeat center center; background-size: cover;"></div>
            <div class="row wow fadeInDown overlap-img animated" data-wow-delay="2200ms" style="height: 400px; margin: 0px 0px; background: url({{ url('images/frontpage/worldmap/Indonesia.png') }}) no-repeat center center; background-size: cover;"></div>
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
