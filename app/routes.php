<?php 


Route::group(array('domain' => 'pulsolaboral.com'), function()
{


/**
 * Rutas de Pagina principal
 */
Route::get('/', array('uses' => 'UsuariosController@mostrarHome'));

Route::get('inicio', array('uses' => 'UsuariosController@mostrarHome'));

Route::get('registro', array('uses' => 'UsuariosController@formularioRegistro'));

Route::post('registro', array('uses' => 'UsuariosController@crearUsuario'));

Route::get('profesionales', array('uses' => 'UsuariosController@ListaPerfiles'));

Route::post('profesionales', array('uses' => 'UsuariosController@buscarPerfiles'));

Route::get('empleos', array('uses' => 'UsuariosController@mostrarEmpleos'));

Route::get('empresas', array('uses' => 'UsuariosController@mostrarEmpresas'));

Route::get('terminos', array('uses' => 'UsuariosController@mostrarTerminos'));

Route::get('planes', array('uses' => 'UsuariosController@mostrarPlanes'));

Route::get('premium', array('uses' => 'UsuariosController@mostrarPremium'));

Route::get('profesional', array('uses' => 'UsuariosController@mostrarProfesional'));

Route::post('facturacion', array('uses' => 'UsuariosController@guardarFacturacion'));

Route::get('pagar', array('uses' => 'UsuariosController@mostrarPagar'));

Route::get('verificacion', array('uses' => 'UsuariosController@mostrarVerificacion'));

Route::post('verificacion', array('uses' => 'UsuariosController@guardarVerificacion'));

Route::get('postergar', array('uses' => 'UsuariosController@mostrarPostergar'));

Route::get('verificando', array('uses' => 'UsuariosController@mostrarVerificando'));

Route::get('contacto', array('uses' => 'UsuariosController@mostrarContacto'));

Route::post('contacto', array('uses' => 'UsuariosController@mostrarContacto'));

Route::get('pais/{pais}/{idpais}', array('uses' => 'UsuariosController@cambiarPais'));

/*
Login y registro de usuarios
 */

Route::get('login', array('uses' => 'AuthController@showLogin'));

Route::post('login', array('uses' => 'AuthController@postLogin'));

Route::get('logout', array('uses' => 'AuthController@logOut'));

/*
login redes sociales
 */
 Route::get('facebook', array('as' => 'facebook', 'uses' => 'OauthController@loginWithFacebook'));

/*
Recuperar contraseña - password reminder
 */

Route::get('recuperar', array('uses' => 'RemindersController@getRemind'));

Route::post('recuperar', array('uses' => 'RemindersController@postRemind'));

Route::get('reset/{token}', array('uses' => 'RemindersController@getReset'));

Route::post('reset', array('uses' => 'RemindersController@postReset'));

/*Envio de mails de notificaciones*/
/*Al registrarse el usuario exitosamente*/
Route::get('mail/welcome', array('uses' => 'MailController@mailWelcome'));

/*
Rutas administrador de usuario, debe estar logueado para acceder
 */

Route::group(array('before' => 'auth'), function()
         {
         /**
          * Rutas para AdminCOntroller
          */
         Route::get('bienvenido', array("before" => 'roles:3,login','uses' => 'AdminController@crearWizard'));

         Route::post('bienvenido', array('uses' => 'AdminController@guardarWizard'));

         Route::get('perfil', array("before" => 'roles:0-1-4,bienvenido','uses' => 'AdminController@adminPerfil'));

            Route::post('editar_perfil', array('uses' => 'AdminController@editarPerfil'));

            Route::post('editar_imagen_perfil', array('uses' => 'AdminController@editarImagenPerfil'));

            Route::post('editar_username', array('uses' => 'AdminController@editarUsername'));

            Route::post('editar_redes', array('uses' => 'AdminController@editarRedes'));

            Route::post('editar_descripcion', array('uses' => 'AdminController@editarDescripcion'));

         Route::get('educacion', array('uses' => 'AdminController@mostrarEducacion'));

            Route::post('editar_educacion', array('uses' => 'AdminController@editarEducacion'));

         Route::get('experiencia', array('uses' => 'AdminController@mostrarExperiencia'));

            Route::post('editar_experiencia', array('uses' => 'AdminController@editarExperiencia'));

         Route::get('habilidad', array('uses' => 'AdminController@mostrarHabilidad'));

             Route::post('editar_habilidad', array('uses' => 'AdminController@editarHabilidad'));

             Route::post('editar_servicio', array('uses' => 'AdminController@editarServicio'));

         Route::get('portafolio', array('uses' => 'AdminController@mostrarPortafolio'));

            Route::post('guardar_portafolio', array('uses' => 'AdminController@guardarPortafolio'));

            Route::get('eliminar_portafolio/{imagen}', array('uses' => 'AdminController@eliminarPortafolio'));

            Route::post('guardar_categoria', array('uses' => 'AdminController@guardarCategoria'));

            Route::get('eliminar_categoria/{categoria}', array('uses' => 'AdminController@eliminarCategoria'));

         Route::get('visual', array('uses' => 'AdminController@mostrarVisual'));

            Route::get('visual/fondo/{imagen}', array('uses' => 'AdminController@cambiarFondo'));

            Route::get('visual/template/{imagen}', array('uses' => 'AdminController@cambiarTemplate'));

            Route::get('visual/color/{imagen}', array('uses' => 'AdminController@cambiarColor'));

         Route::get('imprimir', array('uses' => 'AdminController@mostrarImprimir'));

         Route::get('configuracion', array("before" => 'roles:0-1,inicio','uses' => 'AdminController@mostrarConfiguracion'));

            Route::post('editar_pass', array('uses' => 'AdminController@editarPass'));
         
         });
         
/*
Ir a pagina personal del usuario creado con pulso laboral
 */
Route::get('{url}',array('uses' => 'UsuariosController@verPagina'));

});//end domain



Route::group(array('domain' => '{url}.pulsolaboral.com'), function()
{
Route::get('/',array('uses' => 'UsuariosController@verPagina'));

Route::get('{url}',function()
    {
    return Redirect::to('http://pulsolaboral.com');
    });


});

?>