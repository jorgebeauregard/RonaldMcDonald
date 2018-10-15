<?php 
    /*
        getcheck()
        El punto de entrada del check de argumentos. 
        Los argumentos son:
        Mediante GET 
        start_date: La fecha de inicio "String" en formato humano.
        end_date: La fecha de termino "String" en formato humano.
    */
    function getCheck()
    {
        $dataExists = false;

        if( isset($_GET["start_date"]) )
        {
            $dataExists = true;
        }else
        {
            $dataExists = false;
        }

        if( isset($_GET["end_date"]) )
        {
            $dataExists = true;
        }else
        {
            $dataExists = false;
        }
    }

    function validDate($date)
    {
        $convertedDate = strtotime($date);

    }
?>