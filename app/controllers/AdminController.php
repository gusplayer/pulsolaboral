<?php 
class AdminController extends BaseController /*implements UserInterface*/{


public function adminPerfil()
{
    
    $usuario=Auth::user()->id;

    $menu = 'perfil';
    Session::put('menu', $menu);

     $datos = DB::table('usrs')
                ->join('profesiones', 'usrs.profesiones', '=', 'profesiones.id_profesion')
                ->join('paises', 'usrs.pais', '=', 'paises.id')
                ->join('regiones', 'usrs.region', '=', 'regiones.id')
                ->where('usrs.id',$usuario)
                ->get();

    $profesiones = Profesion::all();

    if(!Session::get('username') or !Session::get('foto'))
                {
                  $plantilla = DB::table('usr_template')
                  ->join('usrs', 'usrs.id', '=', 'usr_template.id')
                  ->where('usr_template.id',Auth::user()->id)->first();
                  Session::put('username', $plantilla->username);
                  Session::put('foto', $plantilla->foto_perfil);
                  Session::put('name', $plantilla->nombre);
                }

   
    $redes = DB::table('usr_redes')->where('id',$usuario)->get();

    $plantilla = DB::table('usr_template')->where('id',$usuario)->get();
    
    return  View::make('admin/perfil', array('datos' => $datos,'profesiones' => $profesiones,'plantilla' => $plantilla,'redes' => $redes));
    
           
}

public function mostrarEducacion()
{
    $usuario=Auth::user()->id;
    $menu = 'educacion';
    Session::put('menu', $menu);

       if(!Session::get('username'))
                {
                  $plantilla = DB::table('usr_template')
                  ->join('usrs', 'usrs.id', '=', 'usr_template.id')
                  ->where('usr_template.id',Auth::user()->id)->first();
                  Session::put('username', $plantilla->username);
                  Session::put('foto', $plantilla->foto_perfil);
                  Session::put('name', $plantilla->nombre);
                }

    $Educacion = DB::table('usr_educacion')->where('id_usr',$usuario)->get();
    $contador = 0;
    return View::make('admin/educacion', array('Educacion' => $Educacion,'contador' => $contador));
}

public function mostrarExperiencia()
{
    $usuario=Auth::user()->id;
    $menu = 'experiencia';
    Session::put('menu', $menu);

    $Experiencia = DB::table('usr_experiencias')->where('id_usr',$usuario)->get();
    $contador = 0;
    return View::make('admin/experiencia', array('Experiencia' => $Experiencia,'contador' => $contador));
}

public function mostrarHabilidad()
{
    $usuario=Auth::user()->id;
    $menu = 'habilidad';
    Session::put('menu', $menu);

       if(!Session::get('username') or !Session::get('foto'))
                {
                  $plantilla = DB::table('usr_template')
                  ->join('usrs', 'usrs.id', '=', 'usr_template.id')
                  ->where('usr_template.id',Auth::user()->id)->first();
                  Session::put('username', $plantilla->username);
                  Session::put('foto', $plantilla->foto_perfil);
                  Session::put('name', $plantilla->nombre);
                }

     $habilidades = DB::table('usr_habilidades')
                ->where('id_usr',$usuario)
                ->get();

     $servicios = DB::table('usr_servicios')
                ->where('id_usr',$usuario)
                ->get();
    
    return View::make('admin/habilidad',array('habilidades' => $habilidades,'servicios' => $servicios));
}

public function mostrarPortafolio()
{
    $usuario=Auth::user()->id;
    $menu = 'portafolio';
    Session::put('menu', $menu);

    $categorias = DB::table('categoria_portafolio')
                ->where('id_usr',$usuario)
                ->get();


    $portafolios = DB::table('usr_portafolio')
                ->where('usr_portafolio.id_usr',$usuario)
                ->get();

        if(!Session::get('username') or !Session::get('foto'))
                {
                  $plantilla = DB::table('usr_template')
                  ->join('usrs', 'usrs.id', '=', 'usr_template.id')
                  ->where('usr_template.id',Auth::user()->id)->first();
                  Session::put('username', $plantilla->username);
                  Session::put('foto', $plantilla->foto_perfil);
                  Session::put('name', $plantilla->nombre);
                }


    return View::make('admin/portafolio',array('portafolios' => $portafolios,'categorias' => $categorias));
}


public function mostrarVisual()
{
    $menu = 'visual';
    Session::put('menu', $menu);

    $usuario=Auth::user()->id;

    $fondos = Fondo::orderByRaw("RAND()")->get();

    $templates = Template::orderByRaw("RAND()")->get();

    $colores = Color::all();

    $datos = DB::table('usr_disenos')
                ->join('fondos', 'fondos.id', '=', 'usr_disenos.id_fondo')
                ->join('colores', 'colores.id', '=', 'usr_disenos.id_color')
                ->where('usr_disenos.id_usr',$usuario)
                ->get();
    
    $datos2 = DB::table('usr_template')
                ->join('templates', 'templates.id', '=', 'usr_template.template')
                ->where('usr_template.id_usr',$usuario)
                ->get();

     if(!Session::get('username'))
                {
                  $plantilla = DB::table('usr_template')->where('id',Auth::user()->id)->first();
                  Session::put('username', $plantilla->username);
                }

   return  View::make('admin/visual', array('datos' => $datos,'fondos' => $fondos,'colores' => $colores,'templates' => $templates,'datos2' => $datos2));
}

public function mostrarImprimir()
{
    $usuario=Auth::user()->id;
    $menu = 'imprimir';
    Session::put('menu', $menu);
    
    return View::make('admin/imprimir');
}

public function mostrarConfiguracion()
{
    $usuario=Auth::user()->id;
    $menu = 'configuracion';
    Session::put('menu', $menu);
    
    return View::make('admin/configuracion');
}

/*
bienvenida al momento de registro del usuario, se mostrara por primerza vez el asistente rapido de creacion del perfil
 */
public function crearWizard()
{
      if(!Session::get('name') or !Session::get('foto'))
                {
                  $plantilla = DB::table('usrs')
                  ->where('id',Auth::user()->id)->first();
                  Session::put('name', $plantilla->nombre);
                  Session::put('foto', $plantilla->foto_perfil);
                }

     if(!Session::get('pais'))
                {                  
                  Session::put('pais', 'Colombia');
                  Session::put('idpais', '2');
                }

    $profesiones = Profesion::all();
    $pais=Session::get('idpais');
    $regiones = DB::table('regiones')->where('paisregion',$pais)->get();
    return View::make('frontend.usuarios.bienvenido',array('profesiones' => $profesiones,'regiones' => $regiones));
}

public function guardarWizard()
    {
        //obtenemos los campos del formulario con Input::get('nombrecampo') 
        //y con e los limpiamos para guadarlos en la base de datos
        //
        $id_usuario=Auth::user()->id;

        //Asignar una plantilla random
        $template=rand(1,4);

        //Asignar estado 1 que es igual a usuario activo - anteriormente estado 3 = primera vez
        $estado_login = '1';

        //Asignar estado 1 que es igual a usuario activo - anteriormente estado 2 = inactivo
        $estado_template = '1';

        $estado_user = '0';

        //Asignar estado 1 que es igual a usuario activo - anteriormente estado 2 = inactivo
        $id_color = rand(1,5);

        //Asignar estado 1 que es igual a usuario activo - anteriormente estado 2 = inactivo
        $id_fuente = '1';

        //Asignar estado 1 que es igual a usuario activo - anteriormente estado 2 = inactivo
        $id_fondo = rand(1,20);
        
        $username= Input::get('username');
        $ocupacion = Input::get('ocupacion');
        $profesion = Input::get('profesion');
        $pais = Session::get('idpais');
        $region = Input::get('region');
        $reputacion = '3';
        $ciudad = Input::get('ciudad');
       
        //creamos un array con las reglas que deben cumplir nuestro formulario
        $rules = array(
        'username' => 'required|min:2|alpha_num|max:35|regex:/(^[A-Za-z0-9]+$)+/|unique:usr_template,username',
        'region' => 'required|numeric',
        'ciudad' => 'required|min:2|max:50|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        'ocupacion' => 'required|max:50|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        'profesion' => 'required|numeric',
        );

        //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'unique' => 'El nombre de usuario ya se encuentra registrado por otro usuario, por favor escriba otro',
            'max' => 'El campo :attribute no puede tener más de :max carácteres.',
            'regex' => 'El campo :attribute solo puede contener numeros o letras, no se aceptan simbolos, tildes ni espacios en blanco.',
            'numeric' => 'El campo :attribute solo puede contener numeros o letras, no se aceptan simbolos ni espacios en blanco.',
            'alpha' => 'El campo :attribute solo puede contener numeros o letras, no se aceptan simbolos ni espacios en blanco.',
            'alpha_num' => 'La dirección web de tu sitio solo puede contener numeros y letras, no se aceptan simbolos ni espacios en blanco.',
        );
 
        $validation = Validator::make(Input::all(), $rules, $messages);
        if ($validation->fails())
        {
             return Redirect::to('bienvenido')->withErrors($validation)->withInput();
        }
        else//si validacion pasa correctamente
        {

            //hacemos uso del método estático que hemos creado llamado insert users
            //del modelo usuarios, así de fácil
            $Usuario= Usr::find($id_usuario);
            $Usuario->pais=$pais;
            $Usuario->region=$region;
            $Usuario->ciudad=$ciudad;
            $Usuario->ocupacion=$ocupacion;
            $Usuario->profesiones=$profesion;
            $Usuario->estado=$estado_user;
            $Usuario->reputacion=$reputacion;
            $Usuario->save();
           
            $Habilidad= new Habilidad;
            $Habilidad->id_usr=$id_usuario;
            $Habilidad->save();

            $Habilidad= new Habilidad;
            $Habilidad->id_usr=$id_usuario;
            $Habilidad->save();

            $Habilidad= new Habilidad;
            $Habilidad->id_usr=$id_usuario;
            $Habilidad->save();

            $Habilidad= new Habilidad;
            $Habilidad->id_usr=$id_usuario;
            $Habilidad->save();

            $Servicio= new Servicio;
            $Servicio->id_usr=$id_usuario;
            $Servicio->save();

            $Servicio= new Servicio;
            $Servicio->id_usr=$id_usuario;
            $Servicio->save();

            $Servicio= new Servicio;
            $Servicio->id_usr=$id_usuario;
            $Servicio->save();

            $Servicio= new Servicio;
            $Servicio->id_usr=$id_usuario;
            $Servicio->save();

            $Visita= new Visitas;
            $Visita->id=$id_usuario;
            $Visita->save();

            $Plantilla= new Plantilla;
            $Plantilla->id=$id_usuario;
            $Plantilla->username=$username;
            $Plantilla->template=$template;
            $Plantilla->estado=$estado_template;
            $Plantilla->id_usr=$id_usuario;
            $Plantilla->save();

            $Diseno= new Diseno;
            $Diseno->id=$id_usuario;
            $Diseno->id_usr=$id_usuario;
            $Diseno->id_color=$id_color;
            $Diseno->id_fuente=$id_fuente;
            $Diseno->id_fondo=$id_fondo;
            $Diseno->save();

            $user = Login::find($id_usuario);
            $user->estado = $estado_login;
            $user->save();

            /*return Redirect::to('registro')->with('mensaje','¡Usuario registrado correctamente!.');*/
 
            return Redirect::to('perfil')->with('mensaje_bienvenida', 'Felicitaciones');
 
        }//fin else  validacion correcta
    }//fin function


    /*
    Editar o actulizar datos personal del perfil del usuario
     */

  public function editarPerfil()
   {
   
     //creamos un array con las reglas que deben cumplir nuestro formulario
        $rules = array(
        'nombre' => 'required|min:2|max:50|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        'apellido' => 'required|min:2|max:50|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        'genero' => 'required|numeric',
        'pais' => 'required|numeric',
        'region' => 'required|numeric',
        'ciudad' => 'required|min:1|max:50|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        'telefono' => 'regex:/(^[A-Za-z0-9-+()#. ]+$)+/',
        'direccion' => 'regex:/(^[A-Za-z0-9-+()#. ]+$)+/',
        'edad' => 'numeric',
        'ocupacion' => 'required|max:60|regex:/(^[a-zA-Z0-9ñÑáéíóú ]+$)+/',
        'profesion' => 'required|numeric',
        );//end rules
 
        //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'max' => 'El campo :attribute no puede tener más de :max carácteres.',
            'max' => 'El campo :attribute solo puede tener numeros, no se aceptan letras ni espacios en blanco.',
            'regex' => 'El campo :attribute solo puede contener numeros o letras, no se aceptan simbolos ni signos.',
            
        );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,        
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        if ($validation->fails())
        { 
            return Redirect::to('perfil')->withErrors($validation)->withInput(); 
        //Si no hay errores de validacion, ejecutamos el codigo y redirigimos
        }
        else
            {
                $usuario=Auth::user()->id;

                $user = Usr::find($usuario);

                 $user->nombre = Input::get('nombre');
                 $user->apellido = Input::get('apellido');
                 $user->genero = Input::get('genero');
                 $user->pais = Input::get('pais');
                 $user->region = Input::get('region');
                 $user->ciudad = Input::get('ciudad');
                 $user->telefono = Input::get('telefono');
                 $user->direccion = Input::get('direccion');
                 $user->fecha_nac = Input::get('edad');
                 $user->ocupacion = Input::get('ocupacion');
                 $user->profesiones = Input::get('profesion');
                 $user->save();
                 return Redirect::to('perfil')->with('mensaje_update', 'Tus datos han sido actualizados');
            }//end else no fallo la validacion
   }

   public function editarImagenPerfil()
   {
        $rules = array(
        'foto' => 'required|image|mimes:jpeg,bmp,png,gif|min:1|max:2000',
        );//end rules
 
        //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'No subio el archivo correctamente',
            'min' => 'La imagen es muy pequeña para subirse',            
            'max' => 'El tamaño de la imagen no puede superar 2 mb.',
            'image' => 'El archivo subido no es un formato valido',
            'mimes' => 'Asegurese de subir un formato de imagen',
            );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,        
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        if ($validation->fails())
        { 
            return Redirect::to('perfil#tab_1')->withErrors($validation)->withInput(); 
        //Si no hay errores de validacion, ejecutamos el codigo y redirigimos
        }
        else
            {

    
       $usuario=Auth::user()->id;

      //si el usuario ha enviado a seleccionado una foto de su computador
      if(Input::hasFile('foto'))
        {
        //Se toma la foto original
        $original =Input::file('foto')->getClientOriginalName();
        $azar=rand(0, 9999);
        //Guardamos la foto en el directorio "photos" y asignamos un nombre nuevo
        $foto='photos/'.$usuario.$azar.$original;
        Input::file('foto')->move('photos',$foto);

        $user = Usr::find($usuario);
        $user->foto_perfil = $foto;

        $user->save();

        /*
        eliminar foto anterior para dar espacio a la nueva
         */
        $anterior=Input::get('anterior');
        if(($anterior=='photos/per3.jpg') or ($anterior=='photos/per2.jpg'))
        {
           /*No hace nada, no se borra ninguna foto*/           
        }
        elseif(file_exists($anterior))
        {           
            unlink($anterior);
        }
         
        }
        //  Si no se puede subir la foto  ocurrio algun problema
         
        else{ 
            return "Ocurrio algun problema, pero la iamgen supero la validacion";
            } 

     return Redirect::to('perfil#tab_1')->with('mensaje_update', 'Tus datos han sido actualizados');
      }//end else no fallo la validacion
   }



   public function editarUsername()
   {
    $rules = array(
        //comprobamos que el nombre de usuario dea unico y cumpla con las reglas
    'username' => 'required|min:2|max:40|alpha_num|regex:/^([0-9a-zA])+(([0-9a-zA-Z]*)*)+$/|unique:usr_template,username',
    );
     //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'Tu dirección web es un campo obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'unique' => 'Tu dirección web ya se encuentra registrada por otro usuario, por favor escriba otro',
            'max' => 'Tu dirección web  no puede tener más de :max carácteres.',
            'alpha_num' => 'Tu dirección web  solo pueden contener números y letras.',
            'regex' => 'Tu dirección web solo puede contener numeros y letras, no se aceptan simbolos ni espacios en blanco.',
            
        );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,
        //si no le pasamos los mensajes los pondrá en inglés, que son los que vienen
        //por defecto con laravel
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        //y los campos que haya ingresado el usuario para que queden grabados
        if ($validation->fails())
        {
 
            return Redirect::to('perfil#tab_2')->withErrors($validation)->withInput();
 
        //en otro caso llamamos al método insert_users de la clase usuarios para
        //ingresar al usuario en la tabla usuarios
        }else{
 
            //hacemos uso del método estático y editamos el nombre de usuario
            
               $usuario=Auth::user()->id;
               $user = Plantilla::find($usuario);
               $username = Input::get('username');

               $user->username = $username;
               $user->save();

               return Redirect::to('perfil#tab_2')->with('mensaje_update', 'Tus datos han sido actualizados');
              }//end else en casi de pasar la validacion de las reglas
    }//end function editarUsername


   public function editarRedes()
   {
    $usuario=Auth::user()->id;

    $user = Red::find($usuario);

    $user->facebook = Input::get('facebook');
    $user->twitter = Input::get('twitter');
    $user->instagram = Input::get('instagram');
    $user->youtube = Input::get('youtube');
    $user->linkedin = Input::get('linkedin');
    $user->pinterest = Input::get('pinterest');
    $user->google = Input::get('google');
    $user->dribbble = Input::get('dribbble');
    $user->save();

    return Redirect::to('perfil#tab_3')->with('mensaje_update', 'Tus datos han sido actualizados');
   }


   public function editarDescripcion()
   {

     $rules = array(
        //comprobamos que el nombre de usuario dea unico y cumpla con las reglas
    /*'resumen' => 'required|min:5|max:600|regex:/(^[A-Za-zñÑáéíóú0-9-+,()#.   ]+$)+/',*/
    'resumen' => 'required|min:5|max:600',
    );
     //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'Tu dirección web es un campo obligatorio.',
            'min' => 'El campo :attribute no puede tener menos de :min carácteres.',
            'max' => 'Tu dirección web  no puede tener más de :max carácteres.',
            'regex' => 'Tu descripción personal solo puede contener numeros o letras, no se aceptan tildes ni simbolos especiales.',
            
        );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,
        //si no le pasamos los mensajes los pondrá en inglés, que son los que vienen
        //por defecto con laravel
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        //y los campos que haya ingresado el usuario para que queden grabados
        if ($validation->fails())
        {
 
            return Redirect::to('perfil#tab_4')->withErrors($validation)->withInput();
 
        //en otro caso llamamos al método insert_users de la clase usuarios para
        //ingresar al usuario en la tabla usuarios
        }else{
            $usuario=Auth::user()->id;

    $user = Usr::find($usuario);

    $user->resumen = Input::get('resumen');
    $user->save();

    return Redirect::to('perfil#tab_4')->with('mensaje_update', 'Tus datos han sido actualizados');
    }//end else en casi de pasar la validacion de las reglas
   }



   public function editarEducacion()
   {
    $usuario=Auth::user()->id;

    for ($i=1; $i <=3; $i++) {

    $id_edu = Input::get('id_edu'.$i);
    $Educacion = Educacion::find($id_edu);

    $Educacion->instituto = Input::get('instituto'.$i);
    $Educacion->f_inicio_mes = Input::get('f_inicio_mes'.$i);
    $Educacion->f_inicio_ano = Input::get('f_inicio_ano'.$i);
    $Educacion->f_fin_mes = Input::get('f_fin_mes'.$i);
    $Educacion->f_fin_ano = Input::get('f_fin_ano'.$i);
    $Educacion->titulo = Input::get('titulo'.$i);
    $Educacion->estado = Input::get('estado'.$i);
    $Educacion->descripcion = Input::get('descripcion'.$i);
    $Educacion->save();
    }

    return Redirect::to('educacion')->with('mensaje_update', 'Tus datos han sido actualizados');
   }


    public function editarExperiencia()
   {
    $usuario=Auth::user()->id;

    for ($i=1; $i <=3; $i++) {

    $id_exp = Input::get('id_exp'.$i);
    $Educacion = Experiencia::find($id_exp);

    $Educacion->cargo = Input::get('cargo'.$i);
    $Educacion->empresa = Input::get('empresa'.$i);
    $Educacion->f_inicio_mes = Input::get('f_inicio_mes'.$i);
    $Educacion->f_inicio_ano = Input::get('f_inicio_ano'.$i);
    $Educacion->f_fin_mes = Input::get('f_fin_mes'.$i);
    $Educacion->f_fin_ano = Input::get('f_fin_ano'.$i);
    $Educacion->estado = Input::get('estado'.$i);
    $Educacion->descripcion = Input::get('descripcion'.$i);
    $Educacion->save();
    }

    return Redirect::to('experiencia')->with('mensaje_update', 'Tus datos han sido actualizados');
   }

     public function editarHabilidad()
   {
    $usuario=Auth::user()->id;
    $contador = Input::get('contador');

    for ($m=1; $m <=$contador; $m++) {

    $habilidad = Input::get('habilidad'.$m);
    $nivel = Input::get('nivel'.$m);    

    $id = Input::get('idhabilidad'.$m);

    $Habilidad = Habilidad::find($id);
    $Habilidad->habilidad = $habilidad;
    $Habilidad->nivel = $nivel;
    $Habilidad->save();
    }

    return Redirect::to('habilidad')->with('mensaje_update', 'Tus habilidades ha sido actualizada');
   }

    public function editarServicio()
   {
    $usuario=Auth::user()->id;

    for ($m=1; $m <=4; $m++) {

    $servicio = Input::get('servicio'.$m);
    $des = Input::get('des'.$m);    

    $id = Input::get('idservicio'.$m);

    $Servicio = Servicio::find($id);
    $Servicio->servicio = $servicio;
    $Servicio->descripcion = $des;
    $Servicio->save();
    }

    return Redirect::to('habilidad#tab_1')->with('mensaje_update', 'Tu lista de servicios han sido actualizadas');
   }

    /*
    Insertamos un nuevo proyecto para el portafolio
     */
    Public function guardarPortafolio()
    {
         $rules = array(
        'foto' => 'required|image|mimes:jpeg,bmp,png,gif|min:5|max:4000',
        );//end rules
 
        //personalizamos los mensajes de error para nuestro formualario
        $messages = array(
            'required' => 'No subio el archivo correctamente',
            'min' => 'La imagen es muy pequeña para subirse',
            'max' => 'El tamaño de la imagen no puede superar 4 mb.',
            'image' => 'El archivo subido no es un formato valido',
            'mimes' => 'Asegurese de subir un formato de imagen',
        );
 
        //validation necesita los campos, las reglas y opcionalmente los mensajes,        
        $validation = Validator::make(Input::all(), $rules, $messages);
 
        //si la validación falla redirigimos a formularios con los errores
        if ($validation->fails())
        { 
            return Redirect::to('portafolio#tab_2')->withErrors($validation)->withInput(); 
        //Si no hay errores de validacion, ejecutamos el codigo y redirigimos
        }
        else
            {

        $usuario=Auth::user()->id;

        $categoria = Input::get('categoria');
        $nombre = Input::get('nombre');
        $descripcion = Input::get('descripcion');

        /*
        Comprobar si el usuario subio una imagen
         */
        if(Input::hasFile('foto'))
        {
        $original =Input::file('foto')->getClientOriginalName();
        $azar=rand(0, 9999);
        $foto=$usuario.$azar.$original;
        Input::file('foto')->move('portafolios/',$foto);

        $Portafolio= new Portafolio;
        $Portafolio->id_usr=$usuario;
        $Portafolio->imagen=$foto;
        $Portafolio->id_categoria=$categoria;
        $Portafolio->nombre=$nombre;
        $Portafolio->descripcion=$descripcion;
        $Portafolio->save();
        }
        /*
        Si no subio imagen se le asigna una por defecto
         */
        else
        {
        return "Ocurrio algun problema, no se subio la imagen";
        }
             return Redirect::to('portafolio')->with('mensaje_update', 'Tus datos han sido actualizados');
        }//fin else de aprobacion a la validacion
    }//fin function

    Public function eliminarPortafolio($imagen)
    {
        $usuario=Auth::user()->id;

        $Portafolio = Portafolio::find($imagen);

        $anterior= "portafolios/".$Portafolio->imagen;

        if( ($Portafolio->id_usr)==$usuario)
        {
        $Portafolio->delete();

        unlink($anterior);
        }

        return Redirect::to('portafolio')->with('mensaje_update', 'Tus datos han sido actualizados');
    }

    Public function guardarCategoria()
    {

        $usuario=Auth::user()->id;

        $categoria = Input::get('categoria');

        $Categoria= new Categoria;
        $Categoria->id_usr=$usuario;
        $Categoria->categoria=$categoria;
        $Categoria->save();

        return Redirect::to('portafolio#tab_3')->with('mensaje_update', 'Tus datos han sido actualizados');
    }

     Public function eliminarCategoria($categoria)
    {
        $usuario=Auth::user()->id;

        $Categoria=Categoria::find($categoria);

        
        if( ($Categoria->id_usr)==$usuario)
        {
        $Categoria->delete();
        }

        return Redirect::to('portafolio#tab_3')->with('mensaje_update', 'Tus datos han sido actualizados');
    }


   public function cambiarFondo($imagen)
   {
    $usuario=Auth::user()->id;

    $diseno = Diseno::find($usuario);

     $diseno->id_fondo = $imagen;
    
     $diseno->save();

     return Redirect::to('visual#tab_3')->with('mensaje_update', 'Tus datos han sido actualizados');
   
   }

   public function cambiarTemplate($imagen)
   {
     $usuario=Auth::user()->id;

     $PLantilla = Plantilla::find($usuario);

     $PLantilla->template = $imagen;
    
     $PLantilla->save();

     return Redirect::to('visual')->with('mensaje_update', 'Tus datos han sido actualizados');
   
   }

    public function cambiarColor($imagen)
   {
    $usuario=Auth::user()->id;

    $diseno = Diseno::find($usuario);

     $diseno->id_color = $imagen;
    
     $diseno->save();

     return Redirect::to('visual#tab_2')->with('mensaje_update', 'Tus datos han sido actualizados');
   
   }

   public function editarPass()
    {

        $rules = array(
            'anterior' => 'required',
            'nuevopassword' => 'required|min:5',
            'renuevo' => 'required|same:nuevopassword'
        );
         $messages = array(
                'required' => 'No pueden quedar campos vacios.',
                'same' => 'Escribe otra vez la nueva contraseña en el ultimo campo',
                'min' => 'La nueva contraseña no puede tener menos de :min carácteres.'
        );
        $validation = Validator::make(Input::all(), $rules, $messages);
        
        if ($validation->fails())
        {
            return Redirect::to('configuracion')->withErrors($validation)->withInput();
        }
        else{

            $usuario=Auth::user()->id;

            if (Hash::check(Input::get('anterior'), Auth::user()->password))
            {

             $nuevopassword=Hash::make(Input::get('nuevopassword'));
             $Login= Login::find($usuario);
             $Login->password = $nuevopassword;
             $Login->save();

             return Redirect::to('configuracion')->with('mensaje_update', 'Tus datos han sido actualizados, tu contraseña ha cambiado!');
            }//en if contraseña anterior que escribio el usuario es correcta
            else
            {
             return Redirect::to('configuracion')->with('mensaje_error', 'Error, debes escribir en la primera casilla tu contraseña actual');
            }
       }//end else
    return Redirect::to('configuracion')->with('mensaje_update', 'Tus datos han sido actualizados, tu contraseña ha cambiado!');   
   }

}