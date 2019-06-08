<?php
    function myAutoLoad($class) {
        $class = str_replace('\\', '/', $class); //Insere a / no namespace para não dar problema no linux.
        if(file_exists('classes/'.$class.'.php')) {
            include('classes/'.$class.'.php');
        }
    }
    
    spl_autoload_register('myAutoLoad'); //registra a função para ser chamada antes de qualquer coisa.;

?>