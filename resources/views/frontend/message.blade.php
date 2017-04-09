@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/buy/Image.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>3.5%</span> RENTAL MANAGEMENT FEE FOR THE FIRST FIVE YEARS</h2>
                                    <p>Sign up to a 10 year management agreement for your property with Homestates by 31 March 2017 and we'll give you 3.5% for the first five years.</p>
                                    <p>Conditions apply.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ url('images/buy/Image.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>3.5%</span> RENTAL MANAGEMENT FEE FOR THE FIRST FIVE YEARS</h2>
                                    <p>Sign up to a 10 year management agreement for your property with Homestates by 31 March 2017 and we'll give you 3.5% for the first five years.</p>
                                    <p>Conditions apply.</p>
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <!-- This is for the area after the slides -->
    <div class="container container-white">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                @if (isset($message))
                <h2 style="text-align: center">
                    {{ $message }}
                </h2>
                @endif
                @if (isset($caption))
                <p style="text-align: center">{{ $caption }}</p>
                @endif
            </div>
        </div>
    </div>
    <br>


@endsection
@section('customjs')
    <script>

    </script>
@endsection
