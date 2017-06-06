@extends('frontend.master')
 
@section('contenido')
   
        <div class="container">
            <div class="bill-cont box">
                <div class="head">
                    <ul class="cent">                        
                        <li>                            
                            <p>Plan <strong>Premium</strong> por 1 año
                            </p>
                            El mes te sale en
                            @if(Session::get('idpais')=='2')
                                 $15.800 pesos
                                @elseif(Session::get('idpais')=='4')
                                 $ 8 euros
                                @else  
                                 $ 8 dolares
                                @endif 
                        </li>
                        <li class="val">
                            <p><i class="fa fa-shopping-cart"></i>
                            @if(Session::get('idpais')=='2')
                                $190.000
                                @elseif(Session::get('idpais')=='4')
                                 EUR $99
                                @else  
                                 USD $99
                            @endif
                            </p>
                        </li>
                       
                    </ul>
                </div>
                <div class="cont">
                    <div class="cent">
                        {{ Form::open(array('url' => 'facturacion','class' => 'form-inline')) }}

                             @if($errors->has())
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first() }}
                                 </div>
                             @endif
                        
                            <div class="row">
                                <h2 class="title bo col-sm-12"><strong>Registra tus datos</strong></h2><br>
                                <div class="form-group col-sm-6">
                                    <label for="nombre">Nombre y Apellido</label><br>                                    
                                     {{ Form::text('nombre', Input::old('nombre'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Nombre y Apellido','pattern' => '[a-zA-ZñÑ ]+','title' => 'Unicamente escriba letras, no se aceptan numeros, simbolos, tildes ni signos','required'=>'required')) }}  
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="correo">Email</label><br>
                                    {{ Form::email('email', Input::old('email'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Email','title'=>'Escribe tu correo correctamente, la necesitamos para verificar tu pago','required'=>'required')) }}
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="tel">Telefono</label><br>
                                     {{ Form::text('telefono', Input::old('telefono'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Telefono','pattern' => '[a-zA-Z0-9 ]+','title' => 'Unicamente escriba numeros','required'=>'required')) }}  
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="ciud">Ciudad</label><br>
                                     {{ Form::text('ciudad', Input::old('ciudad'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Ciudad','pattern' => '[a-zA-ZñÑ ]+','title' => 'Unicamente escriba letras, no se aceptan numeros, simbolos, tildes ni signos','required'=>'required')) }}  
                                </div>

                                <input type="hidden" name="concepto" value="Plan Profesional">

                               
                            </div>
                            <div class="row">
                                <h2 class="title bo col-sm-12"><strong>Medio de pago</strong></h2><br>
                                <div class="pag">

                                     @if(Session::get('idpais')=='2')
                                  <label class="radio-inline">
                                      <input id="Otro1" name="mediopago" type="radio" value="Baloto" onclick="showMe()" required><img src="img/pagos/blo.png" >
                                      </label>

                                     <label class="radio-inline">
                                      <input id="Otro2" name="mediopago" type="radio" value="Efecty" onclick="showMe()" required><img src="img/pagos/efe.jpg">
                                    </label>

                                    <label class="radio-inline">
                                      <input id="Otro3" name="mediopago" type="radio" value="Paypal" onclick="showMe()" required><img src="img/pagos/paypal.jpg">
                                    </label>
                               
                                @else  
                                 <label class="radio-inline">
                                      <input id="Otro3" name="mediopago" type="radio" value="Paypal" onclick="showMe()" checked="checked" ><img src="img/pagos/paypal.jpg">
                                    </label>
                                @endif 
                 
                                </div>

                                <div id="oculto1" style="display:none">
                                    <div class="well">
                                      <img src="img/pagos/citib.png" width="95px"><br>
                                        Paga en efectivo en cualquier punto Baloto de tu ciduad. Tambien puedes acercarte al Banco CITIBANK y hacer tu consignacion. Esta opcion es ideal si no tienes o no quieres usar tarjetas de credito.
                                    </div>
                                </div>                                 
                                <div id="oculto2" style="display:none" >
                                    <div class="well">
                                        <img src="img/pagos/efe2.jpg" width="95px"><br>
                                        Acercate a cualquier punto EFECTY Servientrega de tu ciudad y realiza tu pago en efectivo.
                                    </div>
                                </div>
                                <div id="oculto3" style="display:display" >
                                    <div class="well">
                                        <img src="img/pagos/pay2.png" width="95px"><br>
                                        Pago seguro desde cualquier parte del mundo con tu cuenta PAYPAL. Podras realizar tu pago con tu tarjeta de credito o diferentes medios de pago dependiendo del pais donde te encuentres.
                                    </div>
                                </div>
                                <div class="col-sm-offset-4 col-sm-4">
                                    <button type="submit" class="btn btn-danger" role="button">Uneté a Pulsolaboral</button>
                                </div>
                            </div>
                         {{ Form::close() }}
                    </div>
                </div>
                <div style="margin-bottom:20px"></div>
            </div>
        </div>
    </div>
@stop

@extends('frontend/footer')