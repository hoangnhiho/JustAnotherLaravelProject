@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/project/bg1.jpg') }});background-repeat: no-repeat;background-size: cover;">
        <div class="slider-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-right">
                        <div class="carousel-content">
                            <h2 style="margin-top: 280px; text-align: right">UNIQUE AND EXCLUSIVE PROJECTS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#main-slider-->

    <!-- This is for the area after the slides -->
    <div class="container container-white">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <h2 style="text-align: center">
                    Off-the-plan developments and projects
                </h2>
                <br>
                <p>Property Investment allows clients to tap into Homestates' proprietary database of upcoming property development projects to secure real estate with vetted rental or capital yields. Our collaboration with blue chip real estate developers means we can provide priority access and viewings on unreleased projects, across the globe.</p>
                <br>
                <div id="centering">
                    <button class="btn btn-primary">
                        <a href="{{ url('listings') }}"><h3 style="color:white; margin-top: 10px">View the Collection</h3></a>
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
                                <h2 class="section-heading section-texts">Invest</h2>
                                <p class="section-texts">Focusing on investor returns and financial growth, projects selected by Homestates boast tangible rental yields and exceptional value in any given market.</p>
                                <p class="section-texts">Homestates offers quality products backed by reputable developers - the resulting amalgamation is a timeless recipe for strong financial performance and capital growth.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-eye fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Foresight</h2>
                                <p class="section-texts">Our strong network of developers provides clients with a platform to access locations, projects, offers and incentives exclusively to Homestates Group.</p>
                                <p class="section-texts">Receive pre-market release previews of off-the-plan projects, and gain first access to select floorplans of your choice.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-life-ring fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Exclusive</h2>
                                <p class="section-texts">Our strong network of developers provides clients with a platform to access locations, projects, offers and incentives exclusively to Homestates Group.</p>
                                <p class="section-texts">Receive pre-market release previews of off-the-plan projects, and gain first access to select floorplans of your choice.</p>
                            </div>
                        </div>
                        <br>
                    </div>

                    <!-- Horizontal Form -->
                    <div class="col-xs-12 col-md-5 line-vert-left-divider section-texts">
                        <h2 class="section-texts section-heading" style="margin-bottom: 0px;">Talk to a Homestates Agent</h2>
                        <p class="section-texts">We're here to help seven days a week.</p>
                        <p class="section-texts">
                            What type of home are you looking for?
                        </p>
                        <form action="{{ url('submit_enquiry') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="dropdown form-group" style="">
                                <select class="form-control" style="" name="type">
                                    <option value="House">House</option>
                                    <option value="Apartment/Unit">Apartment / Unit</option>
                                    <option value="Townhouse">Townhouse</option>
                                    <option value="Land">Land</option>
                                    <option value="Acreage">Acreage</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <div class="form-group">
                                    <input type="phone" name="phone" class="form-control" id="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="section-texts" > What can we help you with?</label>
                                <textarea rows="5" name="enquiry" placeholder="I’m interested in buying, selling or renting with Homestates." class="form-control"></textarea>        
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
                                <p>Investing with Homestates means you're investing ahead of the curve. Our selection of curated projects are chosen based on established principles which are timeless gems for profitability:</p>
                                <br>
                                <p style="margin-bottom: 0">Population</p>
                                <p>An increasing population naturally increases the demand for accommodation. Naturally, governing bodies and developers will collaborate to support the population growth by creating more apartments, townhouses and homes.</p>
                                <br>
                                <p style="margin-bottom: 0">Infrastructure</p>
                                <p>Convenience and quality of life is paramount to everyone, which is why it's essential for investment properties to be situated close to amenities such as schools, shopping centres and recreation hubs.</p>
                                <br>
                                <p style="margin-bottom: 0">Employment</p>
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
                            <h4 class="panel-title">Developers<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
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
                            Our previous projects
                        </h2>
                        <p style="text-align: center">
                            A selection of our most recent projects sold
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projects as $project)
                        <a href="{{ url('projects/'.$project->id) }}">
                            <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ $project->img_url  }}) no-repeat center center; background-size: cover;">
                                <div class="footer-img-info" >
                                    <h3>{{ $project->title }}</h3>
                                </div>
                                @if ($project->sold == true)
<!--                                     <div class="sold-banner">
                                        <a>Sold</a>
                                    </div> -->
                                @endif
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
@section('customjs')
    <script>

    </script>
@endsection
