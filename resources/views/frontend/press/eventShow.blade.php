@extends('layouts.frontendApp')
@section('content')


    <link href="{{ url('css/sell.css') }}" rel="stylesheet">
    <section id="main-slider" style="height:60vh; background: url({{ $event->img_url }}) no-repeat center center; background-size: cover;">
        <div class="slider-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="carousel-content">
                            <h2 style="margin-top: 50vh; text-align: center">{{ $event->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#main-slider-->
    <div class="container-fluid container-white wow fadeInDown" style="margin-top: 10px">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10" style="background-color: white; padding:40px 40px;">



                <div class="row" style="margin-top: 20px">
                    <div class="col-xs-12 col-sm-12">
                        <h5>Hightlights</h5>
                        <p>{!! $event->desc !!}</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <br>
@endsection
@section('customjs')


@endsection
