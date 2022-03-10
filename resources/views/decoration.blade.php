
@extends('layouts.main')
@section('css')
<style>
	@media (min-width: 1200px){
.project-details-info {
    width: 75%;
}
.project-details-descr {
	font-size: 15px;
}
}
</style>
@endsection
@section('content')

<div class="layout">

<main class="main main-inner main-project" style="background-image:url('img/bg/project.jpg');" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>DÉCORATION ET CONSEIL</h1>

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
<section class="project-details">
<div class="container">

<div class="project-details-item">
<div class="row">
</div>
</div>
<div class="project-details-item">
<div class="row">
<div class="project-details-info wow  fadeInRight">

<h3 class="project-details-title">
DÉCORATION ET CONSEIL
</h3>
<p class="project-details-descr">Notre décorateur conseille le client sur le choix en matière de décoration (matériaux, formes, motifs, couleurs, styles, etc.…) selon son goût et son mode de vie, ce qui permet d’obtenir une décoration personnalisée qui transforme l’espace de vie de notre client en un lieu qui lui ressemble. Nous sommes toujours au courant des dernières tendances dans le but d’harmoniser l’éclairage, les couleurs et les matières. Nous accompagnons nos clients pendant le déroulement de leurs projets, en créant une ambiance originale, en donnant des prestations sur mesure selon les besoins en décoration et en essayant à concevoir des aménagements et à réaliser l’agencement du mobilier. Notre cabinet d’architecte suit plusieurs étapes pour satisfaire les désirs et les besoins de nos clients ; une visite de conseil, la création d’un cahier des charges, la conception des plans avec une vue de dessus, la mise en situation 3D du futur intérieur, une liste de ce qu’il faut acheter pour la décoration, une estimation du coût de projet et l’accompagnement pendant le déroulement des travaux. N’hésitez pas !notre équipe est professionnel dans l’optimisation d’espace, la rénovation et la création d’un style de décoration bien convenable.</p>
</div>
<div class="project-details-img col-md-8">
<img alt="" class="img-responsive" src="{{asset('img/projects/decoration.jpg')}}">
</div>
</div>
</div>
</section>
@endsection