@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/career.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/aboutus/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content">
                                    <h2 style="text-align: right; padding-top: 70px">HELP REDEFINE<br>REAL ESTATE</h2>
                                    <!-- <p>Sign up to a 10 year management agreement for your property with Homestates by 31 March 2017 and we'll give you 3.5% for the first five years.</p>
                                    <p>Conditions apply.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ url('images/aboutus/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>3.5%</span> RENTAL MANAGEMENT FEE FOR THE FIRST FIVE YEARS</h2>
                                    <p>Sign up to a 10 year management agreement for your property with Homestates by 31 March 2017 and we'll give you 3.5% for the first five years.</p>
                                    <p>Conditions apply.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <!--  Careers -->
    <div class="container container-white margin-box1">
        <div class="row">
            <div class="col-xs-12">
                <form>
                    <div class="form-group">
                        <label>Email address:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    
                    <div class="checkbox">
                        <label><input type="checkbox">I am no a robot</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!--  Careers -->
    <div class="container container-white margin-box1">
        <div class="row">
            <div class="col-xs-12">
                <div class="row" style="padding-bottom: 20px">
                    <div class="col-xs-12 col-sm-4">
                        <h3>{{ $career->name }}</h3>
                        <p class="font-grey">{{ $career->caption }}</p>
                    </div>
                    <div class="col-xs-12 col-sm-8" style="padding-left: 20px">
                        <h2 class="left-align">Role</h2>
                        {!! $career->role !!}
                        <br>
                        <h3 class="left-align">Qualifications</h3>
                        <ul>
                            {!! $career->qual !!}
                        </ul>
                        <h3 class="left-align">Skills</h3>
                        <ul>
                            {!! $career->skills !!}
                        </ul>
                        <br>
                        <br>
                        <div class="apply">
                            <a class="btn btn-primary" href="{{ url('career/' . $career->id) }}">
                                <h4 style="color:white">APPLY NOW</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('customjs')
    <script>

    </script>
@endsection
