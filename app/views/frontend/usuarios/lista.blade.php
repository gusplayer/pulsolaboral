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

                {{ Form::open(array('url' => 'profesionales','class'=>'navbar-form navbar-left')) }} 
                    <div class="form-group">

                        <select name="profesion" class="form-control" style="max-width:180px;">
                        @foreach ($profesiones as $profesion)
                            <option value="{{$profesion->id_profesion}}">{{$profesion->nombre_profesion}}</option>
                        @endforeach    
                        </select>
                    </div>
                    <div class="form-group">
                    <select name="region" class="form-control" style="max-width: 180px;">
                    <option value="0">Todos</option>
                    @foreach ($regiones as $region)
                        <option value={{$region->id}}>{{$region->nombreregion}}</option>
                    @endforeach
                    </select>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>
                {{ Form::close() }}
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
                    <span data-toggle="tooltip" data-placement="right" title="Empleos"><img src="img/flat/bf2.png" width="33px"></span>
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
        <div class="container pad">
            @if (count($perfiles) == 0)
							<div class="alert alert-info alert-dismissible" role="alert">                          
                           <center><strong><h1>Lo sentimos,</h1></strong> <p>No hay perfiles que coincidan con tu busqueda. Realiza tu busqueda con otros parametros, tal vez no hay usuarios registrados en la ubicación o categoria que seleccionaste. Recuerda que puedes crear tu perfil profesional <a href="registro">Registrate Gratis!</a></p></center>
                           </div>
			@endif

            <div class="row">
            @foreach ($perfiles as $perfil)
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="http://{{$perfil->username}}.pulsolaboral.com" target="_blank" class="img-user" style="background-color: #44A4BE;">
                            <span class="text">
                                Visitame
                            </span>
                            <img src="{{$perfil->foto_perfil}}">
                        </a>
                        <a href="#">
                            <span data-toggle="tooltip" data-placement="top" title="Visitas" class="icon">{{$perfil->cantidad}}</span>
                        </a>
                        <div class="caption">
                            <h2><a href="#">{{$perfil->nombre}} {{$perfil->apellido}}</a></h2>
                            <p>{{$perfil->ocupacion}}</p>
                            <span>{{$perfil->nombre_profesion}}</span><br>
                            <span>
                            <img src="frontend/images/flags/{{$perfil->pais}}.png" width="21px">
                             {{$perfil->nombrepais}}/{{$perfil->nombreregion}}/{{$perfil->ciudad}}
                            </span>
                            <span class="rep">
                                <p>{{$perfil->reputacion}}</p>
                                <ul>
                                @for($i = 0; $i < 5; $i++)
                                    @if($i < $perfil->reputacion)
                                    <li class="fa fa-star"></li>
                                    @else
                                    <li class="fa fa-star-o"></li>
                                    @endif
                                @endfor
                                </ul>
                            </span>
                        </div>
                        <div class="st-web">
                            <a href="http://{{$perfil->username}}.pulsolaboral.com" target="_blank" class="btn btn-default" role="button">SITIO WEB</a>
                        </div>
                    </div>
                </div>
             @endforeach
             </div>
            
              <!--<div class="row">
                <nav>
                    <center>
                        <ul class="pagination pagination-lg">
                            <li>
                                <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </center>
                </nav>
              </div>-->
        </div>
    </div>
    @extends('frontend/footer')