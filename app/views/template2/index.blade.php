<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js no-touch" lang="en"> <!--<![endif]-->
<head>

  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  
  
  @foreach($usuarios as $usuario)
  <title>{{$usuario->nombre}} {{$usuario->apellido}}</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="template2/stylesheets/foundation.css">
  <link rel="stylesheet" href="template2/stylesheets/app.css">
  <link rel="stylesheet" href="template2/stylesheets/font-awesome.min.css">
  <link rel="stylesheet" href="template2/stylesheets/tooltipster.css">
  <link rel="stylesheet" href="template2/stylesheets/style.css">

  <script src="javascripts/modernizr.foundation.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="img/favicon.ico">

  @foreach ($disenos as $diseno)

  <style type="text/css">

  body { 

background: url('img/fondos/{{$diseno->url}}') no-repeat center center fixed;
-moz-background-size: cover;
-webkit-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-size: 100% 100%;

}

.overlay{
    background:#393D40;
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:-2;
    opacity:0.3;
}

  #home-photo{
    height: 212px;
    width: 100%;
    background: url('{{$usuario->foto_perfil}}') no-repeat;
    background-size: cover;
    border: 10px solid #fff;
    -webkit-box-shadow:  0px 0px 13px 1px rgba(0, 0, 0, 0.2);
     box-shadow:  0px 0px 13px 1px rgba(0, 0, 0, 0.2);
   
    position: relative;
    z-index: -1;
}

.navi{    
    background-color: {{$diseno->color1}};    
}

.navi li{    
    background-color: {{$diseno->color1}};    
}

.navi ul{    
    background-color: {{$diseno->color1}};    
}
#home-social li{
    background-color: {{$diseno->color3}};  
}
.snapshot{
    color: {{$diseno->color1}};
    background-color: {{$diseno->color3}}
}
.divider{
    color: {{$diseno->color1}};
    background-color: {{$diseno->color3}}
}
.graphic-design{
    background-color: {{$diseno->color3}}
}


  </style>

  @endforeach 
  <!--[if IE 8]>
<link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->

</head>
<body >
<div class="overlay"></div>

	<a id="home-nav"></a>
	<div class="navi" data-magellan-expedition>
						<ul >
						  <li data-magellan-arrival='home' class="hasatip" data-width="210" title="Inicio"><a href="#home-nav" class="scroll"><i class="icon-home"></i></a></li>
						  <li data-magellan-arrival='profile' class="hasatip" data-width="210" title="Perfil"><a href="#profile-nav" class="scroll"><i class="icon-user"></i></a></li>
						  <li data-magellan-arrival='resume' class="hasatip" data-width="210" title="Resumen"><a href="#resume-nav" class="scroll"><i class="icon-reorder"></i></a></li>
						  <li data-magellan-arrival='projects' class="hasatip" data-width="210" title="Proyectos"><a href="#projects-nav" class="scroll"><i class="icon-eye-open" ></i></a></li>
						  <li data-magellan-arrival='contact' class="hasatip" data-width="210" title="Contacto"><a href="#contact-nav" class="scroll"><i class="icon-envelope"></i></a></li>						  
						</ul>
    				</div>
  <div class="row">
    <div class="twelve columns" id="main-container">

    	<section class="row" id="home">
    
    			<div class="five columns home-left">
    				<div id="home-photo"></div>
    			</div>
    			
    			<div class="seven columns home-right">
    				<div id="home-text">
						<div id="home-social-container">
							<ul id="home-social">
                                @foreach ($redes as $red)
                                @if($red->facebook)
                                <li><a target="_blank" href="{{$red->facebook}}"><i class="icon-facebook"></i></a></li>
                                @endif

                                @if($red->twitter)
								<li><a target="_blank" href="{{$red->twitter}}"><i class="icon-twitter"></i></a></li>
                                @endif

								@if($red->google)
                                <li><a target="_blank" href="{{$red->google}}"><i class="icon-google-plus"></i></a></li>
                                @endif

                                 @if($red->linkedin)
								<li><a target="_blank" href="{{$red->linkedin}}"><i class="icon-linkedin"></i></a></li>
                                @endif
                                 @endforeach<!--redes-->
							</ul>
						</div>
    					<h3 class="bold" > {{$usuario->nombre}} {{$usuario->apellido}}</h3>
    					<h4 >{{$usuario->ocupacion}}</h4>
    					<hr class="highlight-hr" />
    					<h5 class="text-left"><i class="icon-envelope">&nbsp;</i>{{$usuario->email}}</h5>
    					<h5 class="text-left"><img src="frontend/images/flags/{{$usuario->nombrepais}}.png" width="21px"> 
                        {{$usuario->nombrepais}}</h5>
    				</div>
    				
    			</div>
    		
    		
    	</section><!-- end of Home -->
    	  
		 	
    	<a id="profile-nav">&nbsp;</a>
    	<section class="row page" id="profile" data-magellan-destination='profile'>
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">MI PERFIL</h5>
    			<hr />
    		</div>
    		
    		<div class="twelve columns">
    		
    			<div class="six columns">
    				<h4>
    					Bienvenido a mi sitio web, conóce mi perfil profesional.
    				</h4>
    				<hr />
    				<p>
    					{{$usuario->resumen}}
    				</p>
    			</div>
    			
    			<div class="six columns">
    			
					<ul id="skill">
                         @foreach ($habilidades as $habilidad)
                         @if($habilidad->habilidad)
						<li><span class="bar graphic-design"></span><h5>{{$habilidad->habilidad}}</h5></li>
						@endif
                        @endforeach<!--end foreach habilidades-->
					</ul>
    			
    			</div>
    		</div>
    		
    	</section><!-- end of Profile -->
    	
    	<a id="resume-nav"></a>
    	
    	<section class="row divider text-center">
    			<div class="row">
    				<div class="twelve columns snapshot-timeline">
    					<div class="three columns">
    						<i class="icon-circle timeline-circle"></i>
    					</div>
    					
    					<div class="three columns">
    						<i class="icon-circle timeline-circle"></i>
    					</div>
    					
    					<div class="three columns">
    						<i class="icon-circle timeline-circle"></i>
    					</div>
    					
    					<div class="three columns">
    						<i class="icon-circle timeline-circle"></i>
    					</div>

    				</div>
    			</div>
    			

    			<?php $contador=0; ?>
                @foreach ($educaciones as $educacion)
                    
                    @if($educacion->titulo)
                    <div class="three columns text-center snapshot">
    				<h3>{{$educacion->f_fin_ano}}</h3>
                    <h4 class="bold">{{$educacion->titulo}}</h4>
    				<h4><i class="icon-certificate"></i></h4>
    			    </div>
                    <?php $contador++; ?>
                    @endif<!--educaciones-->

                @endforeach<!--eeducaciones-->

                
                @foreach ($experiencias as $experiencia)
                    @if($experiencia->cargo)
                    @if($contador<=3)
                    <?php $contador++; ?>
                    <div class="three columns text-center snapshot">
                    <h3>  {{$experiencia->f_fin_ano}}</h3>
                    <h4 class="bold">{{$experiencia->cargo}}</h4>
                    <h4><i class="icon-certificate"></i></h4>
                    </div>
                @endif<!--educaciones-->
                @endif<!--contador-->
                @endforeach<!--eeducaciones-->
    			
    	</section>
    	
    	
    	
    	<section class="row page" id="resume">
    	
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">RESUMEN PROFESIONAL</h5>
    			<hr />
    		</div>
    		
    		<div class="twelve columns timeline-section">
    			<div class="three columns">
    				<h6>EXPERIENCIA LABORAL</h6>
    				<div class="resume-large-icon hide-for-small">
    					
                        <i class="icon-briefcase"></i>
    				</div>
    			</div>
    			
					<?php $a=0;?>
					@foreach ($experiencias as $experiencia)
                    @if($experiencia->cargo)

					<div class="nine columns resume-entry">
						<div class="nine columns right">
							<span class="resume-title"><i class="icon-user">&nbsp;</i>{{$experiencia->cargo}}</span><br />
							<span class="resume-company"><i class="icon-building">&nbsp;</i>{{$experiencia->empresa}}</span><br />
							<br />
							<p>{{$experiencia->descripcion}}</p>
						</div>
						
						<div class="three columns text-right">
							{{$experiencia->f_inicio_ano}} - {{$experiencia->f_fin_ano}}
						</div>
						
					</div>
                    <?php $a++;?>
                    @elseif($a==0)
                    <b><br><br>{{$usuario->nombre}} aun no registra experiencia de trabajo</b><br>Escribele y recomiendale completar su sitio web
                    <?php $a++;?>
                    @endif
                    @endforeach<!--experiencia-->
    			
    			
			<hr />
    		</div>
    		

    		
    		<div class="twelve columns timeline-section">
    			<div class="three columns">
    				<h6>EDUCACIÓN</h6>
    				<div class="resume-large-icon hide-for-small">
    					<i class="icon-book"></i>
    				</div>
    			</div>
    			
    			<?php $b=0;?>
                @foreach ($educaciones as $educacion)
                    @if($educacion->titulo)
                    <div class="nine columns resume-entry">
    				<div class="nine columns">
    					<span class="resume-title"><i class="icon-certificate">&nbsp;</i>{{$educacion->titulo}}</span><br />
    					<span class="resume-company"><i class="icon-building">&nbsp;</i>{{$educacion->instituto}}</span><br />
    					<br />
    					<p>{{$educacion->descripcion}}</p>
    				</div>
    				
    				<div class="three columns text-right">
    					{{$educacion->f_inicio_ano}} - {{$educacion->f_fin_ano}}
    				</div>
    				<?php $b++;?>
    			</div>
                 @elseif($b==0)
                    <b><br><br>El usuario aun no registra información academica</b><br>Contactalo y recomiendale completar su sitio web
                    <?php $b++;?>
                @endif
            @endforeach

    		</div>
    	
    	</section><!-- end of Resume -->
    	
    	
    	<a id="projects-nav"></a>
    	
    	<section class="row page" id="projects">
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">MI PORTAFOLIO</h5>
    			<hr />
    		</div>
            
             
             
               <?php $c=2; ?>
               @foreach ($portafolios as $portafolio)
               @if($c%2==0)
               <div class="twelve columns project-row">
               @endif
    		
    			<div class="six columns project-item">
    				<a href="#" data-reveal-id="{{$portafolio->nombre}}">
						<div class="project-img-wrap" data-width="210" title="Ampliar Imagen">
							<img alt="project cover image" src="portafolios/{{$portafolio->imagen}}"/>
							<div class="project-hover text-center"><i class="icon-eye-open"></i><h3>Ampliar</h3></div>

						</div>
    				</a>
    				<div class="project-details">
    					<h5 class="bold">{{$portafolio->nombre}}</h5>
    					<p>{{$portafolio->descripcion}}</p>
    				</div>
    			</div>

                <?php $c++; ?>
                @if($c%2==0)
                </div>
                @endif
                @endforeach<!--portafolio-->
    		

    	
    	</section><!-- end of Projects -->
    	
    	<a id="contact-nav"></a>
    	
    	<section class="row page" id="contact">
    	
    		<div class="twelve columns">
    			<h5 class="page-heading">CONTACTO</h5>
    			<hr />
    		</div>
    	
    		<div class="twelve columns">
    		
    			<div class="six columns" id="contact-left">
    				<div id="contact-icon">
    					<i class="icon-bullhorn"></i>
    				</div>
    				<h4>Cuentame como puedo ayudarte, contactame directamente, sin intermediarios.</h4>
    				<hr />
    				
    				
    			</div>
    			
    			<div class="six columns">
                <div id="contact-icon">
                        <i class="icon-briefcase"></i>
                    </div>
    				<ul>
                        <li><span class="label contact-detail"><i class="icon-phone">&nbsp;</i>{{$usuario->telefono}}</span></li>
                        <li><span class="label contact-detail"><i class="icon-envelope">&nbsp;</i>{{$usuario->email}}</span></li>
                        <li><span class="label contact-detail"><i class="icon-map-marker">&nbsp;</i>{{$usuario->nombreregion}}, {{$usuario->ciudad}}</span></li>
                        <li><span class="label contact-detail"> 
                        <img src="frontend/images/flags/{{$usuario->pais}}.png" width="25px"> {{$usuario->nombrepais}}</span></li>

                    </ul>
					
    			</div>
    			
    		</div>
    		
    	</section>

        <section class="row divider text-center">
                <img src="img/logo.png" width="180px;"><br />
                <h3>
                    Soy miembro registrado en la comunidad mas grande de profesionales PULSO LABORAL    
                </h3>
                <h4>Visita: <a href="inicio" target="_blank">www.PulsoLaboral.com</a></h4>
        </section><!-- end of Contact -->
    	
    	@foreach ($portafolios as $portafolio)
        <div id="{{$portafolio->nombre}}" class="project-single reveal-modal expand">
    	    
    	    <div  class="project-single-slideshow">
    	        <img alt="project image" src="portafolios/{{$portafolio->imagen}}" />
			</div>

			<div class="twelve columns">
    		
    			<div class="ten columns featured-project-description">
    				<div class="emphasise-title">
    					
    					<h5 class="highlight-color">{{$portafolio->nombre}}</h5>
    				</div>
    				<p>
    					{{$portafolio->descripcion}}
    				</p>
    			</div>
    			
    		
    	
  	  </div><!-- end Project 1 -->   
  	
   	</div>
    @endforeach<!--portafolio-->

  </div><!-- end of Main Container -->
  
@endforeach<!--usuarios-->


  
  <!-- Included JS Files (Compressed) -->
  <script src="template2/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="template2/javascripts/app.js"></script>
  <script src="template2/javascripts/scripts.js"></script>
  <script src="template2/javascripts/jquery.tooltipster.js"></script>
    <script>
    $(window).load(function(){
      $("#featured").orbit({
      	directionalNav: false,
      });
      
      $("#project-1-slideshow").orbit({
      	directionalNav: false,
      });
      
    });
    </script> 
  
</body>
</html>
