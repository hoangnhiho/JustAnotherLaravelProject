@extends('layouts.frontendApp')
@section('content')
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

    <!-- Careers section -->
    <div class="container container-white" id="careers">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">Careers</h2>
                <p style="text-align: center">Defined by our people, driven by achieving client goals</p>
                <br>
                <p>Homestates is a leading Australian intermediary consultancy providing integrated services including property investments, property sales, property management, and immigration and education services. The Group was founded upon the fundamental belief that property, and its extension as a home, is a long term process. Meticulously pairing each individual client’s needs to their real estate requirements, Homestates successfully continues to provide client-centric services with a full cycle property outlook.</p>
                <p>With offices based in Brisbane and Sydney, the Group operates domestically with extensive partnerships throughout Southeast Asia, ensuring that our approach to property, immigration and education considers economic developments on a global scale.</p>
                <p>Homestates was founded by a multicultural team of various ethnic backgrounds, ensuring that your requirements for growth and wealth creation are accurately met.</p>
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

    <br>
@endsection
@section('customjs')
    <script>

    </script>
@endsection
