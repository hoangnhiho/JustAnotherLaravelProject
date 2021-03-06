@extends('layouts.frontendApp')
@section('content')
<style>
.clickable{
    text-align: center !important;
}
.owl-theme .owl-controls .owl-page {
    display: inline-block;
}
.owl-theme .owl-controls .owl-page span {
    background: none repeat scroll 0 0 #869791;
    border-radius: 20px;
    display: block;
    height: 12px;
    margin: 5px 7px;
    opacity: 0.5;
    width: 12px;
}
.owl-pagination > .active > span{
    background: none repeat scroll 0 0 #784BA7 !important;
    opacity: 1!important;
}
</style>

    <link href="{{ url('css/sell.css') }}" rel="stylesheet">
    <section id="main-slider" >
        <div class="owl-carousel">
            @foreach (json_decode($listing->img_urls) as $img_url)
                <div class="item img-responsive" style="background: url({{ $img_url }}) no-repeat center center;"></div>
            @endforeach
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->  
    <div class="container-fluid wow fadeInDown" style="">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10" style="padding-top:20px;">

                <div class="row" style="margin-top: 20px">
                    <div class="col-xs-9">
                        <h4>{{ $listing->address }}</h4>
                    </div>
                    @if($listing->type != 'project')
                    <div class="col-xs-1 text-center">
                        <h4>{{ $listing->bed_no }}</h4>
                    </div>
                    <div class="col-xs-1 text-center">
                        <h4>{{ $listing->bath_no }}</h4>
                    </div>
                    <div class="col-xs-1 text-center">
                        <h4>{{ $listing->car_no }}</h4>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-9">
                    </div>
                    @if($listing->type != 'project')
                    <div class="col-xs-1 text-center">
                        <p>Beds</p>
                    </div>
                    <div class="col-xs-1 text-center">
                        <p>Baths</p>
                    </div>
                    <div class="col-xs-1 text-center">
                        <p>Cars</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-white wow fadeInDown" style="margin-top: 10px">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10" style="background-color: white; padding:40px 40px;">



                <div class="row" style="margin-top: 20px">
                    <div class="col-xs-12 col-sm-7">
                        <h5>Hightlights</h5>
                        <p>{!! $listing->desc !!}</p>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        @if ( $listing->type == 'project')
                            <h5>Project</h5>
                        @else
                            <h5>For {{ $listing->type }}</h5>
                        @endif
                        @if ($listing->price == 0)
                            <p>Price on Application</p>
                        @else
                            <p>${{ number_format($listing->price) }} @if ($listing->type == 'rent') per week @endif</p>
                        @endif
                        <hr>
                        <h5>Property information</h5>
                        <p>Land size <span class="pull-right">{{ $listing->landsize }} sqm</span></p>
                        <p>Council rates <span class="pull-right">${{ $listing->council_rate }}</span></p>
                        <p>Water rates <span class="pull-right">${{ $listing->water_rate }}</span></p>
                        <hr>
                        <h5>Available documents</h5>
                        <p><a href="{{ $listing->floor_plan }}" target="_blank"><i class="fa fa-file-text-o" aria-hidden="true"></i> Floorplans</a></p>
                        <p><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Expression of Interest</a></p>
                        <h5>Share this property</h5>
                        <p>
                            <a href="mailto:?subject={{$listing->address}}&body=Check out this listing on Homestates {{ url()->current() }}" style="margin-right: 10px" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> 
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//homestatesgroup.com.au/listings/{{ $listing->id }}&picture={{$listing->img_url}}&title={{ $listing->address }}" target="_blank" style="margin-right: 10px"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/share?url=http%3A//homestatesgroup.com.au/listings/{{ $listing->id }}&text={{ $listing->address }}" target="_blank" style="margin-right: 10px"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>

                <div class="row " style="margin-top: 20px" >
                
                    <div class="col-xs-12 col-sm-4 listing-img-links contactLink" style="background: url({{ $listing->employee->img_url }}) no-repeat center center; background-size: auto 100%;" data-link="{{ url('aboutus#lg-employee-'.$listing->employee->id ) }}">
                        
                        <div class="listing-img-info">
                            <h5>{{ $listing->employee->name }}</h5>
                            <p><a href="{{ $listing->employee->email }}" style="color:white !important">Email</a> | {{ $listing->employee->phone }}</p>
                        </div>
                    </div>

                
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding: 0 0">
        <div class="col-xs-12" style="padding: 0 0" >
        <div id="map" style="width: 100%;height: 400px;"></div>
        </div>
        
    </div>
@endsection
@section('customjs')
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO1XftgdiNWc9T3bRirDqu4thN43S_VX8&callback=initMap">
    </script>    
    <script>
        // listing-preview
        $("a[rel^='prettyPhoto']").prettyPhoto();
        $( ".listing-preview" ).hover(
            function() {
                $( this ).find(".overlayer-info").fadeIn( "slow" );
            }, function() {
                $( this ).find(".overlayer-info").fadeOut( "slow" );
            }
        );
        $('.contactLink').click(function(){
            window.open($(this).data('link'));
        });
    </script>

    <script>
      function initMap() {
        var position = {lat: {{ $listing->lat }}, lng: {{ $listing->lng }} };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: position
        });
        map.setOptions({draggable: false, zoomControl: false, scrollwheel: false, disableDoubleClickZoom: true});

        var marker = new google.maps.Marker({
          position: position,
          map: map
        });
      }
    </script>

@endsection
