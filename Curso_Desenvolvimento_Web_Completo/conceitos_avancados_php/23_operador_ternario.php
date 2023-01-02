<?php 
    //Operador ternário

    $nome = 'Juliana';
    $mensagem = 'Mensagem: '.(isset($nome) ? $nome : 'Visitante');
    echo $mensagem;

    /*Se existir a variável $nome então ela vai ser igual a ela mesmo, senão existir ela vai ser igual a 'visitante'*/

?>