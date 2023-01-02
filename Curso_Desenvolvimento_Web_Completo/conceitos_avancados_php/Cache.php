<?php
    class Cache{
        public function readCache(){
            if(file_exists('cache')){
                $data = json_decode(file_get_contents('cache'));
                if($data->tempo < time()){
                    //se o tempo do cache for menor que o tempo atual então é hora de criar o cache
                    echo 'criando um novo cache';
                    $data = json_encode(['tempo'=>time() + 60, 'conteudo'=>'<h2>Site em manutenção</h2>']); //cache de 1 minuto
                    file_put_contents('cache', $data);
                    $data = json_decode($data);
                }
            }else{
                $data = json_encode(['tempo'=>time() + 60, 'conteudo'=>'<h2>Site em manutenção</h2>']); //cache de 1 minuto
                file_put_contents('cache', $data);
                $data = json_decode($data);
            }
            return $data;
        }
    }    
?>