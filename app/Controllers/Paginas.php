<?php

class Paginas extends Controller{

    public function index(){
        $dados = [
            "tituloPagina" => "Página inicial"
        ];
        $this->view('paginas/home', $dados);
    }
}
