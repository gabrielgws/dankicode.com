<?php
    //Função dentro de uma variável
    $func = function($nome){
        echo $nome;
    };
    $func('Juliana');

    echo '<br>';

    //Função dentro de outra função
    function primeira(){
        echo 'primeira';
        function segunda(){
            echo 'segunda';
        }
        segunda();
    }
    //primeira();

    //Passa como uma string o nome de uma função
    call_user_func('primeira');

    echo '<br>';
    
    //Verificar se é uma função
    if(is_callable('primeira')){
        echo 'é uma função';
    }else{
        echo 'não é uma função';
    }
?>