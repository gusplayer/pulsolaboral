<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

@foreach($usuarios as $usuario)

<head>

    <title>{{$usuario->nombre}} {{$usuario->apellido}}</title>



    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600|Patua+One:400|Titillium+Web:400italic,700italic&amp;subset=latin,latin-ext"/>

     <link rel="stylesheet" type="text/css" href="template1/css/reset.css"/>    

    <link rel="stylesheet" type="text/css" href="template1/css/style.css"/>

    <link rel="stylesheet" type="text/css" href="template1/css/jquery.fancybox.css"/>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript" src="template1/js/jquery.min.js"></script>

    <script type="text/javascript" src="template1/js/jquery.easytabs.min.js"></script>

    <script type="text/javascript" src="template1/js/jquery.hashchange.min.js"></script>

    <script type="text/javascript" src="template1/js/jquery.isotope.min.js"></script>

    <script type="text/javascript" src="template1/js/jquery.adipoli.min.js"></script>

    <script type="text/javascript" src="template1/js/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="template1/js/jquery.gmap.min.js"></script>

    <script type="text/javascript" src="template1/js/response.min.js"></script>

    <script type="text/javascript" src="template1/js/custom.js"></script>

        <link rel="shortcut icon" href="img/favicon.ico">


   @foreach ($disenos as $diseno)

    <!--COLOR CSS-->
    <style type="text/css">
    h1,h2,h3,ul#navigation-menu li:hover a span,
ul#navigation-menu li a.active span,
ul#documents-menu li a,
ul#blog-menu li a:hover,
ul#blog-menu li a.active,
div.text-field div.text-field-right div.title a:hover,
div.twit-field div.twit-link a,
div.comment-meta div.link {
    color: {{$diseno->color1}};
}

ul#navigation-menu li:hover,
ul#navigation-menu li.active,
ul#portfolio-menu li a:hover,
ul#portfolio-menu li a.current,
div.position,
span.progress-count,
a.archiv,
div.text-field div.text-field-left,
div.image-field div.image a,
div.image-field div.image span,
div.blog-image div.blog-postdate,
div.social-like,
form#contact div#send input,
form#comment div#comment-send input,
div.some-link {
background-color: {{$diseno->color1}};
}

div.text-field.blog div.text-field-right {
border-left: 3px solid {{$diseno->color1}};
}
 
body { 

background: url('img/fondos/{{$diseno->url}}') no-repeat center center fixed;
-moz-background-size: cover;
-webkit-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-size: 100% 100%;

} 

div.motto {
        height: 50px;
        color: {{$diseno->color3}};
        font-size: 30px;
        text-align: center;
        padding: 45px 0;
        background: {{$diseno->color2}};
    }


div.motto-text {
        height: 50px;
        line-height: 50px;
        font-weight: 600;
    }  

   



ul#blog-menu li a {
    background: url(../images/blue/arrow.png) left center no-repeat;
}

div.roll-with-description.hide div.roll-button span {
    background: url(../images/blue/plus-minus.png) 0 0;
}

div.roll-with-description.show div.roll-button span {
    background: url(../images/blue/plus-minus.png) 0 -20px;
}

div.meta span.author {
    background: url(../images/blue/icons/user.png) 1px 3px no-repeat;
}

div.meta span.tag {
    background: url(../images/blue/icons/tag.png) 1px 3px no-repeat;
}

div.meta a.back {
    background: url(../images/blue/icons/back.png) 2px 5px no-repeat;
}

div.contact-field.address {
    background: url(../images/blue/icons/user.png) 0 6px  no-repeat;
}

div.contact-field.phone {
    background: url(../images/blue/icons/phone.png) 2px 4px  no-repeat;
}

div.contact-field.mail {
    background: url(../images/blue/icons/mail.png) 0 7px  no-repeat;
}

input[name='search-button'] {
    background: url(../images/blue/search-button.png) -40px 0 no-repeat;
}

input[name='search-button']:hover {
    background: url(../images/blue/search-button.png) 0 0 no-repeat;
}

.overlay{
    background:#393D40;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:-2;
    opacity:0.3;
}

    </style>
    <!--FIN COLOR CSS-->

@endforeach 

</head>

<body>
<div class="overlay"></div>





    <!-- Wrapper --><div id = "wrapper" class = "wrapper">



        <!-- Navigation --><ul id = "navigation-menu" class = "navigation-menu">

           <li class="first"><a class = "profile" href="#profile"><span>Perfil</span></a></li>

            <li><a class = "cv" href="#cv"><span>Educación</span></a></li>

            <li><a class = "documents" href="#documents"><span>Experiencia</span></a></li>

            <li><a class = "portfolio" href="#portfolio"><span>Portafolio</span></a></li>

            <!--<li><a class = "blog" href="#blog"><span>Blog</span></a></li>-->

            <li class="last"><a class = "contacts" href="#contacts"><span>Contacto</span></a></li>

        </ul><!-- /Navigation -->



        <!-- Container --><div id = "container">



        <!-- Profile --><div id = "profile">



            <!-- Info --><div id = "info">



                <div class = "photo">

                   <img src = "photos/{{$usuario->foto_perfil}}" height="280" width="280"/>

                </div>



                <div class = "personal-info">



                    <div class = "name-position">

                       <div class = "name">
                        
                        {{$usuario->nombre}} {{$usuario->apellido}}
                        
                        </div>

                        <div class = "position">
                       
                        {{$usuario->nombre_profesion}}
                       
                        </div>

                    </div>



                    <div class = "motto">

                        <div class = "motto-text">
                        {{$usuario->ocupacion}}
                        </div>


                    </div>



                </div>



            </div><!-- /Info -->



            <!-- Content Inner --><div class = "content-inner">



                <!-- Left Sidebar --><div class = "left-sidebar">



                    <div id = "information" class = "block">

                        <h2><img src="frontend/images/flags/{{$usuario->nombrepais}}.png" width="21px"> Información  </h2>

                        <div class = "block-content">

                            <div class = "field">

                                   <span class = "label">Nombre:</span>

                                <span class = "text">{{$usuario->nombre}}</span>

                            </div>

                            
                            <div class = "field">

                                 <span class = "label">Apellidos:</span>

                                <span class = "text">{{$usuario->apellido}}</span>

                            </div>

                             @if($usuario->fecha_nac)
                             <div class = "field">

                                <span class = "label">Edad:</span>

                                <span class = "text">
                                   {{$usuario->fecha_nac}} años

                                </span>

                            </div>
                            @endif

                            <div class = "field">

                                 <span class = "label">País:</span>

                                <span class = "text">{{$usuario->nombrepais}}</span>

                            </div>

                             <div class = "field">

                                 <span class = "label">Region/Estado:</span>

                                <span class = "text">{{$usuario->nombreregion}}</span>

                            </div>


                            @if($usuario->ciudad)
                            <div class = "field">

                                <span class = "label">Vive en:</span>

                                <span class = "text">{{$usuario->ciudad}}</span>

                            </div>
                            @endif

                        </div>

                    </div>



                    <!--<div id = "skills" class = "block">

                        <h2>Skills</h2>

                        <div class = "block-content">

                            <div class = "field">

                                <span class = "label">Years in Business:</span>

                                <span class = "text">5</span>

                            </div>

                            <div class = "field">

                                <span class = "label">Degree:</span>

                                <span class = "text">MBA</span>

                            </div>

                            <div class = "field">

                                <span class = "label">Languages:</span>

                                <span class = "text">EN, DE, IT, FR</span>

                            </div>

                        </div>



                    </div>-->



                </div><!-- /Left Sidebar -->



                <!-- Content --><div class = "content">



                    <div class = "body">
                       <div class = "field">

                       <p><span class="text">{{$usuario->resumen}}</span></p>
                       </div>

                    </div>



                    @foreach ($habilidades as $habilidad)
                    @if($habilidad->habilidad)
                    
                    <div id = "my-skills" class = "block">

                        <div class = "block-content">
                        

                            <div class = "roll-field">

                                <div class = "label">{{$habilidad->habilidad}}</div>

                                <div class = "progressbar"><span class = "progress-count" level = "{{$habilidad->nivel}}"></span></div>

                            </div>
                            

                           
                        </div>

                    </div>
                    @endif
                    @endforeach<!--end foreach habilidades-->
                   



                </div><!-- /Content -->



                <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



            </div><!-- /Content Inner -->



        </div><!-- /Profile-->



        <!-- CV --><div id = "cv">



            <!-- Content Inner --><div class = "content-inner">



                <!-- Left Sidebar --><div class = "left-sidebar page">



               <div id = "office-apps" class = "block">

                    <h2>Habilidades</h2>

                    @foreach ($habilidades as $habilidad)
                    @if($habilidad->habilidad)

                    <div class = "block-content">

                        <div class = "roll-field">

                            <div class = "label">{{$habilidad->habilidad}}</div>

                            <div class = "progressbar"><span class = "progress-count" level = "{{$habilidad->nivel}}"></span></div>

                        </div>

                    </div>

                    @endif
                    @endforeach 

                </div>



            </div><!-- /Left Sidebar -->



            <!-- Content --><div class = "content">



                



                <div id = "education" class = "block last">

                    <h2>Educación</h2>

                    @foreach ($educaciones as $educacion)
                    @if($educacion->titulo)

                    <div class = "block-content">

                        <div class="text-field date">

                            <div class="text-field-left">Desde<br/>
                            {{$educacion->f_inicio_mes}}<br/>
                            {{$educacion->f_inicio_ano}}<br/>
                            Hasta<br/>
                            @if(($educacion->estado) === 1)
                            Actual<br>
                            @else
                            {{$educacion->f_fin_mes}}<br>
                            {{$educacion->f_fin_ano}}
                            @endif
                            </div>
                                
                                <div class="text-field-right">

                                <div class="title">{{$educacion->titulo}}</div>

                                <div class="meta without-icon"><span class="tag">{{$educacion->instituto}}</span></div>

                                <div class="text"><p>{{$educacion->descripcion}}</p></div>

                                <div class="meta without-icon"><span class="tag">{{$educacion->nombre_estado}}</span></div>

                                </div>

                        </div>
                       
                    </div>
                    @endif
                    @endforeach

                </div><!--end div educacion-->


            </div><!-- /Content -->


            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



        </div><!-- /Content Inner -->



        </div><!-- /CV -->



        <!-- Documents --><div id = "documents">



            <!-- Content --><div class = "content">



              



                <!-- Documents Letters --><div id="letters" class = "content-inner">



                    <div id = "curriculum-vitae" class = "block">

                        <h2>Experiencia</h2>

                        <div class = "block-content">

                         @foreach ($experiencias as $experiencia)
                         @if($experiencia->cargo)

                            <div class="text-field file">

                                 <div class="text-field-left">Desde<br/>
                            {{$experiencia->f_inicio_mes}}<br/>
                            {{$experiencia->f_inicio_ano}}<br/>
                            Hasta<br/>
                            @if(($experiencia->estado) === 1)
                            Hoy<br>
                            @else
                            {{$experiencia->f_fin_mes}}<br>
                            {{$experiencia->f_fin_ano}}
                            @endif
                            </div>

                                 <div class="text-field-right">

                                    <div class="title">{{$experiencia->cargo}}</div>

                                    <div class="meta without-icon"><span class="date">{{$experiencia->empresa}}</span></div>

                                    <div class="text"><p>{{$experiencia->descripcion}}</p></div>

                                </div>

                            </div>

                        @endif
                        @endforeach

                        </div>

                    </div>


                   <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->


                </div><!-- /Documents Letters -->

            </div><!-- /Content -->



            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



        </div><!-- /Documents -->



        <!-- Portfolio --><div id = "portfolio">



            <!-- Content --><div class = "content">



            <h2>Portafolio</h2>
            <p>En la siguiente galeria podras encontrar imagenes acerca de mi trabajo, mis proyectos y todo mi talento.<p><br>



            <!-- Portfolio Menu --><ul id="portfolio-menu">



                <li><a href="#" class="current" data-filter="*">Todo</a></li>

                @foreach ($categorias as $categoria)
                <li>
                <a href="#" data-filter=".{{$categoria->id}}">
                {{$categoria->categoria}}
                </a>
                </li>
                @endforeach <!-- en foreach categorias-->               

            </ul><!-- /Portfolio Menu -->

            <!-- Portfolio Container --><ul >

                @foreach ($portafolios as $portafolio)

                <li class = "{{$portafolio->id_categoria}}">

                    <a href="portafolios/{{$portafolio->imagen}}" title="{{$portafolio->descripcion}}" class="popup">

                        <div class = "image-field"  >

                            <div class = "image" >

                            <img src="portafolios/{{$portafolio->imagen}}" width="100%" height="100%" />
                            
                            </div>
                           
                            <div class = "title">{{$portafolio->nombre}}<br></div>

                        </div>

                    </a>

                </li>

                @endforeach<!--portafolio-->
             
            </ul><!-- /Portfolio Container -->

            </div><!-- /Content -->

            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->

        </div><!-- /Portfolio --> 

        <!-- Contacts --><div id = "contacts">



            <div id ="contact-map-block" class ="block">

                <h2>Contactame</h2>

                

            </div>

            <!-- Content Inner --><div class = "content-inner">

                <div class = "left-sidebar">

                    <div id = "contact-information" class="block">

                        <h2>Donde me encuentras ?</h2>

                        <div class = "block-content">

                            <div class = "contact-field address">

                                <div id = "contact-name">  <img src="frontend/images/flags/{{$usuario->pais}}.png" width="25px"></div>
                               

                                <div id = "contact-address">
                                @if($usuario->nombrepais)
                                País: {{$usuario->nombrepais}}
                                @endif
                                @if($usuario->nombreregion)
                                <br/><br>
                                Region: {{$usuario->nombreregion}}
                                @endif
                                @if($usuario->ciudad)
                                <br/><br>
                                Ciudad: {{$usuario->ciudad}}
                                @endif
                                @if($usuario->direccion)
                                <br><br>
                                Dirección: {{$usuario->direccion}}
                                @endif
                                <br><br>
                                </div> <!-- From this field take address Google map-->

                            </div>


                        </div>

                    </div>

                </div>



                <div class = "content">



                    <div id = "contact-form" class = "block">

                        <h3>Contactame Directamente!</h3>
                        <br>
                        <div class = "field">
                        <span class="text"> Ya has visto mi perfil, si te ha gustado puedes contactarme y charlamos directamente, sin intermediarios. Te dejare mis datos, para que me puedas llamar o escribir, hablar acerca del servicio que necesitas o de que manera te podria ayudar.</span>
                        </div>

                        <br>
                         <center> 
                         <img src="frontend/images/icon/addressbook-green-icon.png" width="55px"><br>
                         <b>Telefono: </b> {{$usuario->telefono}}
                        <br><br>
                         <center> 
                         <img src="frontend/images/icon/adress.png" width="55px"><br>
                         <b>Correo: </b> {{$usuario->email}}
                        
                        
                        </center>
                    </div>



                </div>



                <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



            </div><!-- /Content Inner -->



        </div><!-- /Contacts -->



        <!-- Social Button --><div id = "social">

        @foreach ($redes as $red)

            <ul class = "pos-button">


                @if($red->facebook)
                <li class = "first"><a href = "{{$red->facebook}}" target="_blank" class = "facebook"title="Facebook"></a></li>
                @endif

                 @if($red->google)
                 <li><a href = "{{$red->google}}" target="_blank" class = "google" title="Google+"></a></li>
                 @endif

                @if($red->twitter)
                <li><a href = "{{$red->twitter}}" target="_blank" class = "twitter" title="Twitter"></a></li>
                @endif

                @if($red->linkedin)
                <li><a href = "{{$red->linkedin}}" target="_blank" class = "linkedin" title="Linkedin"></a></li>
                @endif

                @if($red->pinterest)
                <li><a href = "{{$red->pinterest}}" target="_blank" class = "pinterest" title="Pinterest"></a></li>
                @endif

                @if($red->dribbble)
                <li class = "last"><a href="{{$red->dribbble}}" target="_blank" class = "dribbble" title="Dribbble"></a></li>
                @endif

            </ul>

        @endforeach    

        </div><!-- /Social Button -->



       



        </div><!-- /Container -->



        <!-- Footer --><div id = "footer">

            <div id = "copyright">© 2015 All Rights Reserved</div>

        </div><!-- /Footer -->



    </div><!-- /Wrapper -->





</body>

 @endforeach<!--end usuarios -->


</html>