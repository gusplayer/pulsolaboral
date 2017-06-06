<!DOCTYPE html>
<html lang="en">
    <head>

    @foreach($usuarios as $usuario)
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../img/favicon.ico">
         <title>{{$usuario->nombre}} {{$usuario->apellido}}</title>
        <!-- ALL STYLESHEETS -->
        <link href="template4/css/all-stylesheet.css" rel="stylesheet">
        <!--<link rel="alternate stylesheet" type="text/css" href="template4/css/colors/green.css" title="default">-->
        <!-- ALL COLORED STYLESHEETS -->
        
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]>
        <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        @foreach ($disenos as $diseno)
        <style>


        @charset "utf-8";
            /* CSS Document */

            #preloader {
                background-color: {{$diseno->color1}};
            }
            .colored-text {
                color: {{$diseno->color1}};
            }
            .tp-banner a.btn1:hover {
                border: 2px solid {{$diseno->color1}};
                background-color: {{$diseno->color1}};
            }
            .tp-banner a.btn2 {
                border: 2px solid {{$diseno->color1}};
                background-color: {{$diseno->color1}};
            }
            .navbar-inverse {
                background-color: {{$diseno->color1}};
            }
            .section-heading .heading {
                color: {{$diseno->color1}};
            }
            .owl-theme .owl-controls .owl-page span {
                background: {{$diseno->color1}};
            }
            .education-timeline .programe {
                color: {{$diseno->color1}};
            }
            .education-timeline .education:hover .divider {
                background-color: {{$diseno->color1}};
            }
            .education-timeline .education:hover .duration {
                color: {{$diseno->color1}};
            }
            #process .items:hover {
                background: {{$diseno->color1}};
            }
            .work-experience-timeline .company-name {
                color: {{$diseno->color1}};
            }
            .work-experience-timeline .url a{
                color: {{$diseno->color1}}; 
            }
            .work-experience-timeline .col-left:hover .arrow {
                border-color: transparent {{$diseno->color1}} transparent transparent;
            }
            .work-experience-timeline .col-right:hover .arrow {
                border-color: transparent transparent transparent {{$diseno->color1}};
            }
            .work-experience-timeline .col-right:hover .duration, .work-experience-timeline .col-left:hover .duration {
                color: {{$diseno->color1}};
            }
            #services-carousel .items:hover .icon {
                color: {{$diseno->color1}};
            }
            #options ul li:hover a, #options ul li a.selected {
                border: 2px solid {{$diseno->color1}};
                background-color: {{$diseno->color1}};
            }
            .overlayzoom span.zoom {
                background: rgb(4, 158, 228); /* RGBa with 0.6 opacity */
                background: rgba(4, 158, 228, 0.7);
            }
            #video .play a:hover {
                color: {{$diseno->color1}};
            }
            #awards-carousel .items:hover .icon {
                color: {{$diseno->color1}};
            }
            #testimonials-carousel .items .emp-name {
                color: {{$diseno->color1}};
            }
            #contact {
                background-color: {{$diseno->color1}};
            }
            #contact .section-heading h1.icon-line i {
                background: {{$diseno->color1}};
            }
            #contact .contact-form .form button {
                color: {{$diseno->color1}};
            }
            #contact .contact-form .form button:hover {
                background-color: {{$diseno->color1}};
            }
            .social-icons ul li {
                background-color: {{$diseno->color1}};
            }
            #footer .desc i {
                margin-bottom: 12px;
                color: {{$diseno->color1}};
            }
            .link-btn a {
                background-color: {{$diseno->color1}};
                border: 4px solid {{$diseno->color1}};
            }
            .link-btn a:hover {
                border: 4px solid {{$diseno->color1}};
                color: {{$diseno->color1}};
            }
            .link-btn-2 a {
                background-color: {{$diseno->color1}};
                border: 4px solid {{$diseno->color1}};
            }
            .link-btn-2 a:hover {
                border: 4px solid {{$diseno->color1}};
                color: {{$diseno->color1}};
            }
            .scrollup {
                background-color: {{$diseno->color1}};
            }

        </style>
        @endforeach<!-- en diseño-->

    </head>
    <body>
        <!-- PRELOADER STARTS
            ========================================================================= --> 
        <div id="preloader">
            <div class="preloader">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <!-- PRELOADER Ends
            ========================================================================= --> 
        <!-- SLIDER STARTS
            ========================================================================= -->
        <section id="slider">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>
                        <!-- SLIDE NR. 1-->
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE --> 
                            <img src="template4/video/poster.jpg"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">                             
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                data-x="0"
                                data-y="0"
                                data-speed="1000"
                                data-start="0"
                                data-easing="Power4.easeOut"
                                data-endspeed="1500"
                                data-endeasing="Power4.easeIn"
                                data-autoplay="true"                            
                                data-autoplayonlyfirsttime="false"
                                data-nextslideatend="true"
                                data-forceCover="1"
                                data-dottedoverlay="twoxtwo"
                                data-aspectratio="16:9"
                                data-forcerewind="on"
                                style="z-index: 2">
                                <video class="video-js vjs-default-skin" loop preload="none" width="100%" height="100%"
                                     <source src='template4/video/back.webm' type='video/webm' />
                                </video>
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption very_large_text customin customout"
                                data-x="265"
                                data-y="0"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="1000"
                                data-end="10000"                                
                                data-easing="Back.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                style="z-index: 3;font-size:80px;">{{$usuario->nombre}} {{$usuario->apellido}}</div>
                            <!-- LAYER NR. 3 -->
                           
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption medium_text sft customout"
                                data-x="center"
                                data-y="120"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="2000"
                                data-end="9800"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 5">PERFIL /PROYECTOS /SERVICIOS </div>
                            <!-- LAYER NR. 5-->
                            <div class="tp-caption large_text skewfromleft customout"
                                data-x="center"
                                data-y="240"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="2500"
                                data-end="5500"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 6">
                                <p class="border">PERFIL PROFESIONAL</p>
                            </div>
                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption large_text skewfromright customout"
                                data-x="center"
                                data-y="240"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="6000"
                                data-end="9700"                        
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 7">
                                <p class="border">EXPERIENCIA LABORAL</p>
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption skewfromleftshort customout slider-buttons"
                                data-x="395"
                                data-y="435"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="3000"
                                data-end="9500"
                                data-easing="Back.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="off"
                                style="z-index: 8"><a href="#about" class="btn2"><i class="fa fa-briefcase"></i>PERFIL PROFESIONAL</a> </div>
                            <!-- LAYER NR. 8 -->
                            
                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption very_large_text customin customout"
                                data-x="265"
                                data-y="0"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="11000"
                                data-end=""                                
                                data-easing="Back.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                style="z-index: 3;font-size:85px;">{{$usuario->nombre}} {{$usuario->apellido}}</div>
                            <!-- LAYER NR. 10 -->
                          
                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption medium_text sft customout"
                                data-x="410"
                                data-y="120"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="12000"                                
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 12">{{$usuario->ocupacion}}</div>
                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption large_text skewfromleft customout"
                                data-x="center"
                                data-y="240"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="12500"
                                data-end="15500"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 13">
                                <p class="border">PORTAFOLIO PROFESIONAL</p>
                            </div>
                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption large_text skewfromright customout"
                                data-x="center"
                                data-y="240"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="16000"
                                data-end="18500"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 14">
                                <p class="border">BUZON DE CONTACTO</p>
                            </div>
                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption large_text skewfromleft customout"
                                data-x="center"
                                data-y="240"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="19000"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="off"
                                style="z-index: 15">
                                <p class="border">BIENVENIDO</p>
                            </div>
                            <!-- LAYER NR. 15 -->
                          
                            <!-- LAYER NR. 16 -->
                            <div class="tp-caption skewfromleftshort customout slider-buttons"
                                data-x="405"
                                data-y="435"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="600"
                                data-start="13500"
                                data-easing="Back.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 17"><a href="#about" class="btn1"><i class="fa fa-briefcase"></i> PERFIL PROFESIONAL</a><br><br><br>
                                 <center><a href="http://pulsolaboral.com/" target="_blank"><img src="img/logopulso3.png" width="190"></a></center></div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </section>
        <!-- /. SLIDER ENDS --> 
        <!-- NAVIGATION STARTS
            ========================================================================= -->
        <section id="navigation">
            <div class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li class="current"><a href="#slider" data-toggle="collapse" data-target=".navbar-collapse">INICIO</a></li>
                            <li><a href="#about" data-toggle="collapse" data-target=".navbar-collapse">PERFIL</a></li>
                            <li><a href="#myskills" data-toggle="collapse" data-target=".navbar-collapse">HABILIDADES</a></li>
                            <li><a href="#education" data-toggle="collapse" data-target=".navbar-collapse">EDUCACION</a></li>
                            <li><a href="#work-experience" data-toggle="collapse" data-target=".navbar-collapse">EXPERIENCIA</a></li>
                            <li><a href="#services" data-toggle="collapse" data-target=".navbar-collapse">SERVICIOS</a></li>
                            <li><a href="#portfolio" data-toggle="collapse" data-target=".navbar-collapse">PORTAFOLIO</a></li>
                            <li><a href="#contact" data-toggle="collapse" data-target=".navbar-collapse">CONTACTO</a></li>                          
                        </ul>
                    </div>
                    <!--/.nav-collapse --> 
                </div>
            </div>
        </section>
        <!-- /.NAVIGATION --> 
        <!-- ABOUT US STARTS
            ========================================================================= -->
        <section id="about">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">MI PERFIL</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-briefcase"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">Conóce mi perfil profesional, encontraras toda la información necesaria sobre mi experiencia, educación, servicios y portafolio de trabajo.</div>
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Row 1 Starts -->
                <div class="row">
                    <!-- Left Column Starts -->
                    <div class="col-md-3 personal-info col-left animated" data-animation="fadeInRight" data-animation-delay="1700">
                        <div class="line1">NOMBRE<br>
                            <span class="line2">{{$usuario->nombre}} {{$usuario->apellido}}</span>
                        </div>
                        <div class="line1">EDAD<br>
                            <span class="line2">{{$usuario->fecha_nac}}  años</span>
                        </div>
                        <div class="line1">PAÍS<br>
                            <span class="line2">{{$usuario->nombrepais}}</span>
                        </div>
                       
                    </div>
                    <!-- Left Column Ends -->
                    <!-- Middle Column Starts -->
                    <div class="col-md-6">
                        <div class="col-md-8 col-md-offset-2 animated" data-animation="fadeInUp" data-animation-delay="2000">
                            <div class="pic owl-carousel" id="my-pic-carousel">
                                <div><img src="{{$usuario->foto_perfil}}" class="img-responsive" alt="" ></div>
                            </div>
                        </div>
                    </div>
                    <!-- Middle Column Ends -->
                    <!-- Right Column Starts -->
                    <div class="col-md-3 personal-info col-right animated" data-animation="fadeInLeft" data-animation-delay="1700">
                        <div class="line1">REGION<br>
                            <span class="line2">{{$usuario->nombreregion}}</span> 
                        </div>
                        <div class="line1">TELEFONO<br>
                            <span class="line2">{{$usuario->telefono}}</span> 
                        </div>                        
                        <div class="line1">CIUDAD<br>
                            <span class="line2">{{$usuario->ciudad}}</span>
                        </div>
                    </div>
                    <!-- Right Column Ends -->
                </div>
                <!-- Row 1 Ends --> 
                <!-- Row 2 Starts -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 animated" data-animation="fadeInUp" data-animation-delay="2200">
                        <div class="intro">{{$usuario->resumen}}</div>
                    </div>
                </div>
                <div>
                    <!-- Row 2 Ends --> 
                    <!-- Button Starts -->
                    <div class="link-btn"><a href="#myskills"><i class="fa fa-rocket"></i> HABILIDADES</a></div>
                    <!-- Button Ends --> 
                </div>
            </div>
        </section>
        <!-- /.ABOUT --> 
        <!-- MY SKILLS STARTS
            ========================================================================= -->
        <section id="myskills" data-speed="10" data-type="background">
            <div class="container"  >
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">HABILIDADES</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-rocket"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200"></div>
                    </div>
                </div>
                <!-- Header Ends -->
               <div class="owl-carousel animated" data-animation="fadeIn" data-animation-delay="1700" id="myskills-carousel" >
                   
                    <?php $donut=1; ?>
                    @foreach ($habilidades as $habilidad)
                    @if($habilidad->habilidad)
                    <div class="items">
                        <div id="donutchart{{$donut}}" data-percent="{{$habilidad->nivel}}"> </div>
                        <br>
                        {{$habilidad->habilidad}}
                        <?php $donut++; ?>
                    </div>
                    @elseif($donut==1)
                    <b><br><br>{{$usuario->nombre}} aun no registra experiencia de trabajo</b><br>Escribele y recomiendale completar su sitio web
                    <?php $donut++;?>
                    @endif
                    @endforeach<!--end foreach habilidades-->
                                        
                   
                </div>
                <!-- Button Starts -->
                <div class="link-btn animated" data-animation="fadeInUp" data-animation-delay="2200"><a href="#education"><i class="fa fa-book"></i> EDUCACION</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.MY SKILLS --> 
        <!-- EDUCATION STARTS
            ========================================================================= -->
        <section id="education">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">EDUCACIÓN</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-book"></i></h1>
                        
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Education Timeline Starts -->
                <div class="education-timeline animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <!-- Row 1 Starts -->
                    <?php $a=0;?>
                    @foreach ($educaciones as $educacion)                    
                    @if($educacion->titulo)
                    <div class="row education">
                        <div class="col-md-6 col-xs-6">
                            <div class="divider"><i class="fa fa-book"></i></div>
                            <div class="col-left">
                                <div class="programe">{{$educacion->titulo}}</div>
                                <div class="university"><strong>{{$educacion->instituto}}</strong><br>
                                {{$educacion->nombre_estado}}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="col-right">
                                <div class="duration">{{$educacion->f_inicio_mes}} {{$educacion->f_inicio_ano}} - {{$educacion->f_fin_mes}} {{$educacion->f_fin_ano}}</div>
                                <div class="description">{{$educacion->descripcion}}</div>
                            </div>
                        </div>
                    </div>
                    <?php $a++;?>
                    @elseif($a==0)
                    <b><br><br>{{$usuario->nombre}} aun no registra experiencia de trabajo</b><br>Escribele y recomiendale completar su sitio web
                    <?php $a++;?>
                    @endif
                    @endforeach
                                      
                    <!-- Row 4 Ends --> 
                </div>
                <!-- Education Timeline Ends -->
                <hr>
                <!-- Button Starts -->
                <div class="link-btn"><a href="#work-experience"><i class="fa fa-cogs"></i> EXPERIENCIA</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.EDUCATION --> 
              
        <section id="work-experience">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">EXPERIENCIA</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-tags"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200"></div>
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Education Timeline Starts -->
                <div class="education-timeline animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <!-- Row 1 Starts -->
                    <?php $a=0;?>
                    @foreach ($experiencias as $experiencia)                    
                    @if($experiencia->cargo)
                    <div class="row education">
                        <div class="col-md-6 col-xs-6">
                            <div class="divider"><i class="fa fa-book"></i></div>
                            <div class="col-left">
                                <div class="programe">{{$experiencia->cargo}}</div>
                                <div class="university"><strong>{{$experiencia->empresa}}</strong><br>
                                {{$experiencia->nombre_estado}}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="col-right">
                                <div class="duration">{{$experiencia->f_inicio_mes}} {{$experiencia->f_inicio_ano}} - {{$experiencia->f_fin_mes}} {{$experiencia->f_fin_ano}}</div>
                                <div class="description">{{$experiencia->descripcion}}</div>
                            </div>
                        </div>
                    </div>
                    <?php $a++;?>
                    @elseif($a==0)
                    <b><br><br>{{$usuario->nombre}} aun no registra experiencia de trabajo</b><br>Escribele y recomiendale completar su sitio web
                    <?php $a++;?>
                    @endif
                    @endforeach
                                      
                    <!-- Row 4 Ends --> 
                </div>
                <!-- Education Timeline Ends -->
                <hr>
                <!-- Button Starts -->
                <div class="link-btn"><a href="#services"><i class="fa fa-heart"></i> SERVICIOS</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.WORK EXPERIENCE --> 
        <!-- SERVICES STARTS
            ========================================================================= -->
        <section id="services" data-speed="10" data-type="background">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">SERVICIOS</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-heart"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200"></div>
                    </div>
                </div>
                <!-- Header Ends -->
                <!-- Services Carousel Starts -->
                <div class="owl-carousel animated" data-animation="fadeInUp" data-animation-delay="1700" id="services-carousel">
                    <!-- Services 1 Starts -->
                      @foreach ($servicios as $servicio)
                      <div class="items">
                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                        <div class="description">{{$servicio->servicio}}<br><i>{{$servicio->descripcion}}</i></div>
                      </div>
                      @endforeach
                   
                    
                </div>
                <!-- Services Carousel Starts -->
                <!-- Button Starts -->
                <div class="link-btn animated" data-animation="fadeInUp" data-animation-delay="2200"><a href="#portfolio"><i class="fa fa-thumbs-up"></i> PORTAFOLIO</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.SERVICES --> 
        <!-- PORTFOLIO STARTS
            ========================================================================= -->
        <section id="portfolio">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">PORTAFOLIO</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-thumbs-up"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">Observa algunas imagenes relacionadas a mi trabajo.</div>
                    </div>
                </div>
                <!-- Header Ends --> 
                <!-- Portfolio Nav Starts -->
                <div class="row animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <div class="col-md-12">
                        <div id="options">
                            <ul id="filters" class="option-set clearfix" data-option-key="filter">
                            <li><a href="#filter" data-option-value="*" class="selected">TODOS</a></li>
                            @foreach ($categorias as $categoria)
                              <li><a href="#filter" data-option-value=".{{$categoria->id}}">{{$categoria->categoria}}</a></li>
                            @endforeach                              
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Nav Ends --> 
                <!-- Portfolio Thumbs Starts -->
                <div class="row animated" data-animation="fadeInUp" data-animation-delay="2200" id="container-thumbs">
                    <!-- Portfolio Item 1 Starts -->
                    @foreach ($portafolios as $portafolio)
                    <div class="col-xs-12 col-sm-6 col-md-3 items {{$portafolio->id_categoria}}">
                        <div class="image"><a href="portafolios/{{$portafolio->imagen}}" data-toggle="lightbox" data-gallery="mixedgallery" data-title="{{$portafolio->nombre}}" data-footer="{{$portafolio->descripcion}}" class="overlayzoom"><img src="portafolios/{{$portafolio->imagen}}" class="img-responsive" alt=""><span class="zoom"><span><i class="fa fa-picture-o"></i></span></span></a></div>
                        <div class="heading">{{$portafolio->nombre}}</div>
                        <div class="category">{{$portafolio->descripcion}}</div>
                    </div>
                    @endforeach

                </div>
                <!-- Portfolio Thumbs Ends --> 
                <!-- Button Starts -->
                <div class="link-btn"><a href="#contact"><i class="fa fa-play-circle-o"></i>CONTACTO</a></div>
                <!-- Button Ends --> 
            </div>
        </section>
        <!-- /.PORTFOLIO --> 
     
       
        <!-- /.TESTIMONIALS --> 
        <!-- AWARDS STARTS
            ========================================================================= -->
       
        <!-- /.AWARDS --> 
        <!-- DOWNLOAD CV STARTS
            ========================================================================= -->
       
        <!-- /.DOWNLOAD CV --> 
        <!-- CONTACT STARTS
            ========================================================================= -->
        <section id="contact">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">CONTACTO</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-map-marker"></i></h1>
                    </div>
                </div>
                <!-- Header Ends -->
                <!-- Contact Info Starts -->
                <div class="row contact-info animated" data-animation="fadeInUp" data-animation-delay="1200">
                    <div class="col-md-12">
                        <div class="address">{{$usuario->nombreregion}}, {{$usuario->ciudad}} <br>
                            <img src="frontend/images/flags/{{$usuario->pais}}.png" width="25px"> {{$usuario->nombrepais}}
                        </div>
                        <div class="phone">{{$usuario->telefono}}</div>
                        <div class="email">{{$usuario->email}}</div>
                    </div>
                </div>
                <!-- Contact Info Ends -->
                <hr>
                <!-- Contact Form Starts -->
               <!-- <div class="contact-form">
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 section-heading">
                            <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">ENVIA UN MENSAJE</div>
                            <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-envelope"></i></h1>
                        </div>
                    </div>
                   
                    <div class="row form animated" data-animation="fadeInUp" data-animation-delay="1200">
                        <div class="col-md-6 col-md-offset-3">
                            <form action='http://webagate.com/demos/onepage-vcard-resume-portfolio-website-template/Light-Version/process.php' method='post' name='ContactForm' id='ContactForm' >
                                <div class="input-group"> <span class="input-group-addon">@</span>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre *">
                                </div>
                                <div class="input-group"> <span class="input-group-addon">@</span>
                                    <input type="text" name="email" class="form-control" placeholder="Email *">
                                </div>
                                <div class="input-group"> <span class="input-group-addon">@</span>
                                    <input type="text" name="website" class="form-control" placeholder="Asunto">
                                </div>
                                <div class="input-group"> <span class="input-group-addon">@</span>
                                    <textarea name="comment" class="form-control" placeholder="Mensaje *" rows="4"></textarea>
                                </div>
                                <div class="input-group form-buttons"> <span class="input-group-btn">
                                    <button class="btn btn-default" type='submit' value='Submit' name='submitf' id="submitf">ENVIAR</button>
                                    </span> 
                                </div>
                                <div id='message_post'></div>
                            </form>
                        </div>
                    </div>
                   
                </div>-->
             
            </div>
        </section>
        @endforeach<!--end foreach usuarios-->
        <!-- /.CONTACT --> 
        <!-- SOCIAL MEDIA STARTS
            ========================================================================= -->
        <section id="social-media">
            <div class="container">
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 section-heading">
                        <div class="heading animated" data-animation="fadeInUp" data-animation-delay="200">REDES SOCIALES</div>
                        <h1 class="icon-line animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-comments"></i></h1>
                        <div class="description animated" data-animation="fadeIn" data-animation-delay="1200">Busca mi perfil en las redes sociales.</div>
                    </div>
                </div>
                <!-- Header Ends -->
                <!-- Social Icons Starts -->
                <div class="row animated" data-animation="fadeInUp" data-animation-delay="1700">
                    <div class="col-md-12 social-icons">
                        <ul>
                             @foreach ($redes as $red)
                            @if($red->facebook)
                            <li><a href="{{$red->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            @endif

                            @if($red->twitter)
                            <li><a href="{{$red->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            <!--<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>-->

                            @if($red->instagram)
                            <li><a href="{{$red->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            @endif

                            @if($red->youtube)
                            <li><a href="{{$red->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            @endif

                            @if($red->linkedin)
                            <li><a href="{{$red->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            @endif

                            @if($red->pinterest)
                            <li><a href="{{$red->pinterest}}" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            @endif

                            @if($red->google)
                            <li><a href="{{$red->google}}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            @endif

                            @if($red->dribbble)
                            <li><a href="{{$red->dribbble}}" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            @endif

                            <!--<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->
                            @endforeach    
                        </ul>
                    </div>
                </div>
                <!-- Social Icons Ends -->
            </div>
        </section>
        <!-- /.SOCIAL MEDIA --> 
        <!-- FOOTER STARTS
            ========================================================================= -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <!-- Copyright Starts -->
                        <div class="desc animated" data-animation="fadeInUp" data-animation-delay="200"><i class="fa fa-heart"></i><br>
                            © 2015. Desarrollado a traves de <a href="http://pulsolaboral.com/" target="_blank">PulsoLaboral.com<br></a>
                           <a href="http://pulsolaboral.com/" target="_blank"><img src="img/logopulso.png" width="250"></a>
                        </div>
                        <!-- Copyright Ends -->
						<div class="line"></div>
                        <!-- ToTop Starts -->
                        <a href="#" class="scrollup animated" data-animation="fadeInUp" data-animation-delay="700"><i class="fa fa-angle-double-up"></i></a> 
                        <!-- ToTop Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.FOOTER -->
        <!-- STYLE SWITCHER PANEL STARTS
            ========================================================================= -->
        
       
        <!-- /.STYLE SWITCHER PANEL -->
        <!-- JAVASCRIPTS STARTS
            ========================================================================= --> 
        <!-- Bootstrap --> 
        <script src="template4/js/jquery-1.10.2.min.js"></script> 
        <script src="template4/js/bootstrap.min.js"></script> 
        <!-- Style Switcher --> 
       
        <!-- Animation --> 
        <script type="text/javascript" src="template4/js/animation/jquery.appear.js"></script> 
        <!-- AJAX Contact Form --> 
        <script type="text/javascript" src="template4/js/contact/contact-form.js"></script> 
        <!-- Lightbox --> 
        <script src="template4/lightbox/ekko-lightbox.js"></script> 
        <!-- Isotope --> 
        <script src="template4/js/isotope/jquery.isotope.min.js"></script> 
        <script src="template4/js/isotope/custom-isotope.js"></script> 
        <!-- Slider Revolution 4.x Scripts --> 
        <script type="text/javascript" src="template4/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
        <script type="text/javascript" src="template4/rs-plugin/js/jquery.themepunch.revolution.js"></script> 
        <script>
            var revapi;
            
            		jQuery(document).ready(function() {
            
            			   revapi = jQuery('.tp-banner').revolution(
            				{
            						delay:9000,
            						startwidth:1170,
            						startheight:500,
            						fullScreen:"on",
            						forceFullWidth:"on",
            						minFullScreenHeight:"320",
            						videoJsPath:"rs-plugin/videojs/"
            				});
            
            		});	//ready
        </script>
        <!-- Owl Carousel --> 
        <script src="template4/owl-carousel/owl-carousel/owl.carousel.js"></script> 
        <!-- Custom --> 
        <script src="template4/js/custom.js"></script> 
        <!-- Parallex --> 
        <script src="template4/js/parallex/script.js"></script> 
        <!-- ScrollTo --> 
        <script src="template4/js/nav/jquery.scrollTo.js"></script> 
        <script src="template4/js/nav/jquery.nav.js"></script> 
        <!-- Sticky --> 
        <script type="text/javascript" src="template4/js/sticky/jquery.sticky.js"></script> 
        <!-- Donut Chart --> 
        <script type="text/javascript" src="template4/js/progress-bars/jquery.donutchart.js"></script> 
        <script>
            $("#donutchart1").donutchart("animate");
            $("#donutchart2").donutchart("animate");
            $("#donutchart3").donutchart("animate");
            $("#donutchart4").donutchart("animate");
            $("#donutchart5").donutchart("animate");
            $("#donutchart6").donutchart("animate");
            $("#donutchart7").donutchart("animate");
            $("#donutchart8").donutchart("animate");			
        </script> 
        <!-- Retina --> 
        <script type="text/javascript" src="template4/js/retina/retina.js"></script>
    </body>
</html>