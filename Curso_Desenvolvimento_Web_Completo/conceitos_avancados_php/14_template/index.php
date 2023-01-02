<?php
    include('14_template.php');
    $template = new Template;
    $template->render(['titulo'=>'Título do meu site', 'nome'=>'Juliana'], 'sobre.phtml');    
?>