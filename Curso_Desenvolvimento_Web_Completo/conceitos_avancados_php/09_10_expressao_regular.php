<?php
    //Expressões regulares com php
    
    $nome = 'Juliana';
    if(preg_match('/li/', $nome)){
        echo 'verdade';
    }

    //Validar cpf
    function cpfValido($cpf){
        $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/';
        return preg_match($expressao, $cpf);
    }
    if(isset($_POST['acao'])){
        $cpf = $_POST['cpf'];
        if(cpfValido($cpf)){
            echo 'cpf válido';
        }else{
            echo 'cpf inválido';
        }
    }
?>
<form method="post">
    <input type="text" name="cpf">
    <input type="submit" value="Enviar" name="acao">
</form>