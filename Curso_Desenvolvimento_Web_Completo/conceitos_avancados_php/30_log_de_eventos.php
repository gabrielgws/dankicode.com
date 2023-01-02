<?php
    //Logo de eventos
    date_default_timezone_set('America/Sao_Paulo');
    $variavel = 'Juliana';
    if($variavel != 'João'){
        echo 'Foi criado um arquivo de log';
        error_log(date('d/m/Y H:i'). ' Mensagem de erro aqui'."\n", 3, 'arquivosecretodelog.log');
    }  
?>