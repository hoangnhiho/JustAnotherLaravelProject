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
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/aboutus/bg1.jpg') }});background-repeat: no-repeat;background-size: cover;">
        <div class="slider-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 pull-right">
                        <div class="carousel-content">
                            <h2 style="margin-top: 350px; text-align: right">DEFINED BY OUR PEOPLE<br>DRIVEN BY RESULTS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <textarea class="form-control form-text" name="cv" placeholder="Please add a short description regarding your application here."></textarea> 
                            </div>
                        </div>
                        <hr>
                        <div class='col-xs-12'>
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
