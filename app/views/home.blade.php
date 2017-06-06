<!doctype html>
<html lang="es-ES">
<head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>PulsoLaboral.Com</title>
 	<meta name="author" content="FosterStudios.org ">
	<meta name="keywords" content="pulsolaboral, pulso laboral, Empleos, Profesionales, colombia, foster, studios, colombia, meta, bogota, plataforma, proyecto, ofertas de empleos, sitio web, pagina web, crear, dominio, comprar, talento, portafolio, correo, pulso, laboral, trabajo, comunidad, proyectos, web, pagina">
	<meta name="description" content="">
	<link rel="icon" type="image/ico" href="img/favicon.ico">
 	<meta name="viewport" content="width=device-width, initial-scale=1">

 	<link rel="alternate" href="http://pulsolaboral.com/" hreflang="es-co" />
	<meta name="robots" content="All">

	<link rel="stylesheet" href="frontend/css/style.min.css">

</head>

<body>
	<!--[if lt IE 8]>
	 	<p class="browsehappy">
	 	Estás usando un navegador <strong>desactualizado</strong>.
	 	Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a>
	 	Para mejorar la experiencia..
		</p>
 	<![endif]-->
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collap">
                    <span class="sr-only">PulsoLaboral</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="inicio">
                    <img src="img/logopulso.png" class="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collap">
                

            	<div class="navbar-right">
	                <ul class="nav navbar-nav">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
	                            <img src="frontend/images/flags/{{Session::get('idpais')}}.png" class="banderas"> {{Session::get('pais')}} <span class="caret"></span></a>
	                        <ul class="dropdown-menu" role="menu">

	                           <li><a href="pais/Argentina/1">Argentina</a></li>
	                            <li><a href="pais/Colombia/2">Colombia</a></li>
	                            <li><a href="pais/Ecuador/3">Ecuador</a></li>
	                            <li><a href="pais/España/4">España</a></li>
	                            <li><a href="pais/Perú/5">Perú</a></li>
	                            <li><a href="pais/Bolivia/6">Bolivia</a></li>
	                            <li><a href="pais/Uruguay/7">Uruguay</a></li>
	                            <li><a href="pais/Mexico/8">Mexico</a></li>
	                            <li><a href="pais/Venezuela/9">Venezuela</a></li>
	                            <li><a href="pais/Chile/10">Chile</a></li>
	                            <li><a href="pais/Honduras/11">Honduras</a></li>
	                        </ul>
	                    </li>
	                </ul>
	                @if (Auth::check())
	                <a href="planes" class="btn btn-primary navbar-btn">Comprar plan</a>
	                <a href="login" class="btn btn-default navbar-btn"><img src="img/flat/contact-icon.png" width="27px" > {{Session::get('name')}}</a>	                
					@else
					<a href="planes" class="btn btn-primary navbar-btn">Comprar plan</a>
					<a href="login" class="btn btn-default navbar-btn">Iniciar Sesión</a>
					@endif
				</div>
            </div>
        </div>
    </nav>

    <div id="fullpage">
		<div class="section container" id="section0">
			<video class="hidden-xs" id="video1" loop autoplay preload>
				<source src="frontend/images/home-video.webm" type="video/webm" />
			</video>
			<div class="col-sm-12">
				<h1>Crea un increíble sitio web personal</h1>
				<p class="hidden-xs">Nuestra plataforma diseñara tu sitio web profesional fácilmente y en solo minutos.<br>Un verdadero profesional merece un lugar para mostrar todo su talento.<br>

			</div>
			<div class="actions col-sm-12">
				<ul>
					<li>
						<a href="profesionales">
							<img src="img/flat/fac.png"><br><br>
							<span>Profesionales</span>
						</a>
					</li>
					<li class="hidden-xs">
						<a href="login" >
							<img src="img/flat/chart.png"><br><br>
							<span>Empresas</span>
						</a>
					</li>
					<li >
						<a href="login">
							<img src="img/flat/hand.png"><br><br>
							<span>Proyectos</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="actions col-sm-12">
			<ul><li>
						<a href="https://www.facebook.com/pulsolaboral" target="_blank">
						<img src="img/social/facebook-long.png" style="width: 50px; height:50px">						
						</a>
			</li></ul>			
			</div>
					

			<div class="col-sm-12 ad">

		    <a href="#" class="adir fa fa-angle-down" onclick="mover('abajo')"></a>

			</div>
			<a href="#" id="infoMenu" onclick="mover('abajo')">
				<h1>¿ Que es Pulsolaboral ?</h1>

			</a>
		</div>
		<div class="section" id="section1">
			<div class="col-sm-12 aup">
				<a href="#" class="udir fa fa-angle-up" onclick="mover('subir')"></a>
			</div>
			<div class="intro">
				<div class="col-sm-12">
				<h1>El lugar para un verdadero profesional</h1>
					
				
					<p class="hidden-xs">En Pulso Laboral puedes mostrar tus portafolio, experiencias, conocimientos y todo lo que te hace único,<br> Te damos las herramientas para crear un perfil único y asombroso, lo mejor de todo es gratis!</p>

						<br>

						<div class="actions col-sm-12">
				        <ul>
						<li class="hidden-xs">
						<a href="planes">
						<img src="img/flat/tie.png"><br><br>
						<span> Regístrate !</span>
						</a>
					</li>
					</ul>
					</div>
				
				</div>
				<div class="col-sm-12 ad">
					<a href="#" class="adir fa fa-angle-down" onclick="mover('abajo')"></a>
				</div>
			</div>
		</div>
		<div class="section" id="section2">
			<div class="col-sm-12 aup">
				<a href="#" class="udir fa fa-angle-up" onclick="mover('subir')"></a>
			</div>
			<div class="intro">
				<h1>Planes de pago para opciones avanzadas</h1>
				<p>Crea un sitio web completamente gratis con opciones básicas o paga un pequeña tarifa por servicios avanzados<br>Simplemente escoge el paquete que más conviene a tus necesidades. Visita nuestros planes.</p>

				<div class="actions col-sm-12">
				        <ul>
						<li class="hidden-xs">
						<a href="empresas">
						<img src="img/flat/analytics.png"><br><br>
						<span>Planes!</span>
						</a>
					</li>
					</ul>
					</div>
			</div>
			<div class="col-sm-12 ad" style="display: none;">
					<a href="#" class="adir fa fa-angle-down" onclick="mover('abajo')"></a>
				</div>
		</div>
	</div>

<script src="frontend/js/vendor.min.js"></script>
 	<script src="frontend/js/app.min.js"></script>

 	  <script>
 	function mover(a){"abajo"==a?$.fn.fullpage.moveSectionDown():$.fn.fullpage.moveSectionUp()}!function(){"use-strict";$("#fullpage").fullpage({sectionsColor:["#fff","#157f99","#00a786"],css3:!0,afterRender:function(){$("video").get(0).play(),$("nav").removeClass("navbar-default"),$(".navbar-nav > li > a").addClass("navremp"),$(".btn-primary").css({background:"none",color:"#fff"}),$(".navbar-brand").css("padding","6px 10px 10px 0px"),$(".navbar-brand > img").attr("src","frontend/images/logo-white.png")},onLeave:function(a,n,r){1==a&&"down"==r?($("nav").addClass("navbar-default"),$(".navbar-nav > li > a").removeClass("navremp"),$(".btn-primary").removeAttr("style"),$(".navbar-brand").removeAttr("style"),$(".navbar-brand > img").attr("src","img/logopulso.png")):2==a&&"up"==r&&($("nav").removeClass("navbar-default"),$(".navbar-nav > li > a").addClass("navremp"),$(".btn-primary").css({background:"none",color:"#fff"}),$(".navbar-brand").css("padding","6px 10px 10px 10px"),$(".navbar-brand > img").attr("src","frontend/images/logo-white.png"))}})}();
 	</script>

  	 	
 	<!-- Google Analytics: Cambia UA-XXXXX-X por el ID de tu sitio -->
	<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X','auto');ga('send','pageview');
 	</script>
 </body>
</html>
 	
