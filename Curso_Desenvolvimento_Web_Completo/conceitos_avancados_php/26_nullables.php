<?php
    //nullable types
    //vai definir o tipo da variável
    function teste() :?string{ //agora estamos definindo que será uma string
        return 10;
    }    
    $numero = teste();
    var_dump($numero);
?>