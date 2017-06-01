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
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/press/rnd.jpg') }});background-repeat: no-repeat;background-size: cover; overflow-y: hidden;">
        <div class="slider-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-sm-offset-7" style="background: rgba(255,255,255,0.7);">
                        <div class="carousel-content" style="color: black; height: 500px;margin-top: 100px;">
                            <br>
                            <h2 style="color: black">Australia's Hottest Trends For the property Market in 2017</h2>
                            <p>We've created the leading 3 trends for you to be aware of the year for the Australian property market.</p>
                            <p>January 2, 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#main-slider-->

    <div class="container-fluid wow fadeInDown" style="margin-top: 30px">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                @foreach ($events as $event)
                    <div class="row" style="background-color: white; margin-bottom: 30px;">
                        <div class="col-xs-12 col-sm-4" style="padding-left:0px">
                            <a href="{{ url('events/'.$event->id) }}">
                                <img class="img-responsive event-images" src="{{ $event->img_url }}" alt="{{ $event->address }}" />
                            </a>
                        </div>
                        <a href="{{ url('events/'.$event->id) }}">
                            <div class="col-xs-12 col-sm-8">
                                <div class="row" style="margin-top: 20px">
                                    <div class="col-xs-12">
                                        <h4 class="event-name">{{ $event->name }}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        {{ $event->desc }}
                                    </div>
                                </div>
                                <div class="footer-img-info" style="display: none;"><h3 class="event-desc">{{ $event->desc }}</h3></div>
                                <div class="footer-img-info" style="display: none;"><h3 class="event-img">{{ $event->img_url }}</h3></div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>







<!-- Modal -->
<div id="eventModal" class="modal fade" role="dialog" >
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="modal-e-title">Modal Header</h4>
            </div>
            <div class="modal-body row ">
                <div class="col-xs-8 col-xs-offset-2" style="height:80vh; overflow-y: hidden;">
                <p id="modal-e-desc">Some text in the modal.</p>
                <img class="img-responsive" style="margin: 0 auto;" id="modal-e-img" src=""/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
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

            $('#modal-e-title').html($(this).find('.event-name').html());
            $('#modal-e-desc').html($(this).find('.event-desc').html());
            $('#modal-e-img').attr('src', $(this).find('.event-img').html());
            $('#eventModal').modal('show'); 

        });
    </script>
@endsection
