@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/buy/Image.jpg') }});">
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
            <div class="item" style="background-image: url({{ url('images/buy/Image.jpg') }});">
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

    <!-- This is for the area after the slides -->
    <div class="container container-white">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">
                    Residential real estate sales and property marketing services
                    <br>
                </h2>
                <p>
                    Property investments, houses and homes remains to be Homstates' focal point of service, with three separate divisions geared to provide a complete coverage of all client's needs.
                    <br>
                    Property Sales services the high demand for clients seeking to buy or sell estate-a core operational function of the Group. Backed by a vetted team of experienced property specialists, Homestates offers market-proven strategies to enhance the value of your purchase or sale.
                </p>
                <div id="centering">
                    <a class="btn btn-primary" href="{{ url('listings') }}">
                        <h3 style="color:white">Current Listings</h3>
                    </a>
                </div>
                <br>
            </div>
        </div>
    </div>

    <div class="container-fluid container-white" style="margin-top: 40px">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <div class="row">

                    <!-- Paragraphs next to the forms -->
                    <div class="col-xs-12 col-md-7 line-vert-right-divider">
                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-line-chart fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>
                                     Marketing
                                </h2>
                                <p>
                                    Developed in-house, Homestates offers exceptional property exposure strategies which have been proven to yield effective marketing results.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-flask fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>
                                     Marketing
                                </h2>
                                <p>
                                    Developed in-house, Homestates offers exceptional property exposure strategies which have been proven to yield effective marketing results.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-flask fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>
                                     Marketing
                                </h2>
                                <p>
                                    Developed in-house, Homestates offers exceptional property exposure strategies which have been proven to yield effective marketing results.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal Form -->
                    <div class="col-xs-12 col-md-5 line-vert-left-divider">
                        <h2>
                            Talk to a Homestates Agent
                        </h2>
                        <p>
                            We're here to help seven days a week.
                        </p>
                        <p>
                            What type of home are you looking for?
                        </p>
                        <form action="{{ url('submit_enquiry') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="dropdown" style="">
                                <select class="form-control" style="" name="type">
                                    <option value="Apartment">Apartment</option>
                                    <option value="House">House</option>
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for="email">
                                    Name
                                </label>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    Phone
                                </label>
                                <div class="form-group">
                                    <input type="phone" name="phone" class="form-control" id="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <h6>
                                    What can we help you with?
                                </h6>
                                <textarea name="enquiry" placeholder="Please feel free to ask us a question" class="form-control"></textarea>        
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary form-control" id="submit" value="Submit">
                                </input>                
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        
    </div>

    <!-- This is before the final image area -->
    <div class="container container-white" id="expertiseSection">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center;">
                    Our expertise in the field of property sales
                </h2>
                <p style="text-align: center">
                    View our wide range of property sales services
                </p>
                <br>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <h4 class="panel-title">Off-the-Plan<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4> 
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Off-the-Plan peoperties refer to the purchase of a property prior to its construction. The method of approach is favourable for early adopters as purchases may experience favourable growth in the property market in the form of capital gains.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <h4 class="panel-title">Established Properties<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>The cornerstone of all real estate services established properties refers to the purchasing of a pre-existing home. Selecting established properties gives buyers the chance to inspect the future listings and also the physical side  alongside those currently on the market.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            <h4 class="panel-title">Commercial & Business<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                    <p>Homestates curates a wide selection of business to accomodate for out high-end client's for commercial real estate, namely:</p>
                                    <ul>
                                        <li>Leisure (Hotels, restaurants)</li>
                                        <li>Rental(Shopping malls, rental stores)</li>
                                        <li>Land(Future developments, islands, farms)</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            <h4 class="panel-title">Buyers Agents Services<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Can't find anything you like that's already existing on the market? Our role as Buyers Agents place us at the forefront of the property selection market, enabling us to source the perfect property for you, today.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <!-- Last section of buy page -->

@endsection
@section('customjs')
    <script>

    </script>
@endsection
