@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/migration/bg1.jpg') }});background-repeat: no-repeat;background-size: cover;">
        <div class="slider-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-left">
                        <div class="carousel-content">
                            <h2 style="margin-top: 350px; text-align: left">EFFICIENT AND SIMPLE <br> INTERMEDIARY SERVICES</h2>
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
                    Local knowledge with a grounded legal comprehension
                </h2>
                <br>
                <p>Established with the premise of ensuring that our client's transition to Australia both meets and exceeds their expectations for simplicity and quality, Immigration and Education offers ancillary transitional services to streamline the operations involved in moving to Australia, and finding educational institutions.</p>
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
                                <i class="fa fa-globe fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Expertise</h2>
                                <p class="section-texts">With an empasis on the uniqueness of each client's requirements for moving to Australia our migration division is driven to achieve the best outcome, tailored to your needs.</p>
                                <ul>
                                    <li>Business and Investment Visas</li>
                                    <li>Skilled and Work Visas</li>
                                    <li>Student Visas</li>
                                    <li>Family Visas</li>
                                </ul>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-puzzle-piece fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Connected</h2>
                                <p class="section-texts">Our expansive network of legal and financial bodies across Australia ensures that our client's application to migrate considers all aspects and requirements for their relocation.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-graduation-cap fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2 class="section-heading section-texts">Academics</h2>
                                <p class="section-texts">Homestates offers course counselling guidance and study support to assist our clients and families in achieving their academic and career goals.</p>
                                <p class="section-texts">Connect with course and education providers based on your requirements for academics and study, a complementary appraisal service offered to all Homestates clients.</p>
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
                    Our expertise in the field of migration & education
                </h2>
                <p style="text-align: center">
                    View our wide range of migration services.
                </p>
                <br>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            <h4 class="panel-title">Immigration services<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4> 
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Investing in property is an extension of investing in you and your family's future. Understanding this necessity for our clients, our Migration & Education services are delivered to an end-to-end model to ensure that your journey to Australia exceeds your expectations.</p>
                                <br>
                                <p>We cover a wide range of migration visa options, including:</p>
                                <ul>
                                    <li>Business and Investiment Visa</li>
                                    <li>Skilled and Work Visas</li>
                                    <li>Student Visas</li>
                                    <li>Family Visas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            <h4 class="panel-title">Education Support<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Access world-class education geared towards your future career goals and part of our commitment to full-cycle service. Connect with course and education providers based on your requirements for study, a complementary appraisal service offered to all our clients.</p>
                                <ul>
                                    <li>IELTS</li>
                                    <li>Primary, Secondary and Tertiary Education</li>
                                    <li>Vocational Education and Training</li>
                                    <li>Higher Education</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-white" style="padding-top:50px; padding-bottom: 50px; margin-top: 40px">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <div class="row">
                    @foreach( $projects as $project )
                        <a href="{{ url('projects/'.$project->id) }}">
                        <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ $project->img_url }}) no-repeat center center; background-size: cover;">
                            
                            <div class="footer-img-info" >
                                <h3>{{ $project->title }}</h3>
                            </div>
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
