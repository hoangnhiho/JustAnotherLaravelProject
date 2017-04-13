@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/project/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>UNIQUE AND EXCLUSIVE PROJECTS</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ url('images/project/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>UNIQUE AND EXCLUSIVE PROJECTS</h2>
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
                    Off-the-plan developments and projects
                    <br>
                </h2>
                <p>Property Investment allows clients to tap into Homestates' propiletary database of upcoming property development projects to secure real estate with vetted rental or capital yields. Our collaboration with blue chip real estate developers means we can provide priority access and viewings on unreleased projects, across the globe</p>
                <div id="centering">
                    <button class="btn btn-primary">
                        <a data-scroll href="#projectsList"><h3 style="color:white; margin-top: 10px">View the Collection</h3></a>
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
                                <i class="fa fa-university fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>Invest</h2>
                                <p>wFocusing on investor returns and financia growth, projects selected by Homestates boast tangible rental yields and exceptional value in any given market.</p>
                                <p>Homestates offers quality products backed by reputable developers - the resulting amalgamation is a timeles recipe for strong financial performance and capital growth.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-eye fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>Foresight</h2>
                                <p>Homestates strategically selects projects aligned with prospective infastructure, in addition to the anticipated economic shifts on the property market.</p>
                                <p>Combined with our methodical approach to market growth and project reports, investors receive a product that has been assessed for its viability, both now and towards the future.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-life-ring fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9" style="margin-bottom: 20px">
                                <h2>Exclusive</h2>
                                <p>Our strong network of developers provides clients with a platform to access locations, projects offers and incentives exclusivly to Homestates Group.</p>
                                <p>Receive pre-market release previews of off-the-plan projects, and gain first access to select floorplans of your choice.</p>
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

                        <div class="dropdown" style="">
                            <select class="form-control" style="">
                                <option value="Apartment">Apartment</option>
                                <option value="House">House</option>
                                <option value="Castle">Castle</option>
                            </select>

                        </div>
                        <form action="" method="">
                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    Phone
                                </label>
                                <div class="form-group">
                                    <input type="phone" class="form-control" id="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <h6>
                                    What can we help you with?
                                </h6>
                                <textarea placeholder="Please feel free to ask us a question" class="form-control"></textarea>        
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-default form-control" id="submit" value="Submit">
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
                    Our expertise in the field of property investment
                </h2>
                <p style="text-align: center">
                    View our wide range of property investment services services.
                </p>
                <br>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <h4 class="panel-title">Our Advantage<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4> 
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Population</p>
                                <p>An increasing population naturally increases the demand for accommodation. Naturally, governing bodies and developers will collaborate to support the population growth by creating more apartments, townhouses and homes.</p>
                                <br>
                                <p>Infrastructure</p>
                                <p>Convenience and quality of life is paramount to everyone, which is why it's essential for investment properties to be situated close to amenities such as schools, shopping centres and recreation hubs</p>
                                <p>Employment</p>
                                <p>A short commute to work is highly sought after trait for tenants, a premise which we maintain throughout all our investment projects on offer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <h4 class="panel-title">Investors<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We believe that at its core, wealth creation starts with a thorough understanding of each individual client's requirements for financial success. It's through this understanding that we are able to deliver a fully integrated real estate service that focuses centrally on customer service, and unique investment strategies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            <h4 class="panel-title">Overseas Investors<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>With our networks covering over 6 countries and territories in Asia. Homestates aims to connect clients to investment and lifestyle opportunities to thrive and proper across the globe. We cater to our strong interest for off-the-0plan projects from overseas investors, with over 55% pf pir c;oemts nased internationally.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                            <h4 class="panel-title">Overseas Investors<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>We are always open to discussing how we can provide solutions for developers and their real estate requirements. Get in touch with Homestates to see what we can offer for your project today.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-white" style="padding-top:50px; padding-bottom: 50px; margin-top: 40px" id="projectsList">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10">
                        <h2 style="text-align: center;">
                            Our prvious projects
                        </h2>
                        <p style="text-align: center">
                            A selection of our most recent projects sold
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg1.jpg') }}) no-repeat center center; background-size: cover;">
                        <div class="footer-img-info" >
                            <h3>REVERS EDGE</h3>
                        </div>
                        <div class="sold-banner">
                            <a>Sold</a>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg2.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>NEW WORLD TOWERS</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg3.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>MARY LANE</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg4.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>SPIRE</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg5.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>IVY</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg6.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>NERO</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg7.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>FV</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg8.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>CORNERSTONE LIVING</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/project/projectImg9.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>Illumina</h3>
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
