@extends('layouts.main')
@section('title','boite-dessin3D')
@section('content')


<div class="layout">

<main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>BOITE DE DESSIN D'ARCHITECTURE 3D</h1>
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


<section class="blog-list">


<div class="container">
<article class="blog">
<div class="row">
<div class="blog-thumbnail col-md-7">
<div class="blog-thumbnail-bg col-md-7 visible-md visible-lg" style="background-image: url(img/blog/3-760x514.jpg);"></div>
<div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="{{asset('img/blog/.jpg')}}"></div>
</div>
<div class="blog-info col-md-5">

<h3 class="blog-title text-primary">
<a >Boite de dessin d'architecture 3D</a>
</h3>
<p>Notre boite d’architecture est créée pour répondre aux besoins de nos clients d’une façon professionnelle. Elle se base sur différentes disciplines qu’on les réalise de notre façon particulière. Notre équipe compétant et expérimenté travaille d’une manière continue pour réaliser l’intégration de l’ensemble des composants d’un projet, le respect des délais et la satisfaction des clients. Nous évoluons aujourd’hui en suivant une démarche d’innovation, de veille technologique et environnementale permanente, et en accompagnant chaque projet par une maîtrise des énergies et des coûts.</p>

<div class="text-right"><a href="{{route('contact')}}" class="read-more">CONTACTEZ NOUS</a></div>
</div>
</div>
</article>
</div>
</section>

@endsection