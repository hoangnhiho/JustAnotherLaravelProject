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
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/press/rnd.jpg') }});background-repeat: no-repeat;background-size: cover; overflow-y: hidden;">
        <div class="slider-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-sm-offset-7" style="background: rgba(255,255,255,0.7);">
                        <div class="carousel-content" style="color: black; height: 400px;margin-top: 100px;">
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

    <div class="container-fluid container-white" style="padding-top:50px; padding-bottom: 50px; margin-top: 40px" id="projectsList">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10">
                        <h2 style="text-align: center;">
                            Our magazines
                        </h2>
                        <p style="text-align: center">
                            A selection of our most recent magazines
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($mags as $mag)
                        <a href="{{ $mag->pdf_url }}" target="_blank">
                            <div class="col-xs-12 col-sm-4 footer-img-links event-car-item" data-link="event-panel-{{ $mag->id }}" style="background: url({{ $mag->img_url  }}) no-repeat center center; background-size: cover;">
                                <div class="footer-img-info"><h3 class="event-name">{{ $mag->name }}</h3></div>


                                <div class="footer-img-info" style="display: none;"><h3 class="event-desc">{{ $mag->desc }}</h3></div>
                                <div class="footer-img-info" style="display: none;"><h3 class="event-img">{{ $mag->img_url }}</h3></div>
                                <div class="footer-img-info" style="display: none;"><h3 class="event-pdf">{{ $mag->pdf_url }}</h3></div>
                            </div>
                        </a>
                    @endforeach
                </div>
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
                <h4 class="modal-title" id="modal-e-title">{{ $mag->name }}</h4>
            </div>
            <div class="modal-body row ">
                <div class="col-xs-8 col-xs-offset-2" style="height:80vh; overflow-y: hidden;">
                <p id="modal-e-desc">Some text in the modal.</p>
                <img class="img-responsive" style="margin: 0 auto;" id="modal-e-img" src=""/>
                <a id="modal-e-pdf" href="" class="btn btn-primary" style="margin-top: 5px">Download Magazine</a>
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

        // $('.event-car-item').click(function() {

        //     $('#modal-e-title').html($(this).find('.event-name').html());
        //     $('#modal-e-desc').html($(this).find('.event-desc').html());
        //     $('#modal-e-img').attr('src', $(this).find('.event-img').html());
        //     $('#modal-e-pdf').attr('href', $(this).find('.event-pdf').html());
        //     $('#eventModal').modal('show'); 

        // });
    </script>
@endsection
