<?php
    /*As vezes, é conveniente possuir variáveis com nomes variáveis. Isto é, o nome de uma variável que pode ser definido e utilizado dinamicamente. Uma variável normal é definida com uma instrução como:
    */
    $nome = 'Juliana';
    $$nome = 'João'; //dessa forma João será o nome da variável $nome
    echo $$nome;

?>