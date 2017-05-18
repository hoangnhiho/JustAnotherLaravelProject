@extends('layouts.frontendApp')
@section('content')
    <link href="{{ url('css/buy.css') }}" rel="stylesheet">
    <section id="main-slider" style="height:500px; background-image: url({{ url('images/sell/sellSlider1.jpg') }});background-repeat: no-repeat;background-size: cover;">
        <div class="slider-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pull-left">
                        <div class="carousel-content">
                            <h2 style="margin-top: 480px; text-align: left">START THE CONVERSATION ABOUT YOUR HOME TODAY</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#main-slider-->
    <br>
    <div class="container container-white wow fadeInDown" id="sellhomeSection" style="margin-top: 0">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10" style="background-color: white; padding:40px 40px;">
                <h1>Choosing Homestates to sell your home</h1>
                <br>
                <p>Unlike other agencies, our commitment to service revolutionises the selling process when it comes to delivering the highest price for your home. We have an established sales process to achieve premium results, and that's why we're accountable to providing you the price we recommend.</p>
                <p>Our method is employed by vetted real estate professionals: Market-proven strategies which form part of our full-cycle commitment to service.</p>
                <p>Start the conversation with us about your home today.</p>
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid wow fadeInDown" style="background-color: white; padding:40px 40px;">
        <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 text-center">
                <h1>Talk to a local Homestates agent</h1>
                <p>Request a complementary listing consultation for your home</p>
                <div class="row">

                    <div class="col-xs-offset-1 col-xs-10">
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

    <section id="" style="margin-top: 40px;">
        <div class="container-fluid wow fadeInDown">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8 col-xs-12 text-center" style="">
                    <h1 class="section-heading">Latest sales</h1>
                    <p>A selection of our most recent sales</p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-5 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-left" style="">
                    <img class="img-responsive" src="https://i3.au.reastatic.net/1530x841/6cc0e076b3c5a34b53669842ebfc77975c24fabc7f48902a1e94210527d5d636/image3.jpg" alt=""/>
                    <div class="overlayer-info">
                        <h3>Newstead QLD</h3>
                        <p>2 BED 2 BATH 1 CAR</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-12 listing-preview listing-preview-top" id="listing-preview-top-right" style="">
                    <img class="img-responsive" src="https://i2.au.reastatic.net/1530x841/19fc163bfdf0ee81248fe5b6d86e6c96cff886b85b56588f37bd5c557eabb3f9/image2.jpg" alt="" />
                    <div class="overlayer-info">
                        <h3>Cannon Hill QLD</h3>
                        <p>2 BED 2 BATH 1 CAR</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8 col-xs-12 listing-preview" style="max-height: 300px;height: 250px; overflow: hidden;">
                    <img class="img-responsive" src="{{ url('images/frontpage/thirdhouse1.jpg') }}" alt=""/>
                    <div class="overlayer-info" id="bigger-overlayer-info">
                        <h3 style="border-bottom: 2px solid #fff;">Nero</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

@endsection
@section('customjs')
    <script>
        // listing-preview
        $( ".listing-preview" ).hover(
            function() {
                $( this ).find(".overlayer-info").fadeIn( "slow" );
            }, function() {
                $( this ).find(".overlayer-info").fadeOut( "slow" );
            }
        );
    </script>
@endsection
