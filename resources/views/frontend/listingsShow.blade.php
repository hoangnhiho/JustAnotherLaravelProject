@extends('layouts.frontendApp')
@section('content')
    <link href="{{ url('css/sell.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            @foreach (json_decode($listing->img_urls) as $img_url)
                <div class="item img-responsive" style="background-image: url({{ $img_url }});">
                </div><!--/.item-->
            @endforeach
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->  

    <div class="container-fluid container-white wow fadeInDown" style="margin-bottom: 40px">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10" style="background-color: white; padding:40px 40px;">

                <div class="row" style="margin-top: 20px">
                    <div class="col-xs-9">
                        <h4>{{ $listing->address }}</h4>
                    </div>
                    <div class="col-xs-1 text-center">
                        <h4>{{ $listing->bed_no }}</h4>
                    </div>
                    <div class="col-xs-1 text-center">
                        <h4>{{ $listing->bath_no }}</h4>
                    </div>
                    <div class="col-xs-1 text-center">
                        <h4>{{ $listing->car_no }}</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-9">
                        <p>{{ $listing->caption }}</p>
                    </div>
                    <div class="col-xs-1 text-center">
                        <p>Beds</p>
                    </div>
                    <div class="col-xs-1 text-center">
                        <p>Baths</p>
                    </div>
                    <div class="col-xs-1 text-center">
                        <p>Cars</p>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-xs-12 col-sm-7">
                        <h5>Hightlights</h5>
                        <p>{{ $listing->desc }}</p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <h5>For {{ $listing->type }}</h5>
                        <p>${{ $listing->price }} per week</p>
                        <hr>
                        <h5>Property information</h5>
                        <p>Land size <span class="pull-right">{{ $listing->landsize }} sqm</span></p>
                        <p>Council rates <span class="pull-right">${{ $listing->council_rate }}</span></p>
                        <p>Water rates <span class="pull-right">${{ $listing->water_rate }}</span></p>
                        <hr>
                        <h5>Available documents</h5>
                        <p><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Floorplans</a></p>
                        <p><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Expression of Interest</a></p>
                        <h5>Share this property</h5>
                        <p>
                            <a href="#" style="margin-right: 10px"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> 
                            <a href="#" style="margin-right: 10px"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                            <a href="#" style="margin-right: 10px"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                <div class="col-xs-12 col-sm-4 listing-img-links" style="background: url({{ url('images/aboutus/person1.jpg') }}) no-repeat center center; background-size: cover;">
                    
                    <div class="listing-img-info">
                        <h5>Sarah Doe</h5>
                        <p>Email | 0400000000</p>
                    </div>
                </div>
                </div>

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
