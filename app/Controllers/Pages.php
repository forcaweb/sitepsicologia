<?php

class Pages extends Controller{

    public function index(){
        $dados = [
            "tituloPagina" => "Página inicial"
        ];
        $this->view('pages/home', $dados);
    }

    public function contacts(){
        $dados = [
            "tituloPagina" => "Página Contatos"
        ];
        $this->view('pages/contacts', $dados);
    }
}
