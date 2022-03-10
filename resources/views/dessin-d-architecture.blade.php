@extends('layouts.main')
@section('css')
<style>
	@media (min-width: 1200px){
.project-details-info {
    width: 50%;
}
.project-details-descr {
	font-size: 1.1em;
}
}
</style>
@endsection
@section('content')
<div class="layout">

<main class="main main-inner main-project" style="background-image:url('img/bg/project.jpg');" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>LE DESSIN D’ARCHITECTURE</h1>

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
LE DESSIN D’ARCHITECTURE
</h3>
<p class="project-details-descr">Parmi les outils de travail de notre cabinet d’architecte est le dessin d’architecture qui nous aide à créer une représentation technique d’un bâtiment contenant toutes les formes de la construction et toutes ses dimensions (plans, coupes, façades, dessins de détail), il est un travail d’observation et de rigueur qui demande l’attention et la patience du notre réalisateur. Notre bureau exerce ses compétences pour vous fournir un maximum de compatibilité qui saura répondre à vos exigences en termes de dessin.</p>
</div>
<div class="project-details-img col-md-8 col-md-offset-4">
<img alt="" class="img-responsive" src="{{asset('img/projects/1-780x668.jpg')}}">
</div>
</div>
</div>
</div>
</section>

@endsection