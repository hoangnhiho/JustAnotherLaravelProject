@if (!empty($footerCarousels))
<section id="footer-slider">
    <div class="owl-carousel">
        @foreach( $footerCarousels as $footerCarousel)
        <div class="item" style="background-image: url({{ $footerCarousel->img_url }});">
            <div class="slider-inner">
                <div class="container-fluid" style="height:100%">
                    <div class="row" style="height:100%">
                        <div class="col-sm-offset-1 col-sm-4 col-xs-10 col-xs-offset-1" style="padding: 0px 0px; overflow:hidden; height:100%">
                            <div class="house-content" style="height:100%">
                                <div class="house-overlayer" style="height:100%"></div>
                                <div class="house-text" style="padding: 35px 10px; ">
                                    <h4 style="margin-bottom: 40px;line-height: 140%;font-size: 17px">{{ $footerCarousel->body }}</h4>
                                    <p><b>{{ $footerCarousel->name }}</b> {{ $footerCarousel->caption }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        @endforeach
    </div><!--/.owl-carousel-->
</section><!--/#main-slider-->
@endif
<br>


@if (Request::path() != 'pressroom')
<footer id="footer">
    <div class="container" id="footer-container">
        <div class="row" id="footer-row">
            <div class="col-sm-7 col-sm-12" id="footer-bar-text">
                <p class="text-right">Talk to us about your next property today <a href="{{ url('contact') }}" class="btn btn-primary" style="margin-left: 7px">GO</a></p>
            </div>
            <div class="col-sm-5 col-xs-12" id="footer-bar-icons">
                <ul class="social-icons pull-left" style="margin-left: 1px"> Follow us
                    <li><a href="https://www.facebook.com/homestates/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/homestates" target="_blank"><i class="fa fa-twitter" target="_blank"></i></a></li>
                    <li><a href="https://www.instagram.com/homestates/" target="_blank"><i class="fa fa-instagram" target="_blank"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
@else
<footer id="footer">
    <div class="container" id="footer-container">
        <div class="row" id="footer-row">
            <form action="{{ url('newsletter_signup') }}" method="post">
                {{ csrf_field() }}
                <div class="col-sm-12" id="footer-bar-text">
                    <p class="text-center">Get the latest updates from homestates   <input type="text" name="email" class="" placeholder="Email" style="margin-left: 10px; width: 200px; color:black"> <button type="submit" class="btn btn-primary" style="margin-left: 7px">Count me in</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
</footer><!--/#footer-->
@endif

@if ( strpos(Request::path(), 'listings') != '0')
<div class="container-fluid" style="padding-top:50px; padding-bottom: 50px; background-color: #E7E8EA;">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
            <div class="row">
                <a href="{{ url('pressroom') }}">
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/footer3.png') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>Press Room</h3>
                        </div>
                    </div>
                </a>
                <a href="{{ url('projects') }}">
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/house.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>Latest Projects</h3>
                        </div>
                    </div>
                </a>
                <a href="{{ url('career') }}">
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/footer2.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info" >
                            <h3>Join Homestates</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endif
<div class="container-fluid" style="background-color: #E7E8EA;">
    <div class="row">
        <div class="col-xs-offset-2 col-xs-8" style="color:black;">
            <div class="row footer-links">
                <div class="col-xs-3">
                    <a href="{{ url('/buy#expertiseSection') }}"><p style="color:black"><b>Buy</b></p></a>
                    <a href="{{ url('/buy#expertiseSection') }}"><p>Choosing Homestates</p></a>
                    <a href="{{ url('/listings') }}"><p style="color:black">Current Listings</p></a>
                </div>
                <div class="col-xs-3">
                    <a href="{{ url('/sell') }}"><p style="color:black"><b>Sell</b></p></a>
                    <a href="{{ url('/sell#sellhomeSection') }}"><p style="color:black">Our Strategy</p></a>
                    <a href="{{ url('/sell') }}"><p style="color:black">Latest Sales</p></a>
                </div>
                <div class="col-xs-3">
                    <a href="{{ url('/rent') }}"><p style="color:black"><b>Rent</b></p></a>
                    <a href="{{ url('/rent#expertiseSection') }}"><p style="color:black">Renting with Homestates</p></a>
                    <a href="{{ url('/rent') }}"><p style="color:black">Current Listings</p></a>
                </div>
                <div class="col-xs-3">
                    <a href="{{ url('/projects') }}"><p style="color:black"><b>Projects</b></p></a>
                    <a href="{{ url('/projects#expertiseSection') }}"><p style="color:black">Our Advantage</p></a>
                    <a href="{{ url('/projects') }}"><p style="color:black">Off-the-Plan Listings</p></a>
                </div>
            </div>
            <div class="row footer-links">
                <div class="col-xs-3">
                    <a href="{{ url('/migration') }}"><p style="color:black"><b>Migration & Education</b></p></a>
                    <a href="{{ url('/migration#expertiseSection') }}"><p style="color:black">Immigration Services</p></a>
                    <a href="{{ url('/migration#expertiseSection') }}"><p style="color:black">Education Support</p></a>
                </div>
                <div class="col-xs-3">
                    <a href="{{ url('/pressroom') }}"><p style="color:black"><b>Press Room</b></p></a>
                    <a href="{{ url('/press_event') }}"><p style="color:black">Events</p></a>
                    <a href="{{ url('/homestatesmagazine') }}"><p style="color:black">Homestates</p></a>
                </div>
                <div class="col-xs-3">
                    <a href="{{ url('/aboutus') }}"><p style="color:black"><b>About Us</b></p></a>
                    <a href="{{ url('/aboutus#philosophy') }}"><p style="color:black">Philosophy</p></a>
                    <a href="{{ url('/career') }}"><p style="color:black">Careers</p></a>
                    <a href="{{ url('/aboutus#management') }}"><p style="color:black">Management</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="final-footer-links" style="margin-top: 40px">
        <div class="col-sm-12 text-center">
            <a class="last-footer-links" href="{{ url('contact') }}">Contact Us</a> | 
            <a class="last-footer-links" target="_blank" href="{{ url('pdfs/terms.pdf') }}">Privacy Policy</a> | 
            <a class="last-footer-links" target="_blank" href="{{ url('pdfs/terms.pdf') }}">Terms & Conditions</a> | 
            <a class="last-footer-links" target="_blank" href="{{ url('/') }}">@ Homestates 2017</a> 
            
        </div>
    </div>


</div>
