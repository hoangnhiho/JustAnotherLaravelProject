@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/buy/Image.jpg') }});background-repeat: no-repeat;background-size: cover;">
        <div class="slider-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-right">
                        <div class="carousel-content">
                            <h2 style="margin-top: 250px; text-align: right">CREATE IMPACTFUL AND COMPELLING LISTINGS FOR YOUR PROPERTY</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
