<?php
    //Variável externa
    
    class Classe1{
        public function index(){
            echo 'chamando classe 1';
        }
    }
    class Classe2{
        public function index(){
            echo 'chamando classe 2';
        }
        public function callBack($func){
            $func();
        }
    }
    //interação entre duas classes
    $classe1 = new Classe1;
    $classe2 = new Classe2;
    $classe2->callBack(function() use ($classe1){
        echo 'callback chamado';
        $classe1->index();
    });
    
?>