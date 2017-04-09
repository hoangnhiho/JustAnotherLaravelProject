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
                <form action="{{ url('career/'.$career->id) }}" method="post" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Job Title*</label>
                        <input type="text" class="form-control" name="job_name" value="{{ $career->name }}">
                    </div>
                    <div class="form-group">
                        <label>Name*</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Email address*</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Phone*</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Resume</label>
                        <input type="file" class="form-control" name="resume">
                    </div>
                    <div class="form-group">
                        <label>Cover Letter</label>
                        <input type="file" class="form-control" name="cv_file">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="cv"></textarea> 
                    </div>
                    <hr>
                    <div class="checkbox">
                        <label><input type="checkbox" required>I am not a robot</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<br>
@endsection
@section('customjs')
    <script>

    </script>
@endsection
