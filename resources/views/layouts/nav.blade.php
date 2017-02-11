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
                    <li class="scroll"><a href="#">Rent</a></li>
                    <li class="scroll"><a href="#">Projects</a></li>
                    <li class="scroll"><a href="#">Migration & Education</a></li>
                    <li class="scroll"><a href="#">Press Room</a></li>
                    <li class="scroll"><a href="{{ url('aboutus') }}">About Us</a></li>
                    <li class="scroll"><a href="{{ url('login') }}">Login</a></li> 
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->