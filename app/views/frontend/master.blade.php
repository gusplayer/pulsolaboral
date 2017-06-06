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
                    <a href="https://www.facebook.com/pulsolaboral" target="_blank">
                    <img src="img/social/facebook.png" width="31px" style="margin-top: 5px;"></a>
            
					@endif
				</div>
            </div>
        </div>
    </nav>

     <div id="page-content-wrapper">

          <div id="wrapper" class="hidden-xs">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li><a href="inicio">
                    <span data-toggle="tooltip" data-placement="right" title="Inicio"><img src="img/flat/eye.png" width="33px"></span>
                    </a></li>
                   <li><a href="profesionales">
                    <span data-toggle="tooltip" data-placement="right" title="Profesionales"><img src="img/flat/profle.png" width="33px"></span>
                    </a></li>
                    <li><a href="empresas">
                    <span data-toggle="tooltip" data-placement="right" title="Empresas"><img src="img/flat/stack.png" width="33px"></span>
                    </a></li>
                    <li><a href="empleos">
                    <span data-toggle="tooltip" data-placement="right" title="Proyectos"><img src="img/flat/bf2.png" width="33px"></span>
                    </a></li>
                </ul>
            </div>
        </div>

        <div id="wrap-xs" class="visible-xs">
            <ul>
                <li><a href="inicio" ><img src="img/flat/eye.png" width="34px"></a></li>
                <li><a href="profesionales"><img src="img/flat/profle.png" width="34px"></a></li>
                <li><a href="empleos"><img src="img/flat/stack.png" width="34px"></span></a></li>
                <li><a href="empresas"><img src="img/flat/bf2.png" width="34px"></a></li>
            </ul>
        </div>

	@yield('contenido')


