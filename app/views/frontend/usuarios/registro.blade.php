@extends('frontend.master')
 
 
@section('contenido')
         <div class="container">
            <div class="row acceso">
                <h1>Registrate Gratis</h1>
                <div class="st-fb">
                    <a href="facebook" class="btn btn-primary" role="button">
                        <span class="i-fb fa fa-facebook"></span>
                        <span class="i-txt">Entrar con tu cuenta Facebook</span>
                    </a>
                </div>
                <div class="form box">

                        {{ Form::open(array('url' => 'registro','class' => 'form-horizontal')) }}

                        @if(Session::has('mensaje_error'))
                        <div class="form-group">
                        <div class="col-sm-12">
                        <div class="alert alert-danger">
                        {{ Session::get('mensaje_error') }}
                        </div>
                        </div>
                        </div>
                        @endif 

                            @if(!$errors->has())
                            <div class="alert alert-info alert-dismissible" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <center><strong>No tienes una cuenta en facebook?</strong> Registra tus datos manualmente en el siguiente formulario El proceso de creación de tu cuenta puede tardar un poco mas.</center>
                           </div>
                           @endif

                            <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('nombre'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('nombre') }}
                                 </div>
                                 @endif

                                {{ Form::text('nombre', Input::old('nombre'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Nombre','pattern' => '[a-zA-Z0-9ñÑáéíóú ]+','title' => 'Unicamente escriba letras, no se aceptan numeros, simbolos, tildes ni signos','required'=>'required')) }}

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('apellido'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('apellido') }}
                                 </div>
                                 @endif

                                   {{ Form::text('apellido', Input::old('apellido'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Apellido','pattern' => '[a-zA-Z0-9ñÑáéíóú ]+','title' => 'Unicamente escriba letras, no se aceptan numeros, simbolos, tildes ni signos','required'=>'required')) }}                
                                </div>
                            </div>

                              <div class="form-group">
                                <div class="col-sm-12">

                                 @if($errors->has('genero'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('genero') }}
                                 </div>
                                 @endif

                                    <select name="genero"  class="form-control" required>
                                    <option value="0">Soy Hombre</option>
                                    <option value="1">Soy Mujer</option> 
                              </select>                
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">

                                  @if($errors->has('email'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('email') }}
                                 </div>
                                 @endif

                                   {{ Form::email('email', Input::old('email'), array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Email','title'=>'Escribe tu correo correctamente, lo necesitamos para verificar tu cuenta','required'=>'required')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">

                                  @if($errors->has('pass'))
                                 <div class="alert alert-danger">
                                 <i class="fa fa-exclamation-circle"> </i>{{ $errors->first('pass') }}
                                 </div>
                                 @endif

                                 {{ Form::password('pass', array('class' => 'form-control','id' => 'inputPassword3','placeholder' => 'Password','required'=>'required')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" checked="" required><a href="terminos" target="blank">Acepto los terminos y condiciones</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" role="button">Iniciar Sesión</button><br><br>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="recuperarCont" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p class="modal-title">Recupera tu contraseña !</p>
                    <span>Ingresa tu correo electronico para enviarte la nueva contraseña</span>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="example@example.com">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Cambiar contraseña</button>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('frontend/footer')