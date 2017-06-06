<?php 

/*use Illuminate\Database\Eloquent\ModelNotFoundException;*/
class UsuariosController extends BaseController /*implements UserInterface*/{
 

  /**
     * Formulario de registro de usuarios me lleva a usuario/crear.blade.php
     *
     *
     */
    public function cambiarPais($pais,$idpais)
    {
                Session::put('pais', $pais);
                Session::put('idpais',  $idpais);

     return Redirect::back();
    }

     public function mostrarHome()
    {
          if(!Session::get('pais'))
                {                  
                  Session::put('pais', 'Colombia');
                  Session::put('idpais', '2');
                }

                return View::make('home');
    }

    public function ListaPerfiles()
    {
         if(!Session::get('pais'))
         {                  
                  Session::put('pais', 'Colombia');
                  Session::put('idpais', '2');
         }

        $region = Input::get('region');
        $profesion = Input::get('profesion');

        $profesiones = Profesion::all();
        $pais=Session::get('idpais');
        $regiones = DB::table('regiones')->where('paisregion',$pais)->get();

        /*si region es iugal a todos = 0 */
     
      
            $perfiles = DB::table('usrs')
            ->join('profesiones', 'usrs.profesiones', '=', 'profesiones.id_profesion')
            ->join('regiones', 'usrs.region', '=', 'regiones.id')
            ->join('paises', 'paises.id', '=', 'usrs.pais')
            ->join('usr_template', 'usrs.id', '=', 'usr_template.id_usr')
            ->join('visitas', 'usrs.id', '=', 'visitas.id')
            ->where('usrs.estado','0')
            ->orderBy('usrs.reputacion')
            /*->orderBy(DB::raw('RAND()'))*/
            /*->orWhere('usrs.profesiones',$region)*/
            ->get();       
      
        return View::make('frontend.usuarios.lista', array('perfiles' => $perfiles,'profesiones' => $profesiones,'regiones' => $regiones));
    }

    public function formularioRegistro()
    {
        return View::make('frontend.usuarios.registro');
    }

     public function mostrarTerminos()
    {
        return View::make('frontend.usuarios.terminos');
    }

     public function mostrarPlanes()
    {
         if(!Session::get('pais'))
         {                  
                  Session::put('pais', 'Colombia');
                  Session::put('idpais', '2');
         }
        return View::make('frontend.usuarios.planes');
    }

     public function mostrarPremium()
    {
        if(!Session::get('pais'))
         {                  
                  Session::put('pais', 'Colombia');
                  Session::put('idpais', '2');
         }            

        return View::make('frontend.usuarios.premium');
    }

     public function mostrarProfesional()
    {
        if(!Session::get('pais'))
         {                  
                  Session::put('pais', 'Colombia');
                  Session::put('idpais', '2');
         }            

        return View::make('frontend.usuarios.profesional');
    }

    public function guardarFacturacion()
    {

        $rules = array(
        //comprobamos que el nombre de usuario dea unico y cumpla con las reglas
    'nombre' => 'required|min:2|max:50|regex:/(^[A-Za-z0-9ñÑ ]+$)+/',
    'email' => 'required|email|regex:/(^[A-Za-z0-9ñÑ@#. ]+$)+/',
    'telefono' => 'required|min:2|max:40|regex:/(^[A-Za-z0-9ñÑ ]+$)+/',
    'ciudad' => 'required|min:2|max:50|regex:/(^[A-Za-z0-9ñÑ ]+$)+/',
    'mediopago' => 'required|min:2|max:50|regex:/(^[A-Za-z0-9ñÑ ]+$)+/',
    'concepto' => 'required|min:2|max:50|regex:/(^[A-Za-z0-9ñÑ ]+$)+/',
    );
     //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'Tu dirección web es un campo obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',            
            'max' => 'Tu dirección web  no puede tener más de :max carácteres.',
            'regex' => 'El campo :attribute no esta registrado correctamente, recuerda que no puedes usar tildes ni signos especiales.',
            
        ); 
        
        $validation = Validator::make(Input::all(), $rules, $messages);

        if ($validation->fails())
        { 
            return Redirect::back()->withErrors($validation)->withInput();
        }
        else
        {
            if(Auth::check())
            {
                $usuario=Auth::user()->id;
            }
            else
            {
                $usuario='000';
            }

        $nombre = Input::get('nombre');
        $email = Input::get('email');
        $telefono = Input::get('telefono');
        $ciudad = Input::get('ciudad');
        $mediopago = Input::get('mediopago');
        $pais = Session::get('pais');
        $concepto = Input::get('concepto');

         $Recibos= new Recibos;
         $Recibos->id_usr=$usuario;
         $Recibos->nombre=$nombre;
         $Recibos->email=$email;
         $Recibos->telefono=$telefono;
         $Recibos->ciudad=$ciudad;
         $Recibos->pais=$pais;
         $Recibos->medio_pago=$mediopago;
         $Recibos->estado="0";
         $Recibos->concepto=$concepto;
         $Recibos->valor="0";
         $Recibos->save();

        if($mediopago=='Baloto')
        { return View::make('frontend.usuarios.baloto')->with('valor', 'aqui el valor'); }
        elseif($mediopago=='Efecty')
        { return View::make('frontend.usuarios.baloto')->with('valor', 'aqui el valor'); }
        else
        { return View::make('frontend.usuarios.paypal'); }

        }//end else verificacion
    }

    public function mostrarPagar()
    {
        return View::make('frontend.usuarios.pagar');
    }

    public function mostrarVerificacion()
    {
        return View::make('frontend.usuarios.facturacion');
    }

    public function guardarVerificacion()
    {
        return View::make('frontend.usuarios.facturacion');
    }

    public function mostrarContacto()
    {
        return View::make('frontend.usuarios.facturacion');
    }

    public function guardarContacto()
    {
        return View::make('frontend.usuarios.facturacion');
    }

     public function mostrarEmpleos()
    {
        return View::make('frontend.usuarios.login');
    }

     public function mostrarEmpresas()
    {
        return View::make('frontend.usuarios.login');
    }

     public function mostrarPostergar()
    {
        return View::make('frontend.usuarios.planes');
    }

    public function formularioBuscar()
    {
        $profesiones = Profesion::all();
        $regiones = Region::all();

        return View::make('frontend.includes.buscar', array('profesiones' => $profesiones,'regiones' => $regiones));
    }

     public function BuscarPerfiles()
    {
        $region = Input::get('region');
        $profesion = Input::get('profesion');

        $profesiones = Profesion::all();
         $pais=Session::get('idpais');
        $regiones = DB::table('regiones')->where('paisregion',$pais)->get();

        /*si region es iugal a todos = 0 */
        if($region==0 && $profesion>0)
        {
            $perfiles = DB::table('usrs')
            ->join('profesiones', 'usrs.profesiones', '=', 'profesiones.id_profesion')
            ->join('regiones', 'usrs.region', '=', 'regiones.id')
            ->join('paises', 'paises.id', '=', 'usrs.pais')
            ->join('usr_template', 'usrs.id', '=', 'usr_template.id_usr')
            ->join('visitas', 'usrs.id', '=', 'visitas.id')
            ->where('usrs.profesiones',$profesion)
            ->where('usrs.estado','0')
            ->orderBy('usrs.foto_perfil')
            ->get();                
        }
        elseif($region>0 && $profesion==0)
        {
            $perfiles = DB::table('usrs')
            ->join('profesiones', 'usrs.profesiones', '=', 'profesiones.id_profesion')
            ->join('regiones', 'usrs.region', '=', 'regiones.id')
            ->join('paises', 'paises.id', '=', 'usrs.pais')
            ->join('usr_template', 'usrs.id', '=', 'usr_template.id_usr')
            ->join('visitas', 'usrs.id', '=', 'visitas.id')
            ->where('region',$region)
            ->where('usrs.estado','0')
            ->orderBy('usrs.foto_perfil')
            ->get();
             /*->orWhere('usrs.profesiones',$region)*/                
                
        }
        elseif($region>0 && $profesion>0)
        {
            $perfiles = DB::table('usrs')
            ->join('profesiones', 'usrs.profesiones', '=', 'profesiones.id_profesion')
            ->join('regiones', 'usrs.region', '=', 'regiones.id')
            ->join('paises', 'paises.id', '=', 'usrs.pais')
            ->join('usr_template', 'usrs.id', '=', 'usr_template.id_usr')
            ->join('visitas', 'usrs.id', '=', 'visitas.id')
            ->where('usrs.region',$region)
            ->where('usrs.profesiones',$profesion)
            ->where('usrs.estado','0')
            ->orderBy('usrs.reputacion')
            /*->orWhere('usrs.profesiones',$region)*/
            ->get();
            
        }
        elseif($region==0 && $profesion==0)
        {
            $perfiles = DB::table('usrs')
            ->join('profesiones', 'usrs.profesiones', '=', 'profesiones.id_profesion')
            ->join('regiones', 'usrs.region', '=', 'regiones.id')
            ->join('paises', 'paises.id', '=', 'usrs.pais')
            ->join('usr_template', 'usrs.id', '=', 'usr_template.id_usr')
            ->join('visitas', 'usrs.id', '=', 'visitas.id')
            ->where('usrs.estado','0')
            ->orderBy('usrs.reputacion')
            /*->orderBy(DB::raw('RAND()'))*/                
            /*->orWhere('usrs.profesiones',$region)*/
            ->get();
                
        }        
      
        return View::make('frontend.usuarios.lista', array('perfiles' => $perfiles,'profesiones' => $profesiones,'regiones' => $regiones));
    }


 /**
     * Crea un nuevo usuario en la base de datos
     */
    public function crearUsuario()
    {
        //creamos un array con las reglas que deben cumplir nuestro formulario
        $rules = array(
        'pass' => 'required|min:5',
        'genero' => 'required|numeric',
        'email' => 'required|email|regex:/(^[A-Za-z0-9ñÑ@#. ]+$)+/|unique:usr_login,email',
        'nombre' => 'required|min:2|max:50|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        'apellido' => 'required|min:2|max:50|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        );
        //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'Llena el siguiente campo con tus datos',
            'min' => 'La contraseña debe tener almenos 6 caracteres o digitos.',
            'max' => 'El campo no debe tener mas de 50 caracteres.',
            'email' => 'Escribe tu correo electronico correctamente',
            'unique' => 'Este correo ya se encuentra registrado por otro usuario',
             'regex' => 'El campo :attribute solo puede contener numeros o letras, no se aceptan simbolos, tildes ni signos.',
            
        );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,
        //si no le pasamos los mensajes los pondrá en inglés, que son los que vienen
        //por defecto con laravel
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        //y los campos que haya ingresado el usuario para que queden grabados
        if ($validation->fails())
        { 
            return Redirect::to('registro')->withErrors($validation)->withInput(); 
        //Si no hay errores de validacion, ejecutamos el codigo y redirigimos
        }
        else
        {
             /*
             Asignamos una foto de perfil por defecto para el usuario
              */
             
            $genero = Input::get('genero');
            if($genero==0){
                      $foto='photos/per3.jpg';
                    }
                     //Si no se asume que es mujer y la imagen por defecto se le asigna
            else{
                     $foto='photos/per2.jpg';
                   }

            //hacemos uso del método estático que hemos creado llamado insert users
            //del modelo usuarios, así de fácil            
            $nombre = Input::get('nombre');
            $apellido = Input::get('apellido');
            $pass = Hash::make(Input::get('pass'));
            $email = Input::get('email');
            // Password sin hash para autenticar usuario
         
            $password = Input::get('pass');
            $Login=new Login;
            $Login->password=$pass;
            $Login->email=$email;
            $Login->estado='3';
            $Login->save();
           
        }    /**
             * Autenticamos el usuario ya registrado
             */   
                       if (Auth::attempt(array('password' => $password,'email' => $email), true /*Input::get('remember-me', 0)*/ ))
                        
                       {
                        $id_usuario=Auth::user()->id;

                        $Usuario=new Usr;
                        $Usuario->id=$id_usuario;
                        $Usuario->nombre=$nombre;
                        $Usuario->apellido=$apellido;
                        $Usuario->foto_perfil=$foto;
                        $Usuario->genero=$genero;
                        $Usuario->save();

                        $Red= new Red;
                        $Red->id=$id_usuario;
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
                        return Redirect::to('registro')->with('mensaje_error', 'Ocurrio algun error en tu registro, intenta de nuevo');
                       }
    }
  
    /**
     * Mustra la lista con todos los usuarios
     */
    /*public function mostrarUsuarios()
    {
        $usuarios = Usuario::all();       
        
        return View::make('usuarios.lista', array('usuarios' => $usuarios));
    }*/
  

    public function verPagina($url)
    {
        
       
    $plantilla = DB::table('usr_template')->where('username',$url)->first();
    
    // Si el usuario no existe entonces lanzamos un error 404 :(
        if (is_null ($plantilla))
           {
           return Redirect::to('http://pulsolaboral.com');
            
           }
        else
        {
           
           /* $usuarios = Usr::all();
            $profesiones = Profesion::all();*/

            $usuario = $plantilla->id_usr;

                $usuarios = DB::table('usrs')
                ->join('profesiones', 'usrs.profesiones', '=', 'profesiones.id_profesion')
                ->join('regiones', 'usrs.region', '=', 'regiones.id')
                ->join('paises', 'paises.id', '=', 'usrs.pais')
                ->join('usr_login', 'usr_login.id', '=', 'usrs.id')
                ->where('usrs.id',$usuario)
                ->get();

                $habilidades = DB::table('usr_habilidades')
                ->where('id_usr',$usuario)
                ->get();

                $educaciones = DB::table('usr_educacion')
                ->join('estado_edu', 'estado_edu.id_estado_edu', '=', 'usr_educacion.estado')                
                ->where('id_usr',$usuario)
                ->get();

                  $experiencias = DB::table('usr_experiencias')
                   ->join('estado_edu', 'estado_edu.id_estado_edu', '=', 'usr_experiencias.estado')
                ->where('id_usr',$usuario)
                ->get();

                $disenos = DB::table('usr_disenos')
                ->join('fondos', 'fondos.id', '=', 'usr_disenos.id_fondo')
                ->join('colores', 'colores.id', '=', 'usr_disenos.id_color')
                ->where('usr_disenos.id',$usuario)
                ->get();

                 $categorias = DB::table('categoria_portafolio')
                ->where('id_usr',$usuario)
                ->get();


                 $portafolios = DB::table('usr_portafolio')
                ->join('categoria_portafolio', 'categoria_portafolio.id', '=', 'usr_portafolio.id_categoria')
                ->where('usr_portafolio.id_usr',$usuario)
                ->get();

                 $redes = DB::table('usr_redes')->where('id',$usuario)->get();

                 $servicios = DB::table('usr_servicios')->where('id_usr',$usuario)->get();

                 $tema = "template".$plantilla->template."."."index";

                 $Visita = Visitas::find($usuario);                
                 $visit = $Visita->cantidad + rand(1,3);
                 $Visita->cantidad = $visit;
                 $Visita->save();


           return View::make($tema, array(
            'usuarios' => $usuarios,
            'habilidades' => $habilidades,
            'educaciones' => $educaciones,
            'experiencias' => $experiencias,
            'disenos' => $disenos,
            'portafolios' => $portafolios,
            'categorias' => $categorias,
            'servicios' => $servicios,
            'redes' => $redes
            ));

        }
    }



}
?>