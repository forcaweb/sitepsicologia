<?php

class Sessao
{

    public static function mensagem($nome, $texto = null, $classe = null)
    {

        if (!empty($nome)) :
            if (!empty($texto) && empty($_SESSION[$nome])) :
                if(!empty($_SESSION[$nome])):
                unset($_SESSION[$nome]);
                endif;
                $_SESSION[$nome] = $texto;
                $_SESSION[$nome . "classe"] = $classe;
            elseif (!empty($_SESSION[$nome]) && empty($texto)) :
                $classe = !empty($_SESSION[$nome . "classe"]) ? $_SESSION[$nome . "classe"] : 'alert-success-c';
                echo "<div class='" . $classe . "'><i class='fa fa-info-circle' aria-hidden='true'></i> " . $_SESSION[$nome] . "</div>";

                unset($_SESSION[$nome]);
                unset($_SESSION[$nome . "classe"]);
            endif;
        endif;
    }


    public static function estaLogado(){
        if(isset($_SESSION['id'])):
            return true;
        else:
            return false;
        endif;
    }
}
