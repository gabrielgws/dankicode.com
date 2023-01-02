<?php
    //Classes anônimas

    class Utils{
        public function printNome($msg){
            $msg->showMessage();
        }
    }
    $utils = new Utils;
    $utils->printNome(new Class{
        public function showMessage(){
            echo 'Mostrando mensagem';
        }
    });

?>