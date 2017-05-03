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
                    Residential rental management and appraisal services
                    <br>
                </h2>
                <p>Property Management is a core node of rental support offered by Homestates to ensure your property remains occupied with quality tenants. Backed by extensive local knowledge of the shifting property market, our management services remain competitive and comprehensive, for your peace of mind.</p>
                <div id="centering">
                    <button class="btn btn-primary">
                        <h3 style="color:white; margin-top: 10px;">Current Listings</h3>
                    </button>
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
                                <i class="fa fa-suitcase fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>Experience</h2>
                                <p>Our cor focus in property management is to qualify the right tenant with the right home.</p>
                                <p>With a focus for long term growth, Homestates property managers prioritise high tenant retention rates with a reduction in vacancy cycles, ensuring that your investment property experiences exceptional financial growth.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-usd fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>Pricing</h2>
                                <p>As an extension of our commitment to long-term relationships with clients, our fees for property management are competitively priced below the market average.</p>
                                <p>This gesture ensures maximum financial value for your investment prperties, enabling you to develop and expand your portfolio for stronger growth.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-clock-o fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>Efficient</h2>
                                <p>Our property managers operate with investors in mind, ensuring that clients are informed with up to date information regarding their property and ensuring that rent is received on time.</p>
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
    <div class="container container-white">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center;">
                    Our expertise in the field of property management
                </h2>
                <p style="text-align: center">
                    View our wide range of property management services.
                </p>
                <br>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <h4 class="panel-title">Landlords<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4> 
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>One of our key driving successors in assisting our clients realise their property goals stems from our vetted agents who have a firm finger on the pulse of the local property market. Having a strong team of experience property management agents, we are confident that our methods will deliver promising returns on your investment property.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <h4 class="panel-title">Tenanting with Homestates<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Minor faults can lead to major problems in any rental property. Our property management team puts investors first, understanding the importance of efficiency when it comes to reporting incidents. Receive and make informed decisions based on up to date information we provide for your investments. It's these reasons that makes tenanting with Homestates a breeze.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            <h4 class="panel-title">Commercial Leasing<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
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
