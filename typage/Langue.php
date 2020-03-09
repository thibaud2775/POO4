<?php

class Langue {

    private $langue = 'francais';
    
    public function getLangue(){
        return $this->langue;
    }
    
    public function getTypeObject(Francais $france)
    {
        //langue par défaut français
        if ($france->francais == NULL){
            return $this->langue;
        }
        else {
            $this->langue = $france->francais;
        }
    }
}