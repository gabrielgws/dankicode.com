<?php
    $nome = 'Juliana';
    $teste = function() use($nome){
        echo 'Olá: '.$nome;
    };
    $teste();
    //Assim vai poder usar essa variável externa dentro da função
    /*Só se consegue usar esse use() quando a função está dentro de uma variável como no exemplo acima*/

?>