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
            <div class="col-md-offset-1 col-sm-10">
                <h2 style="text-align: center">
                    Resedential real estate sales and property marketing services
                    <br>
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div id="centering">
                    <button class="btn btn-default" id="button-color">
                        <h3>
                            <font color="white">
                                Current Listings
                            </font>  
                        </h3>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div>
        <br>
    </div>

    <!-- This is for 3 column part. Enter image here -->
    <div class="container-fluid container-white">
        <div class="row">
            <div class="col-md-offset-1 col-sm-5">
                <h2>
                    Marketing
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <h2>
                    Research
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <h2>
                    Service
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                 
            </div>
            <div class="col-md-offset-1 col-sm-4">
                <h2>
                    Talk to a Homestates Agent
                </h2>
                <p>
                    We're here to help seven days a week.
                    <br>
                    <br>
                    What type of home are you looking for?
                </p>

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle form-control" type="button" data-toggle="dropdown">
                        <span class="caret" style="color: white"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelled-by="dropdownmenu">
                        <li><a href="#">Apartment</a></li>
                        <li><a href="#">House</a></li>
                        <li><a href="#">Castle</a></li>
                    </ul>
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
                            <input type="submit" class="btn btn-default" id="submit" style="color: white" value="Submit">
                            </input>
                            
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <div>
        <br>
        <br>
    </div>

    <!-- This is before the final image area -->
    <div class="container container-white">
        <div class="row">
            <div class="col-md-offset-1 col-sm-10">
                <h2 style="text-align: center;">
                    Our expertise in the field of property sales
                </h2>
                <p style="text-align: center">
                    View our wide range of property sales services
                </p>
                <br>
                <div>
                    <h3>
                        Off-the-Plan
                    </h3>
                    <p>
                        Off-the-Plan peoperties refer to the purchase of a property prior to its construction. The method of approach is favourable for early adopters as purchases may experience favourable growth in the property market in the form of capital gains.
                    </p>
                    <h3>
                        Established Properties
                    </h3>
                    <p>
                        Off-the-Plan peoperties refer to the purchase of a property prior to its construction. The method of approach is favourable for early adopters as purchases may experience favourable growth in the property market in the form of capital gains.
                    </p>
                    <h3>
                        Commercial & Business
                    </h3>
                    <p>
                        Off-the-Plan peoperties refer to the purchase of a property prior to its construction. The method of approach is favourable for early adopters as purchases may experience favourable growth in the property market in the form of capital gains.
                    </p>
                    <ul>
                        <li>Leisure (Hotels, restaurants)</li>
                        <li>Rental(Shopping malls, rental stores)</li>
                        <li>Land(Future developments, islands, farms)</li>
                    </ul>
                    <h3>
                        Buyers Agents Services
                    </h3>
                    <p>
                        Off-the-Plan peoperties refer to the purchase of a property prior to its construction. The method of approach is favourable for early adopters as purchases may experience favourable growth in the property market in the form of capital gains.
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('customjs')
    <script>

    </script>
@endsection
