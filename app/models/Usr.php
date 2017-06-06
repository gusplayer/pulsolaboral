<?php

Class Usr Extends Eloquent{
    
    protected $table = 'usrs';




    public function areas()
    {
        return $this->belongsTo('Profesion');
    }

    

    

}

?>