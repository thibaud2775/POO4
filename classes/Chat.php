<?php
require_once 'Animal.php';

class Chat extends Animal {

    public $poil;
    
    public function type (){
        return parent::identifier()." et je suis un chat";
    }
    
    public function crier(){
        echo " miaouh";
    }

}

