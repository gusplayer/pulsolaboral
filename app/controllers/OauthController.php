<?php


class OauthController extends BaseController{

	/**
 * Login user with facebook
 *
 * @return void
 */

public function loginWithFacebook() {

    // get data from input
    
    $code = Input::get( 'code' );

    /*$error_code = Input::get( 'error_code' );

    if($error_code == 200)
    {
    return Redirect::route( 'login' )->with( 'error', 'Por favor acepte para poder ingresar con Facebook' );
    }*/

    // get fb service
    $fb = OAuth::consumer( 'Facebook' );

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $code ) ) {

        // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken( $code );

        // Send a request with it
        $result = json_decode( $fb->request( '/me' ), true );

        /*dd($result);*/

             // Password sin hash para autenticar usuario
             $profile =  DB::table('usr_login')->where('email',$result['email'] )->first();

             if (empty($profile)) {

                //guardar datos de nuevo usuario
                //estado login = 3; define q es nuevo usuario
                //estado user = 1; el usuario no aparece en las busquedas
                $Login=new Login;
                $Login->password=Hash::make($result['id']);
                $Login->email=$result['email'];
                $Login->estado='3';
                $Login->save();
               
                  if (Auth::attempt(array('password' => $result['id'],'email' => $result['email']), true))
                        
                       {
                        if($result['gender']=="female")
                            { $genero=1; }
                        else{ $genero=0; }

                        $id_usuario=Auth::user()->id;

                        $Usuario=new Usr;
                        $Usuario->id=$id_usuario;
                        $Usuario->nombre=$result['first_name'];
                        $Usuario->apellido=$result['last_name'];
                        $Usuario->foto_perfil="http://graph.facebook.com/".$result['id']."/picture?type=large";
                        $Usuario->genero=$genero;
                        $Usuario->estado='1';
                        $Usuario->save();

                        $Red= new Red;
                        $Red->id=$id_usuario;
                        $Red->facebook=$result['link'];
                        $Red->save();

                        $Experiencia= new Experiencia;
                        $Experiencia->id_usr=$id_usuario;
                        $Experiencia->save();

                        $Experiencia= new Experiencia;
                        $Experiencia->id_usr=$id_usuario;
                        $Experiencia->save();

                        $Experiencia= new Experiencia;
                        $Experiencia->id_usr=$id_usuario;
                        $Experiencia->save();

                        $Educacion= new Educacion;
                        $Educacion->id_usr=$id_usuario;
                        $Educacion->save();

                        $Educacion= new Educacion;
                        $Educacion->id_usr=$id_usuario;
                        $Educacion->save();

                        $Educacion= new Educacion;
                        $Educacion->id_usr=$id_usuario;
                        $Educacion->save();

                        return Redirect::to('bienvenido');
                       }
                       else
                       {
                        return Redirect::to('login')->with('mensaje_error', 'Ocurrio algun error en tu registro, intenta acceder');
                       }
            }//if si el perfil no existe
            //autenticamos el usuario, para iniciar sesion
            
            
            $user = $profile->id;

            Auth::loginUsingId($user);
            
             if (Auth::user()->email)
                       {
                            if(Auth::user()->estado=='1')
                                {
                                $plantilla = DB::table('usr_template')->where('id',Auth::user()->id)->first();
                                Session::put('username', $plantilla->username);

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
                        return "no logueado";
                       }
    }
    // if not ask for permission first
    else {
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
         return Redirect::to( (string)$url );
    }

}


}
?>