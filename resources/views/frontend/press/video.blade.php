@extends('layouts.frontendApp')
@section('content')

<link href="{{ url('css/buy.css') }}" rel="stylesheet">
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
        <div class="row" style="margin-bottom: 15px; margin-top: 15px">
        @foreach ($projects as $project)
            <a href="#">
                <div class="col-xs-12 col-sm-4">
                    <img class="img-responsive" style="width:100%; height:auto" src="{{ $project->img_url }}" />
                    <h4>{{ $project->title }}</h4>
                    <p>{{ $project->caption }}</p>
                </div>
            </a>
            
        @endforeach
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                {{ $projects->links() }}
            </div>
        </div>

    </div>
@endsection
@section('customjs')
    <script>

    </script>
@endsection
