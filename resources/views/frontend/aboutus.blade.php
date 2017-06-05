@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/aboutus.css') }}" rel="stylesheet">
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

    <!-- About us section -->
    <div class="container container-white" id="about">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">About us</h2>
                <p style="text-align: center"><b>Holistic investment services, from start to finish</b></p>
                <p>Homestates is a leading Australian intermediary consultancy providing integrated services including property investments, property sales, property management, and immigration and education services.</p>
                <p>The Group was founded upon the fundamental belief that property, and its extension as a home, is a long term process. Meticulously pairing each individual client’s needs to their real estate requirements, Homestates successfully continues to provide client-centric services with a full cycle property outlook.</p>
                <p>With offices based in Brisbane and Sydney, the Group operates domestically with extensive partnerships throughout Southeast Asia, ensuring that our approach to property, immigration and education considers economic developments on a global scale.</p>
                <p>Homestates was founded by a multicultural team of various ethnic backgrounds, ensuring that your requirements for growth and wealth creation are accurately met.</p>
            </div>
        </div>
    </div>


    <!-- Philosophy section -->
    <div class="container container-white" id="philosophy">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">Philosophy</h2>
                <p style="text-align: center"><b>What makes us unique</b></p>
                <p>Homestates supports both Australian and international property investors in building wealth by refining their requirements in property.</p>
                <p>Whether clients are seeking to buy, rent, sell, or develop, Homestates offers guidance through a comprehensive understanding of the Australian property market, based on realistic values.</p>
                <p>With complementary nodes supporting our clients such as intermediary immigration and education services, Homestates strives to achieve a comprehensive full-cycle suite to suit all needs.</p>
                <p>The core values of Homestates reflect the premise of our services, in addition to our approach with clients</p>
                <ul>
                    <li>Fully integrated real estate and property development business, with a central focus on customer service</li>
                    <li>Unique and individual investment strategies</li>
                    <li>Acquisition and development of quality Australian properties</li>
                    <li>Personal attention to client’s interests, needs and expectations.</li>
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
                <p>Homestates is defined by our people and the results yielded from successfully achieving client goals. It is through the success of our people that the Group continues to foster wealth creation and establish strong financial portfolios, unique to each client.</p>
                <p>Each member of the Homestates team brings a unique combination of specialist skills, experience and perspectives to the table.</p>
                <p>Introducing the Homestates team.</p>
            </div>
        </div>
    </div>

    <!-- Homestates team -->
    @foreach ($employees as $employee)
        <div class="container container-white team xs-employee" id="xs-employee-{{$employee->id}}" data-employee="{{$employee->id}}">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="{{ $employee->img_url }}" width="100px" height="auto">
                            <span style="text-align: left; padding-left: 20px"><b>{{ $employee->name }}</b> {{ $employee->job_title }} <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-white team lg-employee" id="lg-employee-{{$employee->id}}" data-employee="{{$employee->id}}" style="display:none">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-5 col-sm-3">
                            <img src="{{ $employee->img_url }}" class="img-responsive">
                        </div>
                        <div class="col-xs-7 col-sm-9" style="padding-left: 0px">
                            <h2 style="text-align: left">{{ $employee->name }} <i class="fa fa-chevron-up pull-right" aria-hidden="true"></i></h2>
                            <p style="text-align: left">{{ $employee->job_title }}</p>
                            <br>
                            {!! $employee->desc !!}
                            <br>
                            <h4>Contact</h4>
                            <p style="margin-bottom: 0">E: <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a></p>
                            <p style="margin-bottom: 0">M: {{ $employee->mobile }}</p>
                            <p style="margin-bottom: 0">D: {{ $employee->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="container container-white">
    </div>
@endsection
@section('customjs')
    <script>
        $('.xs-employee').click(function() {
            console.log($(this).data('employee'));
            var employeeId = $(this).data('employee');
            $(this).hide();
            $('#lg-employee-'+employeeId).show();
        });
        $('.lg-employee').click(function() {
            console.log($(this).data('employee'));
            var employeeId = $(this).data('employee');
            $(this).hide();
            $('#xs-employee-'+employeeId).show();
        });
    </script>
@endsection
