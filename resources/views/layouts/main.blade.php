<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>



<link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">
<link rel="mask-icon" href="{{asset('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
<link rel="shortcut icon" href="{{asset('favicon/favicon.ico')}}">
<meta name="msapplication-TileColor" content="#000000">
<meta name="msapplication-config" content="favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">



<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet" media="screen">
@yield('css')
</head>
<body>

<div class="loader">
<div class="page-lines">
<div class="container">
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
<div class="line"></div>
</div>
</div>
</div>
<div class="loader-brand">
<div class="sk-folding-cube">
<div class="sk-cube1 sk-cube"></div>
<div class="sk-cube2 sk-cube"></div>
<div class="sk-cube4 sk-cube"></div>
<div class="sk-cube3 sk-cube"></div>
</div>
</div>
</div>


@include ('layouts.header')
@yield('content')
@include('layouts.footer')




<div class="page-lines">
<div class="container">
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
<div class="line"></div>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="../../../../cdn-cgi/scripts/af2821b0/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/smoothscroll.js')}}"></script>
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('js/wow.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCEprRgdAfS753As69Wak04p2fvCzKbXQU"></script>
<script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/interface.js')}}"></script>
<script src="{{ asset('js/gmap.js')}}"></script>
<script src="{{ asset('js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('js/rev-slider/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('js/interface.js')}}"></script>
@yield('js')
</body>
</html>