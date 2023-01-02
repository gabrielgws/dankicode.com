<?php
    //Tratamento de erros com try catch
    
    class Teste{
        public function exemplo($num){
            if($num != 10){
                throw new Exception("Ocorreu um erro");
            }else{
                echo 'Sucesso';
            }
        }
    }
    $teste = new Teste;
    try {
        $teste->exemplo(20);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>