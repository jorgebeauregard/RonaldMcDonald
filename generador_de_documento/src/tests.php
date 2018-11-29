<?php

    require_once('check.php');
    require_once('masterVars.php');
    require_once('apiManager.php');
    require_once("statistics.php");

    date_default_timezone_set ( "America/Mexico_City" );
    preloadCheckin();

    /*
        Stand alone, tests para el generador de archivos.

        Solo correr el tests.php

        este archivo valida los datos de la RESTful api sobre laravel
        asi como las funciones del generador.

    */

    function e($data)
    {
        echo($data." <br> ");
    }

    function customAssert($d1,$d2,$messagge = "")
    {
        if($d1 === $d2)
        {
            e("Prueba pasada! ".$d1." == ".$d2." ... ".$messagge);
        }
        else
        {
            e("ERROR EN LA PRUEBA!!");
            e($d1." /= ".$d2);
        }
    }

    customAssert(validDate("1-11-2018"),1541052000);

    $dateTest = validDate("27-11-2018");
    customAssert(getChilds($dateTest),          3);
    customAssert(getRooms($dateTest),           4);
    customAssert(getCompanions($dateTest),      3);
    customAssert(getFamilies($dateTest),        4);
    customAssert(getHospitalized($dateTest),    1);
    customAssert(getFChilds($dateTest),         1);
    customAssert(getFCompanions($dateTest),     1);
    customAssert(getMChilds($dateTest),         3);
    customAssert(getMCompanions($dateTest),     2);
    customAssert(getLactant($dateTest),         3);

    $dateTest = validDate("26-11-2018");
    customAssert(getChilds($dateTest),          0);
    customAssert(getRooms($dateTest),           0);
    customAssert(getCompanions($dateTest),      1);
    customAssert(getFamilies($dateTest),        1);
    customAssert(getHospitalized($dateTest),    1);
    customAssert(getFChilds($dateTest),         0);
    customAssert(getFCompanions($dateTest),     0);
    customAssert(getMChilds($dateTest),         1);
    customAssert(getMCompanions($dateTest),     1);
    customAssert(getLactant($dateTest),         0);

    $dateTest = validDate("1-11-2017");
    customAssert(getChilds($dateTest),          0);
    customAssert(getRooms($dateTest),           0);
    customAssert(getCompanions($dateTest),      0);
    customAssert(getFamilies($dateTest),        0);
    customAssert(getHospitalized($dateTest),    0);
    customAssert(getFChilds($dateTest),         0);
    customAssert(getFCompanions($dateTest),     0);
    customAssert(getMChilds($dateTest),         0);
    customAssert(getMCompanions($dateTest),     0);
    customAssert(getLactant($dateTest),         0);

?>