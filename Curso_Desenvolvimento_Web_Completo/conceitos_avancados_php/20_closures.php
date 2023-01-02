<?php 
    class Teste{
        public function sendmen($a){
            if($a instanceof Closure){
                $a();
            }
        }
    }
    /*Se for passar uma função dentro de outra função ela sempre vai ser uma closure*/
    $teste = new Teste;
    $teste->sendmen(function(){
        echo 'Olá';
    });

    class Outra{
        public function sendoutra($a){
            if($a instanceof Closure){
                $a = $a->bindTo($this);
                $a();
            }
        }
        public function enviar(){
            echo 'enviando';
        }
    }
    $outra = new Outra;
    $outra->sendoutra(function(){
        $this->enviar();
    });

?>