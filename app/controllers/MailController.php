<?php 

/*use Illuminate\Database\Eloquent\ModelNotFoundException;*/
class MailController extends BaseController /*implements UserInterface*/{

/*email de notificacion al momento de registrarse el usuario*/
public function mailWelcome()
 {
    
/*
El primer argumento pasado al método send es el nombre de la vista que
 debe ser utilizada como cuerpo del mensaje. El segundo parámetro que debe 
 ser pasado a la vista es $data, y el tercero es un Closure permitiéndote 
 especificar varias opciones en el mensaje del correo electrónico./*
 */
$nombre='Pulso Laboral';
$email='contacto@pulsolaboral.com';
$mensaje='esto es una prueba';
$asunto='probando mandrill';

$data= array('nombre'=> $nombre,
    'email'=>$email,
    'asunto'=>$asunto,
    'mensaje'=>$mensaje);

Mail::send('emails/welcome', $data, function($message)
{
    $message->to('contacto@pulsolaboral.com')
    ->subject('Consulta enviada desde emprendemeta.com');

});

return 'mensaje enviado con exito';

}

}
?>