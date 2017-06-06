<?php 

class Profesion extends Eloquent { //Todos los modelos deben extender la clase Eloquent
	
    protected $table = 'profesiones';
    

 public function categorias(){
        return $this->hasMany('Usr','profesiones');
         }

   
    
   
}
?>