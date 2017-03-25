@extends('layouts.frontendApp')
@section('content')

<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="slider-video" playsinline autoplay muted loop>
            <!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
            <source src="{{ url('video/events.mp4') }}" type="video/mp4">
        </video>
    </section><!--/#main-slider-->

    <!-- This is for the area after the slides -->
    <div class="container container-white" style="margin-bottom: 30px">

        @foreach ($projects as $project)
            <div class="row" style="margin-bottom: 15px; margin-top: 15px">
                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive" style="width:100%; height:auto" src="{{ $project->img_url }}" />
                </div>
                <div class="col-xs-12 col-sm-6">
                    <h4>{{ $project->title }}</h4>
                    <p>{{ $project->caption }}</p>
                    <p>{{ $project->desc }}</p>
                    <a class="btn btn-primary" href="#">View Project ></a>
                </div>
            </div>
        @endforeach
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
