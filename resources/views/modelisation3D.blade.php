@extends('layouts.main')
@section('css')
<style >
		@media (min-width: 1200px){
.project-details-info {
    width: 67%;
}
.project-details-descr {
	font-size: 15px;
}

</style>
@endsection
@section('content')

<div class="layout">

<main class="main main-inner main-project" style="background-image:url('img/bg/project.jpg');" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>LA MODÉLISATION 3D</h1>

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
LA MODÉLISATION 3D
</h3>
<p class="project-details-descr">La modélisation 3D/BIM (Building Information Model)est une maquette 3D numérique virtuelle et intelligente créée lors du processus de conception d’un bâtiment. Nous utilisons cette maquette pour vous permettre de simuler virtuellement l’édification de vos ouvrages de construction et pour vous fournir d’informations qui aident à optimiser le coût, le planning, la qualité et la construction. Cette technologie nous permet encore de vous aider à créer une image simplifiée de votre bâtiment à partir d’une modélisation 3D. L’ensemble des résultats de chaque étape du processus de construction (dimensionnements, matériaux, chauffage et climatisation, calculs énergétiques, maintenance, …) sont réunies sur cette maquette numérique. Elle est non seulement en train de modifier profondément notre façon de concevoir les bâtiments, mais également notre façon de les construire et de les utiliser. Notre expertise, notre créativité et notre savoir-faire sont au service des entreprises qui souhaitent prendre le virage de la révolution 3D dans les meilleures conditions.</p>
</div>
<div class="project-details-img col-md-8">
<img alt="" class="img-responsive" src="{{asset('img/projects/3-780x668.jpg')}}">
</div>
</div>
</div>

</section>
@endsection