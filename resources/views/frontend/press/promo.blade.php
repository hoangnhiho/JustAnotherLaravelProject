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
            <div class="item" style="background-image: url({{ url('images/press/promo.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 style="text-align: left; padding-top: 70px">WELCOME TO OUR<br>NEW WEBSITE</h2>
                                    <p>HELP US FIND WHAT WE MISSED FOR YOUR CHANCE TO WIN</p>
                                    <!-- <p>Conditions apply.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ url('images/press/promo.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 style="text-align: left; padding-top: 70px">WELCOME TO OUR<br>NEW WEBSITE</h2>
                                    <p>HELP US FIND WHAT WE MISSED FOR YOUR CHANCE TO WIN</p>
                                    <!-- <p>Conditions apply.</p> -->
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
                <p>Homestates is a leading Australian intermediary consultancy providing integrated services including property investments, property sales, property management, and immigration and education services. The Group was founded upon the fundamental belief that property, and its extension as a home, is a long term process. Meticulously pairing each individual client's needs to their real estate requirements, Homestates successfully continues to provide client-centric services with a full cycle property outlook.</p>
                <p>With the launch of our new website, we'd love your feedback on what we can improve, or misspelled.</p>
                <p>We're so confident you you'll find something that we missed, we're going to give contributors the chance to go in the draw and win one of faive $100 gift cards.</p>
                <p>Simply fill in your details below, and we'll be in touch.</p>
                <form action="{{ url('press_promo') }}" method="post" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class='col-xs-12' style="padding-left: 0">
                                <label>Details*</label>
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
                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class="form-group">
                                <textarea class="form-control form-text" name="desc" placeholder="Description and Link."></textarea> 
                            </div>
                        </div>
                        <div class='col-xs-12'>
                            <div class="form-group">
                                <input type="checkbox" name="terms" required">
                                <a href="#">I agree to marketing materials, etc</a>
                            </div>
                        </div>
                        <div class='col-xs-12'>
                            <div class="form-group">
                                <input type="checkbox" name="terms" required value="I've read Terms & Conditions">
                                <a href="{{ url('pdfs/terms.pdf') }}">I've read the Terms & Conditions</a>
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
