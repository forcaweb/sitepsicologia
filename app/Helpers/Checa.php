<?php

class Checa{

    public static function checaNome($nome){
        if(!preg_match("/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/", $nome)):
            return true;
        else:
            return false;
        endif;
    }

    public static function checaTextos($texto){
        if(!preg_match("/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ 0-9]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ 0-9]+)+)?$/", $texto)):
            return true;
        else:
            return false;
        endif;
    }

    public static function checaEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
    }

    public static function checaCep($cep){
        if(!preg_match("/^([0-9 -]+)?$/", $cep)):
            return true;
        else:
            return false;
        endif;
    }

    public static function checaNumeroEndereco($num){
        if(!preg_match("/^([0-9 aA-zZ]+)?$/", $num)):
            return true;
        else:
            return false;
        endif;
    }

    public static function checaTelefone($telefone){
        if(!preg_match("/^([0-9 {()-}]+)?$/", $telefone)):
            return true;
        else:
            return false;
        endif;
    }
}