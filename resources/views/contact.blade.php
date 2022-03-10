@extends('layouts.main')
@section('content')
@section('css')
<style>
	.success_message {
    background-color: #c5a47e;
    color: #fff;
    padding: 1.1em 2.2em 1.05em;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 0.15em;
    margin-bottom: 30px;
}
</style>
@endsection
<div class="layout">

<main class="main main-inner main-contacts bg-contacts" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>Contact</h1>
</header>
</div>

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
</main>
<div class="content">

<section class="contact-details">

<div class="col-map col-md-7">
<div id="map" class="gmap col-md-7"></div>
</div>
<div class="contact-info col-md-5 col-md-offset-7">
<div class="contact-info-content">
<div class="contact-info-title">Contacts</div>
<div class="phone contact-row">
<i class="fa fa-phone"></i>
<div class="contact-body">
<h4>TÉLÉPHONE</h4>
<div class="phone-row">+216 23 123 143</div>
</div>
</div>

<div class="contact-row">
<i class="fa fa-envelope"></i>
<div class="contact-body">
<h4>EMAIL</h4>
<div class="contact-content">info@archimomi.com</div>
</div>
</div>
<div class="contact-row">
<i class="fa fa-map-marker"></i>
<div class="contact-body">
<h4>Address</h4>
<div class="contact-content">Rue Chedly Khaznadar 8090 Kélibia Tunisie
(à coté de la municipalité de Kélibia)</div>
</div>
</div>
</div>
</div>
</section>



<section class="contacts section">
<div class="container">
<header class="section-header">
<h2 class="section-title">CONTACTEZ- <span class="text-primary">NOUS</span></h2>

</header>
<div class="section-content">
<div class="row-base row">
<div class="col-address col-base col-md-4">
+216 23 123 143<br>
info@archimomi.com<br>
Rue Chedly Khaznadar 8090 Kélibia Tunisie
(à coté de la municipalité de Kélibia)
</div>


<div class="col-base  col-md-8">
	 @include('layouts.notification') 
    <form action="{{route('contact.SendMailcontact')}}" method="post">
	{!! csrf_field() !!}

    <div class="row-field row">
    <div class="col-field col-sm-6 col-md-4">
    <div class="form-group">
       <input type="text" class="form-control" name="name" id="name" placeholder="Nom" required >
    </div>

    <div class="form-group">
       <input type="email" class="form-control" name="email" id="email" required placeholder="Email *" >
    </div>
    </div>

    <div class="col-field col-sm-6 col-md-4">
    <div class="form-group">
        <input type="tel" class="form-control" name="tel" id="tel" placeholder="Téléphone" required>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville" required>
    </div>
    </div>

    <div class="col-field col-sm-12 col-md-4">
    <div class="form-group">
        <textarea class="form-control" name="comments" id="comments" placeholder="Message" required></textarea>
    </div>
    </div>

    <div class="col-field col-sm-12 col-md-12">
    <div class="form-group">
        @if(env('GOOGLE_RECAPTCHA_KEY'))
            <div class="g-recaptcha"
                data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
            </div>
            @if($errors->has('g-recaptcha-response'))
                 <label style="color: #c5a47e;" class="error">{{ $errors->first('g-recaptcha-response') }}</label>
            @endif
        @endif  
    </div>
    </div>
    </div>

    <div class="text-right"><button type="submit" id="submit" name="submit" class="btn btn-shadow-2 wow swing">Envoyez<i class="icon-next"></i></button></div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </section>

    @endsection
    @section('js')
   <script src='https://www.google.com/recaptcha/api.js'></script>
    @endsection 