@extends('layouts.frontendApp')
@section('content')
<style>
.nice {
    border: solid #784BA7 1px;
    background: #fff;
    display: block;
    width: 100%;
    max-width: 100%;
    box-shadow: 0 0 0 2px #fff;
}
.nice .NFI-button {
    height: 40px;
    line-height: 40px;
    background: #784BA7;
    color: #fff;
    width: 30%;
}
.nice .NFI-button:hover {
    background: purple;
}
.nice .NFI-filename {
    display: block;
    width: 70%;
    height: 40px;
    margin: 0;
    padding: 0;
    border: none;
}
.nice .NFI-filename:focus {
    border: none;
}
.form-col-4{
    padding-left: 0px;
    padding-right: 0px;
}
.form-text{
    border-radius: 0px;
}

</style>
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
    <div class="container margin-box1">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2" style="background-color:white; padding-top:20px;padding-bottom: 20px">
                <form action="{{ url('career/'.$career->id) }}" method="post" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <div class="form-group" style="display:none;">
                        <label>Job Title*</label>
                        <input type="text" class="form-control" name="job_name" value="{{ $career->name }}">
                    </div>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class='col-xs-12' style="padding-left: 0">
                                <label>Your Details*</label>
                            </div>
                            <div class='col-xs-12 col-sm-4 form-col-4'>
                                <div class="form-group">
                                    <input type="text" class="form-control form-text" name="name" required placeholder="Name">
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 form-col-4'>
                                <div class="form-group">
                                    <input type="email" class="form-control form-text" name="email" required placeholder="Email">
                                </div>
                            </div>
                            <div class='col-xs-12 col-sm-4 form-col-4'>
                                <div class="form-group">
                                    <input type="text" class="form-control form-text" name="phone" required placeholder="Phone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class='row'>
                        <div class='col-xs-12'>
                            <label>Your Documents*</label>
                        </div>
                        <div class='col-xs-12'>
                            <div class="form-group">
                                <input type="file" class="nice NFI-filename" name="resume" id="resumeInput">
                            </div>
                        </div>
                        <div class='col-xs-12'>
                            <div class="form-group">
                                <input type="file" class="nice NFI-filename" name="cv_file" id="cvInput">
                            </div>
                        </div>
                        <div class='col-xs-12'>
                            <div class="form-group">
                                <textarea class="form-control form-text" name="cv" placeholder="Cover Letter"></textarea> 
                            </div>
                        </div>
                        <hr>
                        <div class='col-xs-12'>
                            <label><input type="checkbox" required>I am not a robot</label>
                            <button type="submit" class="btn btn-primary" style="width:100%; margin-top: 5px;padding: 10px 12px;">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
<br>
@endsection
@section('customjs')
    <script>
        $(document).ready(function(){
            // your code...
            $("#resumeInput").nicefileinput({ label : 'Resume' });
            $("#cvInput").nicefileinput({ label : 'Cover Letter' });
        });
    </script>
@endsection
