@extends('layouts.frontendApp')
@section('content')

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

    <!-- This is for the area after the slides -->
    <div class="container container-white" style="margin-bottom: 30px">
        <div class="row" style="margin-bottom: 15px; margin-top: 15px">
        @foreach ($videos as $video)
            <a href="{{ $video->video_url }}" target="_blank">
                <div class="col-xs-12 col-sm-4">
                    <img class="img-responsive" style="width:100%; height:auto" src="{{ $video->img_url }}" />
                    <h4 class="text-center">{{ $video->name }}</h4>
                </div>
            </a>
        @endforeach
        </div>
    </div>
@endsection
@section('customjs')
    <script>

    </script>
@endsection
