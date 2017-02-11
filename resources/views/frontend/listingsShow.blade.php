@extends('layouts.frontendApp')
@section('content')
    <link href="{{ url('css/sell.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            @foreach (json_decode($listing->img_urls) as $img_url)
                <div class="item" style="background-image: url({{ $img_url }});">
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
            @endforeach
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->  

    <div class="container-fluid wow fadeInDown">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-8" style="background-color: white; padding:40px 40px;">
                <h1>{{ $listing->address }}</h1>
                <p>Unlike other agencies, our commitment to service revolutionises the selling process when it comes to delivering the highest price for your home. We have an established sales process to achieve premium results, and that's why we're accountable to providing you the price we recommend.</p>
                <p>Our method is employed by vetted real estate professionals: Market-proven strategies which form part of our full-cycle commitment to service.</p>
                <p>Start the conversation with us about your home today.</p>
            </div>
        </div>
    </div>

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
