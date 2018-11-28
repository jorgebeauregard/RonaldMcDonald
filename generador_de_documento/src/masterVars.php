<?php

    function getNameStart(){ return "inicio"; }
    function getNameEnd(){ return"fin"; } 

    $error_date = "Fecha en formato incorrecto.";
    $error_check = "Los argumentos de inicio y termino no existen. intente utilizar <br> 
        ".getNameStart()."=fechdeinicio&".getNameEnd()."=fechadetermino <br>    
    ";

    function showError($errvar)
    {
        $errStart = "";
        $errEnd = "";
        $finalError = $errStart.$errvar.$errEnd;
        echo($finalError);
        exit;
    }

?>