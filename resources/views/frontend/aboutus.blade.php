@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/aboutus.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/aboutus/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>3.5%</span> DEFINED BY OUR PEOPLE <br>DRIVEN BY RESULTS</h2>
                                    <!-- <p>Sign up to a 10 year management agreement for your property with Homestates by 31 March 2017 and we'll give you 3.5% for the first five years.</p>
                                    <p>Conditions apply.</p> -->
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
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
                                    <a class="btn btn-primary btn-lg" href="#">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <!-- About us section -->
    <div class="container container-white" id="about">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">About us</h2>
                <p style="text-align: center"><b>Holistic investment services, from start to finish</b></p>
                <p>Homestates is a leading Australian intermediary consultancy providing integrated services including property investments, property sales, property management, and immigration and education services. The group was founded upon the fundamental belief that property and its extension as a home, is a long term process. Meticulously pairing each individual client's needs to their real estate requirements, Homestates successfully contenues to provide client-centric services with a full cycle property outlook.</p>
                <p>With offices based in Brisbane and Sydney, the Group operates, domestically with extensive partnerships throughout Southest Asia, ensuring that our approach to property, immigration and education considers economic developments on a global scale.</p>
                <p>Homestates was founded by a multicultural team of various thnic backgrounds, ensuring that your requirments for groth and wealth creation are accurately met.</p>
            </div>
        </div>
    </div>


    <!-- Philosophy section -->
    <div class="container container-white" id="philosophy">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">Philosophy</h2>
                <p style="text-align: center"><b>What makes us unique</b></p>
                <p>Homestates supports both Australian and international property investors in building wealth by redfining their requirements in property.</p>
                <p>Whether clients are seeking to buy, rent, sell, or develop, Homestates offers guidance through a comprehensive understanding of the Australian property market, based on realistic values.</p>
                <p>With complementary nodes supporting our clients such as intermediary immigration and education services, Homestates strives to achieve a compreshensive full-cycle suite to suit all needs.</p>
                <p>The cor values of Homestates reflect the premise of our services, in addition to our approach with clients.</p>
                <ul>
                    <li>Fully integrated estate and property development facilities</li>
                    <li>Unique and individual investment strategies</li>
                    <li>Acquisition of safety Australian properties</li>
                    <li>Personal attention to client's interests, results and expectations.</li>
                    <li>Comprehensive immigration knowledge and application.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Management section -->
    <div class="container container-white" id="management">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">Management</h2>
                <p style="text-align: center"><b>Our division leaders</b></p>
                <p>Homestates is defined by our people and the results yielded from successfully achieving client goals. It is through the cuccess of our people that the Group continues to faster wealth creation and establish strong financial protfolios, unique to each client.</p>
                <p>Each member of the Homestates team brings a unique combrination of specialist skills, experience and perspectives to the table.</p>
                <p>Introducing the Homestates team.</p>
            </div>
        </div>
    </div>

    <!-- Homestates team -->
    @foreach ($employees as $employee)
        <div class="container container-white" id="team">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-5 col-sm-3">
                            <img src="{{ $employee->img_url }}" class="img-responsive">
                        </div>
                        <div class="col-xs-7 col-sm-9" style="padding-left: 0px">
                            <h2 style="text-align: left">{{ $employee->name }}</h2>
                            <p style="text-align: left">{{ $employee->job_title }}</p>
                            <br>
                            {!! $employee->desc !!}
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
