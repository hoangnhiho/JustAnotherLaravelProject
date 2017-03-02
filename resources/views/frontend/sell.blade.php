@extends('layouts.frontendApp')
@section('content')
    <link href="{{ url('css/sell.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/sell/sellSlider1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>START THE CONVERSATION ABOUT YOUR HOME TODAY</h2>
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url({{ url('images/sell/sellSlider2.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>START THE CONVERSATION ABOUT YOUR HOME TODAY</h2>
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->  

    <div class="container-fluid container-white wow fadeInDown">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-8" style="background-color: white; padding:40px 40px;">
                <h1>Choosing Homestates to sell your home</h1>
                <p>Unlike other agencies, our commitment to service revolutionises the selling process when it comes to delivering the highest price for your home. We have an established sales process to achieve premium results, and that's why we're accountable to providing you the price we recommend.</p>
                <p>Our method is employed by vetted real estate professionals: Market-proven strategies which form part of our full-cycle commitment to service.</p>
                <p>Start the conversation with us about your home today.</p>
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid wow fadeInDown" style="background-color: white; padding:40px 40px;">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 text-center">
                <h1>Talk to a local Homestates agent</h1>
                <p>Request a complementary listing consultation for your home</p>
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-6">
                        <div class="form-group">
                            <label for="usr">Street Address:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                    </div>

                    <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-4">
                        <div class="form-group">
                            <label for="usr">Postcode:</label>
                            <input type="text" class="form-control" id="usr">
                            
                        </div>
                    </div>
                    <div class="col-xs-offset-1 col-xs-10 col-md-offset-0 col-md-2" style="margin-top:30px">
                        <button type="button" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="" style="margin-top: 40px;">
        <div class="container-fluid wow fadeInDown">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-5 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-left" style="">
                    <img class="img-responsive" src="{{ url('images/frontpage/house.jpg') }}" alt=""/>
                    <div class="overlayer-info">
                        <h1>$10,000,000</h1>
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-right" style="">
                    <img class="img-responsive" src="{{ url('images/frontpage/house.jpg') }}" alt="" />
                    <div class="overlayer-info">
                        <h1>$10,000,000</h1>
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8 col-xs-12 listing-preview" style="">
                    <img class="img-responsive" src="{{ url('images/frontpage/house.jpg') }}" alt=""/>
                    <div class="overlayer-info" id="bigger-overlayer-info">
                        <h1>$10,000,000</h1>
                        <h3>ALBION</h3>
                        <p><b>3</b> BED <b>2</b> BATH <b>1</b> CAR</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
