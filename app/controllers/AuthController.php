<?php


class AuthController extends BaseController{

/**
     * Muestra el formulario para login.
     */
    public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            if(Auth::user()->estado=='1')
              {
                return Redirect::to('perfil');
              }
              elseif (Auth::user()->estado=='3')
               {
                 return Redirect::to('bienvenido');
               }
               else
               {
                  return 'La cuenta a la que esta intentando entrar se encuentra suspendida, pongase en contacto con soporte tecnico.';
               }
        }
        else
        {
        if(!Session::get('pais'))
                {                  
                  Session::put('pais', 'Colombia');
                  Session::put('idpais', '2');
                }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
         return View::make('frontend/usuarios/login');
       }
    }

    /**
     * Valida los datos del usuario.
     */
    public function postLogin()
    {

      $email = Input::get('email');
      $password =  Input::get('pass');
      // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 
     if (Auth::attempt(array('password' => $password,'email' => $email), true /*Input::get('remember-me', 0)*/ ))
      /*if (Auth::attempt(array('email' => $email, 'password' => $pass)))*/
    {

                /*iniciar variable sesion del perfil del usuario*/
                

                if(Auth::user()->estado=='1')
                {
                  /*$plantilla = DB::table('usr_template')->where('id',Auth::user()->id)->first();
                  Session::put('username', $plantilla->username);*/

                  return Redirect::to('perfil');
                }
                elseif (Auth::user()->estado=='3') 
                {
                  return Redirect::to('bienvenido');
                }
                else
                {
                   return 'La cuenta a la que esta intentando entrar se encuentra suspendida, pongase en contacto con soporte tecnico.';
                }
                
               /* return Redirect::to('perfil');*/
               

    }
    else
    {
        return Redirect::to('login')->with('mensaje_error', 'Tus datos son incorrectos, asegurate de escribir correctamente tu correo y contraseña.
          <br><br>Si no estas registrado, entra con tu cuenta de facebook o llena el siguiente <a href="registro">formulario de registro</a>');
    }

    }

      public function logOut()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

}//fin  clase
?>