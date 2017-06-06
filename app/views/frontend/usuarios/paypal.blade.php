@extends('frontend.master')
 
 
@section('contenido')

           <div class="container">
            <div class="bill-cont box">
                <div class="cont">
                    <div class="cent">
                        <div class="row">
                            
                            <p class="text-b"> <img src="img/pagos/paypal.jpg" width="160px"></p>
                            <p>Paga desde cualquier lugar del mundo con el saldo en tu cuenta paypal o tu tarjeta de credito. Es una de las plataformas mas seguras del mundo. </p><br>
                           
                            <br>

                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="DEV2TAS2URMG6">
<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>
                           
                            
                            <div class="pa-w well">
                            <p class="text-b">Verificar Pago</p>
                                <p>Enviaremos una copia de esta informacion a tu correo electronico. Al realizar el pago, recuerda enviarnos una notificacion a nuestro correo para que nuestro equipo verifique y active tu cuenta. Envianos el correo  a <b>contacto@pulsolaboral.com</b></p>
                           </div>
                           
                        </div>
                    </div>
                </div>
                <div style="margin-bottom:20px"></div>
            </div>
        </div>
    </div>
    
@stop

@extends('frontend/footer')