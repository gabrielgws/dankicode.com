<?php 
    //Modo irreversível - md5()
    /*Irreversível significa que não tem como transformar ela de criptografada pra o nome original */
        $nome = 'Juliana';
        $nome2 = md5($nome);
        echo "Nome original: ".$nome;
        echo '<br>';
        echo "Nome criptografado: ".$nome2;
        echo '<br>';

    //Modo reversível - base64_encode()
        $nome3 = base64_encode($nome);
        echo $nome3;
    /*base64_decode descriptografa */
?>