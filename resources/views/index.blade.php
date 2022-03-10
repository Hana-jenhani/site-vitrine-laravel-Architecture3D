@extends('layouts.main')

@section('content')




<div class="layout">

<main class="main">
<div class="arrow-left"></div>
<div class="arrow-right"></div>

<div class="rev_slider_wrapper">
<div id="rev_slider" class="rev_slider fullscreenbanner">
<ul>

<li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

<img src="{{asset('img/slider/slide1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

<div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']" data-lineheight="['80','75', '65']" data-width="['1100','700','450']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">ARCHI MOMI
</div>

<div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none">Notre boite de design 3D est créée pour répondre aux<br>
besoins de nos clients d’une façon professionnelle.<br>Elle se base sur différentes disciplines <br>qu’on les réalise de notre façon particulière...
</div>

<div class="tp-caption" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on"><a href="{{route('boite-dessin3D')}}" class="btn js-target-scroll">Lire la suite <i class="icon-next"></i></a>
</div>
</li>

<li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

<img src="{{asset('img/slider/slide2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

<div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-55']" data-fontsize="['50','45', '35']" data-lineheight="['80','75','65']" data-width="['1100','700','500']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">LE DESSIN 3D
</div>

<div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none">
Parmi les outils de travaile notre cabinet d’architecte<br> est le dessin d’architecture qui nous aide<br> à créer une représentation technique d’un bâtiment<br> contenant toutes les formes de la construction<br> et toutes ses dimensions
</div>

<div class="tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['195','210']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="{{route('dessin-d-architecture')}}" class="btn js-target-scroll">LIRE LA SUITE <i class="icon-next"></i></a>
</div>
</li>

<li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

<img src="{{asset('img/slider/slide3.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

<div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']" data-lineheight="['80','75', '65']" data-width="['1000','700','450']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">LA MODELISATION 3D
</div>

<div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0']" data-y="['middle','middle','middle','middle']" data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none">Nous utilisons cette maquette pour vous permettre<br> de simuler virtuellement<br> l’édification de vos ouvrages de construction<br> et pour vous fournir d’informations qui aident à optimiser le coût,<br> le planning, la qualité et la construction.<br>
 </div>

<div class="tp-caption tp-resizeme" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href={{route('modelisation3D')}} class="btn js-target-scroll">LIRE LA SUITE <i class="icon-next"></i></a>
</div>
</li>
</ul>
</div>
</div>
</main>
<div class="content">

<section id="about" class="about section">
<div class="container">
<header class="section-header">
<h2 class="section-title">ARCHI <span class="text-primary">MOMI</span></h2>
<strong class="fade-title-left">About</strong>
</header>
<div class="section-content">
<div class="row-base row">
<div class="col-base col-about-spec col-sm-6 col-md-4">
<h3 class="col-about-title">Archi Momi:<span class="text-primary"></span></h3>
<p>Notre boite de Design 3D est créée pour répondre aux besoins de nos clients d’une façon professionnelle.
Elle se base sur différentes disciplines qu’on les réalise de notre façon particulière... </p>
<a href="{{route('boite-dessin3D')}}">Voir Plus </a>
</div>
<div class="clearfix visible-sm"></div>
<div class="col-base col-about-img col-sm-6 col-md-4">
<img alt="" class="img-responsive" src="{{asset('img/380x370.jpg')}}">
</div>
<div class="col-base col-about-spec col-sm-6 col-md-4">
<h3 class="col-about-title">Equipe:<span class="text-primary"></span></h3>
<p>Notre équipe compétant et expérimenté travaille d’une manière continue pour réaliser l’intégration de l’ensemble des composants d’un projet, le respect des délais et la satisfaction des clients... </p>
<a href="{{route('boite-dessin3D')}}">Voir Plus </a>
</div>
</div>
</div>
</div>
</section>

<section class="projects section">
<div class="container">
<h2 class="section-title">NOS <span class="text-primary">SERVIVES</span></h2>
</div>
<div class="section-content">
<div class="projects-carousel js-projects-carousel js-projects-gallery">
<div class="project project-light">
<a href="{{asset('img/projects/1-480x880.jpg')}}" title="BOITE DE DESIGN 3D">
<figure>
<img alt="" src="{{asset('img/projects/1-480x880.jpg')}}">
<figcaption>
<h3 class="project-title">
BOITE DE DESIGN 3D
</h3>
<h4 class="project-category">
ARCHIMOMI
</h4>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project project-light">
<a href="{{asset('img/projects/2-480x880.jpg')}}" title="LE DESSIN D'ARCHITECTURE">
<figure>
<img alt="" src="{{asset('img/projects/2-480x880.jpg')}}">
<figcaption>
<h3 class="project-title">
LE DESSIN<br> D'ARCHITECTURE
</h3>
<h4 class="project-category">
ARCHIMOMI
</h4>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="{{asset('img/projects/3-480x880.jpg')}}" title="LA MODELISATION 3D">
<figure>
<img alt="" src="{{asset('img/projects/3-480x880.jpg')}}">
<figcaption>
<h3 class="project-title">
LA MODELISATION 3D
</h3>
<h4 class="project-category">
ARCHIMOMI
</h4>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="{{asset('img/projects/4-480x880.jpg')}}" title="SUIVI DU CHANTIER">
<figure>
<img alt="" src="{{asset('img/projects/4-480x880.jpg')}}">
<figcaption>
<h3 class="project-title">
SUIVI DU CHANTIER
</h3>
<h4 class="project-category">
ARCHIMOMI
</h4>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="{{asset('img/projects/5-480x880.jpg')}}" title="DECORATION ET CONSEIL">
<figure>
<img alt="" src="{{asset('img/projects/5-480x880.jpg')}}">
<figcaption>
<h3 class="project-title">
DECORATION ET CONSEIL
</h3>
<h4 class="project-category">
ARCHIMOMI
</h4>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
<div class="project">
<a href="{{asset('img/projects/6-480x880.jpg')}}" title="BUREAU D’ÉTUDE DES
PROJETS DE BÂTIMENTS ">
<figure>
<img alt="" src="{{asset('img/projects/6-480x880.jpg')}}">
<figcaption>
<h3 class="project-title">
BUREAU D’ÉTUDE DES
PROJETS DE BÂTIMENTS
</h3>
<h4 class="project-category">
ARCHIMOMI
</h4>
<div class="project-zoom"></div>
</figcaption>
</figure>
</a>
</div>
</div>
</div>
</section>

<section class="experience section">
<div class="container">
<div class="text-parallax" data-stellar-background-ratio="0.85" style="background-image: url('img/bg/text-1.jpg');">
<div class="text-parallax-content"> 3D</div>
</div>
<h6 class="experience-info wow fadeInRight center-block" style="visibility: visible; animation-name: fadeInRight;"><span class="text-primary">La modélisation 3D/BIM</span><br>(Building Information Model) est une maquette 3D numérique virtuelle etintelligente créée lors du processus de conception d’un bâtiment. </h6>
</div>
</section>
@endsection