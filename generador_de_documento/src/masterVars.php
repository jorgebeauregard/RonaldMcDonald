<?php

    $error_date = "Fecha en formato incorrecto.";
    $error_check = "Los argumentos de inicio y termino no existen. intente utilizar <br> 
        start_date=fechdeinicio&end_date=fechadetermino <br>    
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