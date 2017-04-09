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

    <!-- Careers section -->
    <div class="container container-white" id="careers">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">Careers</h2>
                <p style="text-align: center">Defined by our people, driven by achieving client goals</p>
                <br>
                <p>Homestates is a leading AUstralian intemediary consultancy providing integrated services including peroperty investments, property sales, property management and immigration and education services. The group was founded upon the fundamental belief that property and its extension as a home is a long term process. Meticulously pairing each individual clients needs to their real estate requirements. Homestates successfully continues to provide client-centric services with a full cycle property outlook.</p>
                <p>With offices based in Brisbane and Sydney, the Group operates domestically with extensive partnership throughout Southeast Asia ensuring that our approach to property, immigration and education considers economic developments on a global scale.</p>
                <p>Homestates was founded by a multicultural team of various ethnic backgrounds, ensuring that your requirements to growth and wealth creation are accurately met.</p>
            </div>
        </div>
    </div>

    <!--  Careers -->
    @foreach ($careers as $career)
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
    @endforeach

@endsection
@section('customjs')
    <script>

    </script>
@endsection
