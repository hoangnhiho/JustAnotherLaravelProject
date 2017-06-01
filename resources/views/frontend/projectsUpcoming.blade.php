@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/project/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>UNIQUE AND EXCLUSIVE PROJECTS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ url('images/project/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>UNIQUE AND EXCLUSIVE PROJECTS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <div class="container-fluid container-white" style="padding-top:50px; padding-bottom: 50px; margin-top: 40px" id="projectsList">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10">
                        <h2 style="text-align: center;">
                            Our upcoming projects
                        </h2>
                        <p style="text-align: center">
                            A selection of our most recent projects sold
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projects as $project)
                        <a href="{{ url('projects/'.$project->id) }}">
                            <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ $project->img_url  }}) no-repeat center center; background-size: cover;">
                                <div class="footer-img-info" >
                                    <h3>{{ $project->title }}</h3>
                                </div>
                                @if ($project->upcoming == true)
<!--                                     <div class="sold-banner">
                                        <a>Upcoming</a>
                                    </div> -->
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
@section('customjs')
    <script>

    </script>
@endsection
