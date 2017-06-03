<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<meta property="og:image" content="http://via.placeholder.com/600x315"/>
<meta property="og:image:secure_url" content="http://via.placeholder.com/300x300" />
<link rel="apple-touch-icon" href="http://via.placeholder.com/300x300">
<link rel="image_src" href="http://via.placeholder.com/300x300"/>

    <title>Homestates</title>

    @include('layouts.css')
    <link rel="icon" type="image/png" href="{{ url('favicon.png')}}" />
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head><!--/head-->

<body id="home" class="homepage">
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.js')
    @yield('customjs')
</body>
<script>
    // $('#home').css('top', '100px');
    $('#home').css('margin-top', '100px');
    $('#home').css('top', '0px');
</script>
</html>
