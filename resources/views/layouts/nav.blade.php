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
                        <a href="{{ url('press_news') }}" class="dropdown-toggle" role="button" data-toggle="dropdown" data-hover="dropdown">Press Room <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('press_market') }}">Market Insights</a></li>
                            <li><a href="{{ url('homestatesmagazine') }}">Magazine</a></li>
                            <li><a href="{{ url('press_news') }}">News</a></li>
                            <li><a href="{{ url('press_research') }}">Research & Development</a></li>
                            <li><a href="{{ url('press_video') }}">Vidoes</a></li>
                            <li><a href="{{ url('press_event') }}">Events</a></li>
                            <li><a href="{{ url('press_promo') }}">Promotions</a></li>
                        </ul>
                    </li>

                    <li class="dropdown" >
                        <a class="dropdown-toggle" role="button" data-toggle="dropdown" data-hover="dropdown">About<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('aboutus') }}">About us</a></li>
                            <li><a href="{{ url('career') }}">Careers</a></li>
                        </ul>
                    </li>

                    <li class="scroll"><a href="{{ url('login') }}">Login</a></li> 
                     <li class="scroll translate_test" id="google_translate_element"></li> 
                </ul>
            </div>
        </div><!--/.container-->
   
    </nav><!--/nav-->

</header><!--/header-->

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>