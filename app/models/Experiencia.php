<?php 

class Experiencia extends Eloquent { //Todos los modelos deben extender la clase Eloquent
	
    protected $table = 'usr_experiencias';
    protected $primaryKey = 'id_exp';

    

   /* public function Usr(){
        return $this->hasMany('Usr','usr_id_usr');
        // Para declarar una relación uno a uno se utiliza la función hasOne().
        // Esta función recibe como primer parámetro el modelo con el cual queremos hacer la relación 
        // en este caso es Pasaporte.
        // El segundo parámetro es el campo id con el cual se relación el modelo. 
        // En este caso Eloquent busca el pasaporte que tenga persona_id igual al 
        // id de la Persona
    }*/
}
?>