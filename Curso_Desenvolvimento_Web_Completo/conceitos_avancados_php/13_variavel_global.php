<?php
    //Variáveis globais
    $nome = 'Juliana';
    function printNome(){
        global $nome;
        echo $nome;
    }
    printNome();
?>