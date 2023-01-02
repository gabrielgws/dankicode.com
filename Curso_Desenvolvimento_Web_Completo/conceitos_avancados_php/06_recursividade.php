<?php 
    teste();
    function teste(){
        static $i = 0;
        echo 'Chamando a função';
        $i++;
        if($i < 3){
            teste();    
        } 
    }
    //vai ficar infinito
    /*Como foi criado uma variável static vc consegue ter o controle de quantas vezes ela vai rodar */


?>