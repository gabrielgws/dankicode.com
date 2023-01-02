<?php
    date_default_timezone_set('America/Sao_Paulo');
    
    $date = DateTime::createFromFormat('d/m/Y', '22/06/1995');
    echo $date->format('Y-m-d');    
    
    echo '<br>';
    
    echo $data = date('d/m/Y H:i:s', strtotime('01-05-1990 23:50:01'));
    
    echo '<br>';

    echo $data2 = date('d/m/Y H:i:s', time() + 60*60*24);
?>