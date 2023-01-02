<?php
    //Sistema de template
    class Template{
        public function render($array, $file){
            $arquivo = file_get_contents('arquivos/'.$file);
            foreach ($array as $key => $value) {
                $arquivo = str_replace('{'.$key.'}', $value, $arquivo);
            }
            echo $arquivo;
        }
    }
    
?>