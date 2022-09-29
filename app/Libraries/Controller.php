<?php

class Controller{

    //Busca o model
    public function model($model){
        require_once '../app/Models/'.$model.'.php';
        return new $model;
    }

    //Busca a View
    public function view($view, $dados=[]){
        $arquivo = '../app/Views/'.$view.'.php';
        if(file_exists($arquivo)):
            require_once $arquivo;
        else:
            die("Error: Este arquivo não existe.");
        endif;
    }

}