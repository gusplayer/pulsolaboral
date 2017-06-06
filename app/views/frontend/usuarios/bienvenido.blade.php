@extends('frontend.master')
 
 
@section('contenido')

   
        <div class="container">
            <div class="row acceso">
                 <div class="alert alert-info alert-dismissible" role="alert">
                           <center><strong><h1>Bienvenido !</h1></strong> <p>Automáticamente nuestro revolucionario sistema creara tu sitio web profesional, totalmente gratis. Síguenos en las redes sociales y comparte con tus amigos para que tambien puedan registrarse en esta increible plataforma.
                            </p>
                            
                            </center>
                           </div>
                          <center><div class="fb-like" data-href="https://www.facebook.com/pulsolaboral" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div></center><br>
               
                <div class="form box">

                        {{ Form::open(array('url' => 'bienvenido','class' => 'form-horizontal')) }}

                        @if(Session::has('mensaje_error'))
                        <div class="form-group">
                        <div class="col-sm-12">
                        <div class="alert alert-danger">
                        {{ Session::get('mensaje_error') }}
                        </div>
                        </div>
                        </div>
                        @endif                            

                            <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('username'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('username') }}
                                 </div>
                                 @endif

                                {{ Form::text('username', Input::old('username'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Username','pattern' => '[a-zA-Z0-9]+','title' => 'Unicamente escriba letras y numeros, no se aceptan espacios en blanco, simbolos, tildes ni signos','required'=>'required')) }}

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('ocupacion'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('ocupacion') }}
                                 </div>
                                 @endif

                                   {{ Form::text('ocupacion', Input::old('ocupacion'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Ocupación / Profesión','pattern' => '[a-zA-Z0-9ñÑáéíóú ]+','title' => 'Unicamente escriba letras, no se aceptan numeros, simbolos, tildes ni signos','required'=>'required')) }}                
                                </div>
                            </div>

                              <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('profesion'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('profesion') }}
                                 </div>
                                 @endif
                                    
                                    <select name="profesion"  class="form-control" required>
                                    <option value="">Seleccione Categoria</option>
                                    @foreach ($profesiones as $profesion)
                                    <option value={{$profesion->id_profesion}}>{{$profesion->nombre_profesion}}</option>
                                    @endforeach
                                
                              </select>                
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('region'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('region') }}
                                 </div>
                                 @endif
                                    
                                    <select name="region"  class="form-control" required>
                                    <option value="">Regiones de {{Session::get('pais')}}</option>
                                    <option value="0">Todas las regiones</option>
                                    @foreach ($regiones as $region)
                                    <option value={{$region->id}}>{{$region->nombreregion}}</option>
                                    @endforeach
                                
                              </select>                
                                </div>
                            </div>

                             <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('ciudad'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('ciudad') }}
                                 </div>
                                 @endif

                                   {{ Form::text('ciudad', Input::old('ciudad'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Ciudad','pattern' => '[a-zA-Z0-9ñÑáéíóú ]+','title' => 'Unicamente escriba letras, no se aceptan numeros, simbolos, tildes ni signos','required'=>'required')) }}                
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" role="button">Crear Perfil Profesional</button><br><br>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
@stop

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3&appId=1631686177059188";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@extends('frontend/footer')