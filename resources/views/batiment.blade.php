@extends('layouts.main')
@section('css')
<style>
	@media (min-width: 1200px){
.project-details-info {
    width: 67%;
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
<h1>BUREAU D’ÉTUDE DES<br>
PROJETS DE BÂTIMENTS</h1>

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
<div class="project-details-info wow fadeInLeft">
<h3 class="project-details-title">
BUREAU D’ÉTUDE DES
PROJETS DE BÂTIMENTS
</h3>
<p class="project-details-descr">Notre<strong> bureau d’étude des projets de bâtiment</strong> intervient sur plusieurs disciplines ; bâtiments commerciaux et industriels (hôtels, restaurants, usines, laboratoires, unités de stockage, …), bâtiments d’habitation (maisons, appartements, logements sociaux, …), bâtiments fonctionnels (écoles, universités, cinémas, musées, …). Nous travaillons en donnant notre maximum pour garantir à nos clients-partenaires des prestations aux qualités irréprochables en préservant l’environnement par étude d’impact, respect de la faune et de la flore locale et la réduction de la consommation d’eau et d’énergie, et en maîtrisant les procédures d’urgence et de sécurité. Afin de répondre aux différentes exigences et problématiques, notre équipe talentueuse, professionnelle et avec une connaissance profonde dans le domaine d’ingénierie, assiste dans la maitrise d’œuvrepar diagnostic de projet et identification des contraintes en donnant des solutions afin de garantir le succès de son aboutissement dans les plus brefs délais..</p>
</div>
<div class="project-details-img col-md-8 col-md-offset-4">
<img alt="" class="img-responsive" src="{{asset('img/projects/batiment.jpg')}}">
</div>
</div>
</div>
</div>
</section>

@endsection