
<script type="text/javascript">
    $('document').ready(function () {
    $('#google_translate_element').on("click", function () {

        // Change font family and color
        $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
            .css({
                'color': '#544F4B',
                'font-family': 'Raleway'
            });

        // Change hover effects
        $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
            $(this).css('background-color', '#F38256').find('span.text').css('color', 'yellow');
        }, function () {
            $(this).css('background-color', 'red').find('span.text').css('color', '#544F4B');
        });

        // Change Google's default blue border
        $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #F38256');

        // Change the iframe's box shadow
        $(".goog-te-menu-frame").css({
            '-moz-box-shadow': '0 3px 8px 2px #666666',
            '-webkit-box-shadow': '0 3px 8px 2px #666',
            'box-shadow': '0 3px 8px 2px #666'
        });
    });
});
</script>
<header id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" style="background-color: #784BA7; color:white"><img src="{{ url('images/frontpage/logo.png') }}" alt="logo" style="width:auto; height:57px; background-color: #784BA7;"></a>
            </div>
			
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll"><a href="{{ url('buy') }}">Buy</a></li>
                    <li class="scroll"><a href="{{ url('sell') }}">Sell</a></li>
                    <li class="scroll"><a href="{{ url('rent') }}">Rent</a></li>
                    <li class="scroll"><a href="{{ url('projects') }}">Projects</a></li>
                    <li class="scroll"><a href="{{ url('migration') }}">Migration & Education</a></li>

                    <li class="dropdown" id="pressDropBtn">
                        <a href="{{ url('pressroom') }}" class="dropdown-toggle" role="button" data-toggle="dropdown" data-hover="dropdown">Press Room <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('press_market') }}">Market Insights</a></li>
                            <li><a href="{{ url('homestatesmagazine') }}">Magazine</a></li>
                            <li><a href="{{ url('press_news') }}">News</a></li>
                            <li><a href="{{ url('press_research') }}">Research & Development</a></li>
                            <li><a href="{{ url('press_video') }}">Videos</a></li>
                            <li><a href="{{ url('press_event') }}">Events</a></li>
                            <li><a href="{{ url('press_promo') }}">Promotions</a></li>
                        </ul>
                    </li>

                    <li class="dropdown" id="aboutDropBtn">
                        <a href="{{ url('aboutus') }}" class="dropdown-toggle" role="button" data-toggle="dropdown" data-hover="dropdown">About<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('aboutus') }}">About us</a></li>
                            <li><a href="{{ url('career') }}">Careers</a></li>
                        </ul>
                    </li>

                    <!-- <li class="scroll"><a href="{{ url('login') }}">Login</a></li>  -->
                    <li class="scroll translate_test" id="google_translate_element"><!-- <span class="caret"></span> --></li> 

                </ul>
            </div>
        </div><!--/.container-->
   
    </nav><!--/nav-->

</header><!--/header-->

<!-- <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'nl', includedLanguages: 'zh-CN,zh-TW,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'nl', includedLanguages: 'zh-CN,zh-TW,en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<style type="text/css">

.goog-logo-link, .goog-logo-link:link, .goog-logo-link:visited, .goog-logo-link:hover, .goog-logo-link:active
{
    display: none;
}
select.goog-te-combo {
    color: #784ba7;
    margin-left: 12px !important;
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    border: none;
   /* -moz-appearance: none;
     -webkit-appearance: none; */
    background: transparent;
}
.goog-te-gadget {
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    color: white;
}



/*li#google_translate_element span.caret {
    position: absolute;
    right: 0px;
    top: 50px;
    color: #794da8;
    left: 144px;
}*/
</style>
