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
}
</style>
@endsection

@section('content')

<div class="layout">

<main class="main main-inner main-project" style="background-image:url('img/bg/project.jpg');" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>SUIVI DU CHANTIER</h1>

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
SUIVI DU CHANTIER
</h3>
<p class="project-details-descr">Une fois les études sont prêtes, on passe directement sur terrain par suivi du chantier pour vérifier l’avancement des travaux et leur conformité aux éléments du marché, sans oublier le suivi financier. C’est l’une des parties les plus importantes dans le déroulement d'un projet qui nécessite une organisation, un suivi et un contrôle du chantier rigoureux. Pour éviter les éventuels défauts et malfaçons de construction apparents et pour que les travaux se déroulent dans les meilleures conditions; notre coordinateur de chantier se chargera de veiller au bon déroulement de chaque étape du projet par un contrôle permanent, assurera le respect des délais et des plannings et vérifiera la qualité du travail et la conformité aux normes techniques et sécuritaires. Au cours de chaque réunion, un compte-rendu est rédigé pour préciser les points abordés. En fin de chantier, nos partenaires architectes se chargeront également de l’organisation des finitions et la préparation de la liste des travaux à parfaire avant leur réception définitive..</p>
</div>
<div class="project-details-img col-md-8 col-md-offset-4">
<img alt="" class="img-responsive" src="{{asset('img/projects/chantier.jpg')}}">
</div>
</div>
</div>
</div>
</section>

@endsection