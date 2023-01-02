<?php
    function teste(){
        static $n = 0;
        $n++;
        return $n;
    }
    echo teste();
    echo '<br>';
    echo teste();
?>