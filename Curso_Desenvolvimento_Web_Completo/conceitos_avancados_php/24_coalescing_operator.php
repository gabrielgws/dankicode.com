<?php
    //Null coalescing operator
    
    $valor = $_POST['nome'] ?? $_POST['outro'] ?? 'Não deu certo';
    echo $valor;
    /*verifica se existe o $_POST['nome'], sabemos que não existe, vai ver se o outro existe $_POST['outro'], também não existe, então vai printar a mensagem de erro*/
?>