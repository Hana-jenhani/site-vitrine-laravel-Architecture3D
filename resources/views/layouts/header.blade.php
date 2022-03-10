<header id="top" class="header-home">
<div class="brand-panel">
<img src="img/logo.png">
<div class="brand-name">ArchiMomi</div>
<div class="slide-number">
<span class="current-number text-primary">0<span class="count">1</span></span>
<sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
</div>
</div>
<div class="header-phone">+216 23 123 13</div>
<div class="vertical-panel"></div>

</a>
<div class="brand-name"></div>
<div class="vertical-panel-content">
<div class="vertical-panel-info">
<div class="vertical-panel-title">Architecture buro</div>
<div class="line"></div>
</div>
<ul class="social-list">
<li><a href="#" class="fa fa-instagram"></a></li>
<li><a href="#" class="fa fa-twitter"></a></li>
<li><a href="#" class="fa fa-behance"></a></li>
<li><a href="#" class="fa fa-facebook"></a></li>
</ul>
</div>




<nav class="navbar-desctop visible-md visible-lg animated slideInDown affix">
<div class="container">
<a href="#top" class="brand js-target-scroll">
<img src="img/logo.png" height="60">
</a>
<ul class="navbar-desctop-menu">
<li class="<?= (Route::current()->getName() == 'index') ? 'active' : '' ?>">
<a href="{{route('index')}}">ACCEUIL</a>

</li>
<li class="<?= (Route::current()->getName() == 'boite-dessin3D') ? 'active' : '' ?>">
	
<a href="{{route('boite-dessin3D')}}">BOITE DE DESSIN 3D</a>
</li>

<li>
<a href="#">NOS SERVICES</a>
<ul>
<li class="<?= (Route::current()->getName() == 'dessin-d-architecture') ? 'active' : '' ?>"><a href="{{route('dessin-d-architecture')}}">LE DESSIN D'ARCHITECTURE</a></li>
<li class="<?= (Route::current()->getName() == 'modelisation3D') ? 'active' : '' ?>">
<a href="{{route('modelisation3D')}}">LA MODÉLISATION 3D</a>
</li>
<li class="<?= (Route::current()->getName() == 'chantier') ? 'active' : '' ?>">
<a href="{{route('chantier')}}">SUIVI DU CHANTIER</a>
</li>
<li class="<?= (Route::current()->getName() == 'decoration') ? 'active' : '' ?>">
<a href="{{route('decoration')}}">DÉCORATION ET CONSEIL</a>
</li>
<li class="<?= (Route::current()->getName() == 'batiment') ? 'active' : '' ?>">
<a href="{{route('batiment')}}">BUREAU D'ÉTUDE DES PROJET DE BÂTIMENTS</a>
</li>
</ul>
</li>
<li class="<?= (Route::current()->getName() == 'contact') ? 'active' : '' ?>">
<a href="{{route('contact')}}">Contact</a>
</li>
 </ul>
</div>
</nav>


<nav class="navbar-mobile">
<a href="#top" class="brand js-target-scroll">
<img src="img/Logo-2-2.png">
</a>
<div class="brand-name">ArchiMomi</div>

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse" id="navbar-mobile">
<ul class="navbar-nav-mobile">
<li class="active">
<a href="#">Home <i class="fa fa-angle-down"></i></a>
<ul>
<li><a href="http://paul-themes.com/html/go-arch/demo/light/index.html">Home - Light</a></li>
<li class="active">
<a href="index-2.html">— Home - Dark</a>
</li>
</ul>
</li>
<li>
<a href="about.html">About us</a>
</li>

<li>
<a href="#">Projects <i class="fa fa-angle-down"></i></a>
<ul>
<li><a href="projects.html">Projects - List</a></li>
<li>
<a href="project.html">Project - details</a>
</li>
</ul>
</li>
<li>
<a href="#">Blog <i class="fa fa-angle-down"></i></a>
<ul>
<li><a href="blog.html">Blog - List</a></li>
<li>
<a href="blog-details.html">Blog - Post</a>
</li>
</ul>
</li>
<li>
<a href="/contact">Contacts</a>
</li>
</ul>
</div>
</nav>