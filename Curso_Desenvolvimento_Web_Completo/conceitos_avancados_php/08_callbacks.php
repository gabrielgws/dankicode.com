<?php
    //Instanceoff
    class A{} 
    class B{}
    $a = new A;
    $b = new B;

    /*instanceof serve para verificar se uma variável faz referência a uma classe*/
    if($a instanceof A){
        echo 'Essa variável faz instância a classe A';
    }else{
        echo 'Essa variável NÃO faz instância a classe A';
    }

    echo '<br>';

    //Callbacks
    /*Quando se passa um parâmetro com um valor já definido em uma função significa que aquele parâmetro é opcional*/
    function executar($a, $nome = 'Juliana'){
        $a($nome);
    }   
    executar(function($nome){
        echo 'Olá.. '.$nome;
    });
?>