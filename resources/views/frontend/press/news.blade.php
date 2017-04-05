@extends('layouts.frontendApp')
@section('content')
<style>

</style>


<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <video poster="" id="slider-video" playsinline autoplay muted loop>
            <!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
            <source src="{{ url('video/events.mp4') }}" type="video/mp4">
        </video>
    </section><!--/#main-slider-->

    <!-- This is for the area after the slides -->
    <div class="container container-white" style="margin-bottom: 30px">
        <div class="row">
            <div class="col-xs-12">
                <h3 style="margin-top: 10px; margin-bottom: 0px">Additional Reading</h3>
                <hr style="margin-top: 5px">
            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 add-reading">
                <div class="" style="background: url({{ url('images/press/events.JPG') }}) no-repeat center center; background-size: cover;"> 
                <div class="news-banner-img-info"><h3>Events</h3></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6 col-sm-3 add-reading">
                <div class="" style="background: url({{ url('images/press/market.JPG') }}) no-repeat center center; background-size: cover;"> 
                <div class="footer-img-info"><h3>Market Insights</h3></div>
                </div>
            </div>
            <a href="{{ url('press_news') }}">
                <div class="col-xs-6 col-sm-3 add-reading">
                    <div class="" style="background: url({{ url('images/press/news.jpg') }}) no-repeat center center; background-size: cover;"> 
                    <div class="footer-img-info"><h3>Urban News</h3></div>
                    </div>
                </div>
            </a>
            <div class="col-xs-6 col-sm-3 add-reading">
                <div class="" style="background: url({{ url('images/press/magz.png') }}) no-repeat center center; background-size: cover;"> 
                <div class="footer-img-info"><h3>Homestates Magazine</h3></div>
                </div>
            </div>
            <a href="{{ url('press_research') }}">
                <div class="col-xs-6 col-sm-3 add-reading">
                    <div class="" style="background: url({{ url('images/press/rnd.jpg') }}) no-repeat center center; background-size: cover;"> 
                    <div class="footer-img-info"><h3>R&D</h3></div>
                    </div>
                </div>
            </a>
            <hr>
        </div>

    </div>
@endsection
@section('customjs')
    <script>

    </script>
@endsection
