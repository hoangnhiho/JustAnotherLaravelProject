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

    <!-- Property Investment Executive -->
    <div class="container container-white margin-box1">
        <div class="row">
            <div class="col-xs-12">
                <div class="row" style="padding-bottom: 20px">
                    <div class="col-xs-12 col-sm-4">
                        <h3>Property Investment Executive</h3>
                        <p class="font-grey">Brisbane</p>
                    </div>
                    <div class="col-xs-12 col-sm-8" style="padding-left: 20px">
                        <h2 class="left-align">Role</h2>
                        <p class="left-align">Homestates is seeking an energetic and committed Property Investment Executive to join our rapidly expanding team.</p>
                        <p class="left-align">Based in Brisbane (Head Office) and Sydney, Homestates specialises in property investment and management, with a focus on long term growth and wealth creation.</p>
                        <p class="left-align">Work alongside a fully supportive back office team and receive exclusive tutorial training to successfully achieve your goals.</p>
                        <p class="left-align">This is a unique position perfect for individuals who want to operate independently on a commision-based structure.</p>
                        <p class="left-align">Expand your real estate credentials and profile with our unique approach to service. We are seeking someone who</p>
                        <br>
                        <h3 class="left-align">Qualifications</h3>
                        <ul>
                            <li>Holds a current Real Estate Certificate of Registration</li>
                            <li>Holds Driver's License</li>
                        </ul>
                        <h3 class="left-align">Skills</h3>
                        <ul>
                            <li>Understands the importance of exceptional communication skills in the real estate industry</li>
                            <li>Exceedingly motivated and eager to succeed in a highly competitive industry</li>
                        </ul>
                        <br>
                        <br>
                        <div class="apply">
                            <button class="btn btn-primary">
                                <h4 style="color:white">APPLY NOW</h4>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Property Consultant -->
    <div class="container container-white margin-box2">
        <div class="row">
            <div class="col-xs-12">
                <div class="row" style="padding-bottom: 20px">
                    <div class="col-xs-12 col-sm-4">
                        <h3>Property Consultant</h3>
                        <p class="font-grey">Brisbane</p>
                    </div>
                    <div class="col-xs-12 col-sm-8" style="padding-left: 20px">
                        <h2 class="left-align">Role</h2>
                        <p class="left-align">Homestates is seeking an energetic and committed Property Investment Executive to join our rapidly expanding team.</p>
                        <p class="left-align">Based in Brisbane (Head Office) and Sydney, Homestates specialises in property investment and management, with a focus on long term growth and wealth creation.</p>
                        <p class="left-align">Work alongside a fully supportive back office team and receive exclusive tutorial training to successfully achieve your goals. With your own exclusive prospecting locations in Brisbane, this is a unique position perfect for individuals who want to operate independently on a commision-based structure.</p>
                        <p class="left-align">Expand your real estate credentials and profile with our unique approach to service. We are seeking someone who</p>
                        <br>
                        <h3 class="left-align">Qualifications</h3>
                        <ul>
                            <li>Holds a current Real Estate Certificate of Registration</li>
                            <li>Holds Driver's License</li>
                        </ul>
                        <h3 class="left-align">Skills</h3>
                        <ul>
                            <li>Understands the importance of exceptional communication skills in the real estate industry</li>
                            <li>Exceedingly motivated and eager to succeed in a highly competitive industry</li>
                        </ul>
                        <br>
                        <br>
                        <div class="apply">
                            <button class="btn btn-primary">
                                <h4 style="color:white">APPLY NOW</h4>
                            </button>
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
