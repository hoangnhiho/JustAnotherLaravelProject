
@extends('layouts.frontendApp')
@section('content')
<style>

</style>
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/press/rnd.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-6" style="height:70vh;background: rgba(255,255,255,0.7);">
                                <div class="carousel-content" style="color: black">
                                    <h2  style="color: black">Australia's Hottest Trends For the property Market in 2017</h2>
                                    <p>We've created the leading 3 trends for you to be aware of the year for the Australian property market.</p>
                                    <p>January 2, 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url({{ url('images/press/rnd.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-6" style="height:70vh;background: rgba(255,255,255,0.7);">
                                <div class="carousel-content" style="color: black">
                                    <h2  style="color: black">Australia's Hottest Trends For the property Market in 2017</h2>
                                    <p>We've created the leading 3 trends for you to be aware of the year for the Australian property market.</p>
                                    <p>January 2, 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
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
            <a href="{{ url('press_event') }}">
                <div class="col-xs-12 add-reading">
                    <div class="" style="background: url({{ url('images/press/events.JPG') }}) no-repeat center center; background-size: cover;"> 
                    <div class="news-banner-img-info"><h3>Events</h3></div>
                    </div>
                </div>
            </a>
        </div>

        <div class="row">
            <a href="{{ url('press_market') }}">
                <div class="col-xs-6 col-sm-3 add-reading">
                    <div class="" style="background: url({{ url('images/press/market.JPG') }}) no-repeat center center; background-size: cover;"> 
                    <div class="footer-img-info"><h3>Market Insights</h3></div>
                    </div>
                </div>
            </a>
            <a href="{{ url('press_news') }}">
                <div class="col-xs-6 col-sm-3 add-reading">
                    <div class="" style="background: url({{ url('images/press/news.jpg') }}) no-repeat center center; background-size: cover;"> 
                    <div class="footer-img-info"><h3>Urban News</h3></div>
                    </div>
                </div>
            </a>
            <a href="{{ url('homestatesmagazine') }}">
                <div class="col-xs-6 col-sm-3 add-reading">
                    <div class="" style="background: url({{ url('images/press/magz.png') }}) no-repeat center center; background-size: cover;"> 
                    <div class="footer-img-info"><h3>Homestates Magazine</h3></div>
                    </div>
                </div>
            </a>
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
