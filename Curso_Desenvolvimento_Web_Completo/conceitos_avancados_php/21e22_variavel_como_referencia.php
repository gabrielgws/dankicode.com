<?php
    //Variável como referência
    $nome = 'Juliana';
    function teste(&$nome){
        $nome = 'João';
    }
    teste($nome);
    echo $nome;
?>