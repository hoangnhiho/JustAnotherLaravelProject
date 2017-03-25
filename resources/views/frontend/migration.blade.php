@extends('layouts.frontendApp')
@section('content')
<link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url({{ url('images/migration/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>EFFICIENT AND SIMPLE</h2>
                                    <h2>INTERMEDIARY SERVICES</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url({{ url('images/migration/bg1.jpg') }});">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>EFFICIENT AND SIMPLE</h2>
                                    <h2>INTERMEDIARY SERVICES</h2>
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
                    Local knowledge with a grounded legal comprehension
                    <br>
                </h2>
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
                                <h2>Expertise</h2>
                                <p>with an empasis on the uniqueness of each client's requirements for moving to Australia our migration division is driven to achieve the best outcome, tailored to your needs.</p>
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
                                <h2>Connected</h2>
                                <p>Our expansive network of legal and financial bodies across Australia ensures that our client's application to migrate considers all aspects and requirements for their relocation.</p>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-2">
                                <i class="fa fa-graduation-cap fa-3x icon-icon" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-9">
                                <h2>Academics</h2>
                                <p>Homestates offers course counselling guidance and study support to assist our clients and families in achieving their academic and career goals.</p>
                                <p>Connect with course and education providers based on your requirements for academics and study, a complementary appraisal service offered to all Homestates clients.</p>
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
                                <p>Investing in property is an extension of investing in you and your family's future. Understanding this necessity for our clients, our Migration & Education services are delivered with an end-to-end model to ensure that your journey to Australia exceeds your expectations</p>
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
                                <h3>Education Support</h3>
                                <p>Access world-class education geared towards your future career goals and part of our commitment to full-cycle service. Connect with ourse and education providers based on your requirements for study, a complementary appraisal service offered to all our clients.</p>
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
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/footer2.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info" >
                            <h3>REVERS EDGE</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/house.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>NEW WORLD TOWERS</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/footer3.png') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>MARY LANE</h3>
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