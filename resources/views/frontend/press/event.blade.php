@extends('layouts.frontendApp')
@section('content')
<style>
.thumbnail > a > img {
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
}
.thumbnail > a > img:hover {
    opacity:0.5;
}
.owl-item{
    margin-left: 10px;
}
</style>
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <video poster="" id="slider-video" playsinline autoplay muted loop>
            <!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
            <source src="{{ url('video/events.mp4') }}" type="video/mp4">
        </video>
    </section><!--/#main-slider-->


    <!-- This is for the area after the slides -->
    <div class="container container-white" style="margin-bottom: 10px; overflow-x: hidden">
        <div class="row">
            <div class="col-xs-12">
                <h3 style="margin-top: 10px; margin-bottom: 0px">Events</h3>
                <hr style="margin-top: 5px">
            </div>

        </div>

        <div class="row">
            <div id="event-owl-carousel">
                @foreach ($events as $event)
                    <div class="event-car-item" data-link="event-panel-{{ $event->id }}" style="background: url({{ $event->img_url }}) no-repeat center center; background-size: cover;"> 
                        <div class="footer-img-info"><h3>{{ $event->name }}</h3></div>
                    </div>
                @endforeach
            </div>
            <hr>
        </div>
    </div>
    <div class="container container-white" style="margin-bottom: 30px;margin-top: 0px; overflow-x: hidden">
        <div class="row">
            <div class="col-xs-12">
                @foreach ($events as $event)
    
        
    

                <div class="panel event-panel" id="event-panel-{{ $event->id }}" style="@if (!$loop->first) display:none; @endif">
                    <div class="panel-heading"><h4>{{ $event->name }}</h4></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-3">
                                <a href="{{ $event->img_url }}" rel="prettyPhoto" title="{{ $event->caption }}">
                                    <img class="img-responsive" src="{{ $event->img_url }}"/>
                                </a>
                            </div>
                            <div class="col-xs-9">
                                <p>{{ $event->desc }}</p>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>

        </div>


    </div>
@endsection
@section('customjs')
    <script>
        $('#event-owl-carousel').owlCarousel({
            items : 4,
            margin: 20,
            autoHeight : true,
            navigation : true,
                navigationText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
                ]
        })

        $('.event-car-item').click(function() {
            var eventId = $(this).attr('data-link');
            $('.event-panel').fadeOut("slow");
            $('#'+eventId).delay( 500 ).fadeIn("slow");
        });
    </script>
@endsection
