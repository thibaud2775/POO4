<?php
require_once 'Animal.php';

class Chien extends Animal {

    public $poil;
    
    public function type (){
        return parent::identifier()."et je suis un chien";
    }
    
    public function crier(){
        echo " ouah ouha";
    }

}

