<?php
    //Alterar o php.ini através do próprio php, sem precisar ir lá no arquivo

    //definindo um limite de execução para scripts
    ini_set('max_execution_time', 10); //significa que está limitando a execução em 10 segundos. Para se infinito é só colocar 0
    sleep(12); //vai tentar dormir por 12 segundos, mas não vai conseguir por que o limite de 10 segundos foi declarado
    echo 'olá mundo';

    //aumentando o tamanho da memória
    //Adicione -1 para não ter restrição de tamanho
    ini_set('memory_limit', '2048M');
?>