
@if (!empty($footerCarousels))
<section id="footer-slider">
    <div class="owl-carousel">
        @foreach( $footerCarousels as $footerCarousel)
        <div class="item" style="background-image: url({{ $footerCarousel->img_url }});">
            <div class="slider-inner">
                <div class="container" style="height:100%">
                    <div class="row" style="height:100%">
                        <div class="col-sm-offset-1 col-sm-3 col-xs-10 col-xs-offset-1" style="padding: 0px 0px; overflow:hidden; height:100%">
                            <div class="house-content" style="height:100%">
                                <div class="house-overlayer" style="height:100%"></div>
                                <div class="house-text" style="padding: 35px 10px;">
                                    <h4>{{ $footerCarousel->body }}</h4>
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
<footer id="footer">
    <div class="container" id="footer-container">
        <div class="row" id="footer-row">
            <div class="col-sm-7 col-sm-12" id="footer-bar-text">
                <p class="text-right">Talk to us about your next property today <button class="btn btn-primary">GO</button></p>
            </div>
            <div class="col-sm-5 col-xs-12" id="footer-bar-icons">
                <ul class="social-icons pull-left"> Follow us
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<div class="container-fluid" style="padding-top:50px; padding-bottom: 50px; background-color: #E7E8EA;">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
            <div class="row">
                <a href="{{ url('login') }}">
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/footer2.jpg') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info" >
                            <h3>Join Homestates</h3>
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
                <a href="{{ url('press_room') }}">
                    <div class="col-xs-12 col-sm-4 footer-img-links" style="background: url({{ url('images/footer/footer3.png') }}) no-repeat center center; background-size: cover;">
                        
                        <div class="footer-img-info">
                            <h3>Press Room</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #E7E8EA;">
    <div class="row">
        <div class="col-xs-offset-2 col-xs-8" style="color:black;">
            <div class="row footer-links">
                <div class="col-xs-3">
                    <p><b>Buy</b></p>
                    <p>Choosing Homestates</p>
                    <p>Current Listings</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Sell</b></p>
                    <p>Our Strategy</p>
                    <p>Research</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Rent</b></p>
                    <p>Renting with Homestates</p>
                    <p>Current Listings</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Projects</b></p>
                    <p>Our Advantage</p>
                    <p>Off-the-Plan Listings</p>
                </div>
            </div>
            <div class="row footer-links">
                <div class="col-xs-3">
                    <p><b>Migration & Education</b></p>
                    <p>Immigration Services</p>
                    <p>Education Support</p>
                </div>
                <div class="col-xs-3">
                    <p><b>Press Room</b></p>
                    <p>Media Release</p>
                    <p>Homestates</p>
                </div>
                <div class="col-xs-3">
                    <p><b>About Us</b></p>
                    <p>Pilosophy</p>
                    <p>Careers</p>
                    <p>FAQ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 40px">
        <div class="col-sm-12 text-center">
            <p><a target="_blank" href="http://homestates.com.au/">Contact Us</a> | 
            <a target="_blank" href="http://homestates.com.au/">Privacy Policy</a> | 
            <a target="_blank" href="http://homestates.com.au/">Terms & Conditions</a> | 
            <a target="_blank" href="http://homestates.com.au/">@ Homestates 2017</a> 
            </p>
        </div>
    </div>


</div>
