@extends('frontend/master')

@section('contenido')
        
        
        
        <div class="container">
            
            
            <div class="cont-pm col-sm-12">
                <img class="baner" src="frontend/images/baner4.jpg">
                <p class="title">¡Conoce nuestros planes!</p>
                
              
                <span>Escoge el paquete que más conviene a tus necesidades.</span>
               
                <div class="planes">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title promo">Basica</h3>
                            </div>
                            <div class="panel-body">
                                <div class="price">Gratis</div>
                                <ul>
                                    <li><i class="fa fa-check"></i> Subdominio gratis (tunombre.pulsolaboral.com)</li>
                                    <li><i class="fa fa-check"></i> 3 Plantillas de diseño web</li>
                                    <li><i class="fa fa-check"></i> Hosting básico compartido</li>
                                    <li><i class="fa fa-check"></i> 5 Imágenes en Portafolio</li>
                                    <li><i class="fa fa-check"></i> Sin soporte tecnico</li>
                                    <li><i class="fa fa-check"></i> Avisos Publicitarios</li>
                                </ul>
                            </div>
                            <div class="st-web">
                                <a href="login" class="btn btn-success">¡Contrátalo!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title promo">Premium</h3>
                            </div>
                            <div class="panel-body">
                                <div class="price">
                                @if(Session::get('idpais')=='2')
                                COP $ 85.000
                                @elseif(Session::get('idpais')=='4')
                                 EUR $ 49
                                @else  
                                 USD $ 49
                                @endif
                                <i>/año</i></div>
                                <ul>
                                    <li><i class="fa fa-check"></i> Subdominio gratis (tunombre.pulsolaboral.com)</li>
                                    <li><i class="fa fa-check"></i> 6 Plantillas de diseño web</li>
                                    <li><i class="fa fa-check"></i> Hosting Avanzado compartido</li>
                                    <li><i class="fa fa-check"></i> 15 Imágenes en Portafolio</li>
                                    <li><i class="fa fa-check"></i> Soporte Tecnico</li>
                                    <li><i class="fa fa-check"></i> Sin Publicidad</li>
                                    <li><i class="fa fa-check"></i> Buzon de contacto empresarial</li>
                                    <li><i class="fa fa-check"></i> Mensajes en tu correo electronico</li>
                                    <li><i class="fa fa-check"></i> Prioridad en las Busquedas</li>
                                    <li><i class="fa fa-check"></i> Mejor reputación del perfil</li>
                                </ul>
                            </div>
                            <div class="st-web">                                
                                <a href="premium" class="btn btn-success">¡Contrátalo!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title promo">Profesional</h3>
                            </div>
                            <div class="panel-body">
                                <div class="price">
                                @if(Session::get('idpais')=='2')
                                COP $ 190.000
                                @elseif(Session::get('idpais')=='4')
                                EUR $ 99
                                @else  
                                USD $ 99
                                @endif
                                <i>/año</i></div>
                                <ul>
                                    <li><i class="fa fa-check"></i> Dominio Propio (www.tunombre.com)</li>
                                    <li><i class="fa fa-check"></i> 12 Plantillas de diseño web</li>
                                    <li><i class="fa fa-check"></i> Hosting Propio Personalizado</li>
                                    <li><i class="fa fa-check"></i> 30 Imágenes en Portafolio</li>
                                    <li><i class="fa fa-check"></i> Soporte Tecnico Personalizado</li>
                                    <li><i class="fa fa-check"></i> Sin Publicidad</li>
                                    <li><i class="fa fa-check"></i> Buzon de contacto empresarial</li>
                                    <li><i class="fa fa-check"></i> Mensajes en tu correo electronico</li>
                                    <li><i class="fa fa-check"></i> Alta Prioridad en las busquedas</li>
                                    <li><i class="fa fa-check"></i> Reputación alta del perfil</li>
                                    <li><i class="fa fa-check"></i> Correo Corporativo contacto@tunombre.com</li>
                                </ul>
                            </div>
                            <div class="st-web">
                                <a href="profesional" class="btn btn-success">¡Contrátalo!</a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="pad col-sm-12">
                    <div class="col-sm-6">
                        <p>Tu propio sitio web</p>
                        <div class="well">
                         <img src="img/flat/fac.png" width="90px"><br><br>
                            Dale prestigio a tu vida laboral, crea un sitio web como un verdadero profesional, nosotros te damos las herramientas para que tengas un lugar exclusivo para ti, donde otros profesionales y empresarios puedan conocerte.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Mi Protafolio online</p>
                        <div class="well">
                        <img src="img/flat/empresas.png" width="90px"><br><br>
                            Lleva tus trabajos a donde vayas. Necesitas mostrar tu trabajo como un verdadero profesional? Diseña tu portafolio de trabajo en pocos minutos, sube fotografias o cualquier tipo de imagen y muestra lo talentoso que eres.
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="pad col-sm-12">
                    <div class="col-sm-6">
                        <p>Mi oficina virtual</p>
                        <div class="well">
                         <img src="img/flat/hand.png" width="90px"><br><br>
                            Dale prestigio a tu vida laboral, crea un sitio web como un verdadero profesional, nosotros te damos las herramientas para que tengas un lugar exclusivo para ti, donde otros profesionales y empresarios puedan conocerte.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>Diseños Increibles</p>
                        <div class="well">
                        <img src="img/flat/bulb.png" width="90px"><br><br>
                            Lleva tus trabajos a donde vayas. Necesitas mostrar tu trabajo como un verdadero profesional? Diseña tu portafolio de trabajo en pocos minutos, sube fotografias o cualquier tipo de imagen y muestra lo talentoso que eres.
                        </div>
                    </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>  
@stop

@extends('frontend/footer')