<?php
spl_autoload_register(function($classe){
    
    $diretorios = [
        'Helpers',
        'Libraries'
    ];

    foreach($diretorios as $diretorio):
        $file = __DIR__.DIRECTORY_SEPARATOR.$diretorio.DIRECTORY_SEPARATOR.$classe.'.php';
        if(file_exists($file)):
            require_once $file;
        endif;
    endforeach;
});