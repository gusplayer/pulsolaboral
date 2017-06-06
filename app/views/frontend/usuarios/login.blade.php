@extends('frontend/master')

@section('contenido')

    
        <div class="container">
            <div class="row acceso">
                <h1>Entrar</h1>

                

                <div class="st-fb">
                    <a href="facebook" class="btn btn-primary" role="button">
                        <span class="i-fb fa fa-facebook"></span>
                        <span class="i-txt">Inicia sesión con Facebook aqui</span>
                    </a>
                </div>

                <div class="form box">
                    {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}

                         @if(Session::has('mensaje_error'))
                        <div class="form-group">
                        <div class="col-sm-12">
                        <div class="alert alert-danger">
                        {{ Session::get('mensaje_error') }}
                        </div>
                        </div>
                        </div>
                        @endif

                         @if(Session::has('mensaje_exito'))
                        <div class="form-group">
                        <div class="col-sm-12">
                        <div class="alert alert-success">
                        {{ Session::get('mensaje_exito') }}
                        </div>
                        </div>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="col-sm-12">
                                {{ Form::email('email', null, array('id' => 'inputEmail3','class' => 'form-control','placeholder' => 'Correo Electronico', 'titlle'=>'Escibe una dirección de correo valida','required'=>'required')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                {{ Form::password('pass', array('class' => 'form-control','id' => 'inputPassword3','placeholder'=>'Password','required'=>'required')) }}
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" role="button">Iniciar Sesión</button><br><br>
                        <a href="#" data-toggle="modal" data-target="#recuperarCont">Olvidaste tu contraseña ?</a><br><br>
                        <div class="alert alert-info alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <center><strong>No estas registrado?</strong> Crea tu cuenta gratis.<br>
                          <a href="registro">Click Aqui !</a></center>
                        </div>
                    {{ Form::close() }}
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
                    {{ Form::open(array('url' => 'recuperar'))}}
                        <div class="form-group">

                            <input type="email" name="email" class="form-control" placeholder="example@example.com">
                        </div>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Recuperar contraseña</button>
                </div>
                    {{ Form::close() }}
            </div>
        </div>
    </div>
    
@stop

@extends('frontend/footer')