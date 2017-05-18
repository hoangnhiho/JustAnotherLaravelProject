@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/rent/Rent.jpg') }});background-repeat: no-repeat;background-size: cover;">
        <div class="slider-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-right">
                        <div class="carousel-content">
                            <h2 style="margin-top: 250px; text-align: right">EXPERIENCED AND EFFECTIVE PROPERTY MANAGEMENT</h2>
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
                    Residential rental management and appraisal services
                </h2>
                <br>
                <p>Property Management is a core node of rental support offered by Homestates to ensure your property remains occupied with quality tenants. Backed by extensive local knowledge of the shifting property market, our management services remain competitive and comprehensive, for your peace of mind.</p>
                <br>
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
                                <i class="fa fa-suitcase fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Experience</h2>
                                <p class="section-texts">Our core focus in property management is to qualify the right tenant with the right home.</p>
                                <p class="section-texts">With a focus for long term growth, Homestates property managers prioritise high tenant retention rates with a reduction in vacancy cycles, ensuring that your investment property experiences exceptional financial growth.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-usd fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Pricing</h2>
                                <p class="section-texts">As an extension of our commitment to long-term relationships with clients, our fees for property management are competitively priced below the market average.</p>
                                <p class="section-texts">This gesture ensures maximum financial value for your investment properties, enabling you to develop and expand your portfolio for stronger growth.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-clock-o fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Efficient</h2>
                                <p class="section-texts">One of our key driving successors in assisting our clients realise their their property goals stems from our vetted agents who have a firm finger on the pulse of the local property market. Having a strong team of experienced property management agents, we are confident that our methods will deliver promising returns on your investment property.</p>
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
                                    <p>Homestates curates a wide selection of businesses to accommodate for our high-end clientele's requirements for commercial real estate, namely:</p>
                                    <ul>
                                        <li>Leisure (Hotels, restaurants)</li>
                                        <li>Rental (Shopping malls, rental stores)</li>
                                        <li>Land (Future developments, islands, farms)</li>
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
