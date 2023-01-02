<?php
    class Rota{

        //Variaveis
        private $controlador = "Pages";
        private $metodo = "index";
        private $paramentros = [];

        public function __construct(){
            //valor da url
            $url = $this->url() ? $this->url() : [0];

            //busca o controlador
            if(file_exists('../app/Controllers/'.ucwords($url[0]).'.php')):
                $this->controlador = ucwords($url[0]);
                unset($url[0]);
           endif;;

            //Adiciona o controllador
            require_once("../app/Controllers/".$this->controlador.".php");

            //Executa Controlador
            $this->controlador = new $this->controlador;
            //Executa o metodo
            if(isset($url[1])):
                if(method_exists($this->controlador, $url[1])):
                    $this->metodo = $url[1];
                    unset($url[1]);
                endif;
            endif;

            //Executa o Metodo
            $this->paramentros = $url ? array_values($url) : [];
            call_user_func_array([$this->controlador, $this->metodo], $this->paramentros);
        }

        //Verifica qual url esta
        private function url(){
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

            if(isset($url)):
                $url = trim(rtrim($url, '/'));
                $url = explode('/', $url);
                return $url;
            endif;
        }
    }