<?php

    require_once('fpdf.php');
    require_once('check.php');
    require_once('masterVars.php');
    require_once('apiManager.php');
    require_once('statistics.php');

    date_default_timezone_set ( "America/Mexico_City" );
    preloadCheckin();

    $verbose = 0;

    /* 
        Generador de reportes.
        Genera un pdf, conteniendo estadísticas globales pertinientes entre 2 fechas.
        
        Estas 2 fechas son proporcionadas a traves de GET. Para mas información, ver
        getCheck() dentro de check.php

        The code uses a FAILFAST design.

        INSTRUCCIONES DE USO E IMPLEMENTACION

        El generador funciona en base a la conección con el beck end en laravel.

        Para recibir el formato de resumen en pdf se debe: 

        Hacer una llamada get al archivo index.php encontrado en la carpeta src.

        los parametros get deben ser:

        inicio = dd-mm-yyyy
        fin = dd-mm-yyyy

        ej.
        ... /generador_de_documento/src/? inicio=1-11-2018 & fin=31-12-2018

        El generador mostrará una tabla en pdf con los datos entre als fechas solicitadas,
        formateará automaticamente entre días o semanas segun sea necesario,
        con respecto al espacio.

    */
    
    //Checa los argumentos.
    if (getCheck() == false)
    {
        showError($error_check);
    }else
    {
        if ($verbose)
        {
            $d1 = $_GET[getNameStart()]; 
            $d2 = $_GET[getNameEnd()];
            
            echo($d1."<br>");
            echo($d2."<br>");
            
            echo(validDate($d1)."<br>");
            echo(validDate($d2)."<br>");

            $d1 = validDate($d1);
            $d2 = validDate($d2);

            echo(date("Y-m-d h:i:sa", $d1)."<br>");
            echo(date("Y-m-d h:i:sa", $d2)."<br>");
        }
    }

    //Obtain dates.
    $secondsInADay = 86400;
    $startDate = validDate($_GET[getNameStart()]);
    $endDate = validDate($_GET[getNameEnd()]);

    //Genera el header de la tabla
    /*
        si hay menos de 32 días, la tabla estará en días,
        si hay mas, estará en semanas.
    */
    $table = array();
    $startDateDays = $startDate/$secondsInADay;
    $endDateDays = $endDate/$secondsInADay;
    $numDays = $endDateDays - $startDateDays;
    $typeCalc = "days";

    if($numDays > 31)
    {
        $typeCalc = "weeks";
    }

    //table[0] es el header de la tabla
    $headerUnixTime = array();
    $header = array();

    for($i = 0; $i< 13; $i++)
    {
        $table[$i] = array();
    }

    array_push($header,"Dia");

    array_push($table[0],"Cuartos");
    array_push($table[1],"Ninos en casa");
    array_push($table[2],"Adultos");
    array_push($table[3],"Total");
    array_push($table[4],"Familias");

    array_push($table[6],"Lactantes");
    array_push($table[7],"En hospital");
    array_push($table[8],"Total con hosp.");

    array_push($table[10],"Total Masculino");
    array_push($table[11],"Total Femenino");

    for($i = $startDate; $i <= $endDate; $i += $secondsInADay)
    {
        array_push($headerUnixTime, $i);
        array_push($header,date("d",$i));
        array_push($table[0],getRooms($i));
        array_push($table[1],getChilds($i));
        array_push($table[2],getCompanions($i));
        array_push($table[3],getChilds($i)+getCompanions($i));
        array_push($table[4],getFamilies($i));
        
        array_push($table[6],getLactant($i));
        array_push($table[7],getHospitalized($i));
        array_push($table[8],getChilds($i)+getCompanions($i)+getHospitalized($i));
       
        array_push($table[10],getMChilds($i)+getMCompanions($i));
        array_push($table[11],getFChilds($i)+getFCompanions($i));
    }

    //If more than 31 days found enter week view.
    if($typeCalc == "weeks")
    {
        $header = array();
        $header[0] = "Semana";
        for($i = $startDate; $i <= $endDate; $i += $secondsInADay)
        {
            array_push($header,date("W",$i));
        }

        //Collapse days for week view
        for($i = 0; $i < count($table); $i++)
        {
            $table[$i] = collapseSum($header,$table[$i]);
        }
        $header = collapse($header,$header);
    }

    foreach ($table as $i=>$value) 
    {
        if(count($value) == 0) continue;

        array_push($table[$i], sum($value));
    }


    /*
        Final de obtención y parseo de datos.
        Functions and fpdf class declaration and creation 
    */

    array_push($header,"TOT");

    function sum($arr)
    {
        if(count($arr) == 0)
        {
            return 0;
        }

        $sum = 0; 
        foreach ($arr as $value) 
        {
            if(is_numeric($value))
            {
                $sum += $value;
            }
        }

        return $sum;
    }

    function collapse($base,$colapsable)
    {
        if(count($colapsable) == 0 || count($base) == 0)
        {
            return array();
        }

        $result = array();
        $result[0] = $colapsable[0];

        $sum = 0;
        for($i = 1; $i<count($base); $i++)
        {
            if(($base[$i] != $base[$i-1]) && $i != 1)
            {
                array_push($result,$sum);
                $sum = 0;
            }
            $sum = $colapsable[$i];
        }
        array_push($result,$sum);

        return $result;
    }

    function collapseSum($base,$colapsable)
    {
        if(count($colapsable) == 0 || count($base) == 0)
        {
            return array();
        }

        $result = array();
        $result[0] = $colapsable[0];

        $sum = 0;
        for($i = 1; $i<count($base); $i++)
        {
            if(($base[$i] != $base[$i-1]) && $i != 1)
            {
                array_push($result,$sum);
                $sum = 0;
            }
            $sum += $colapsable[$i];
        }
        array_push($result,$sum);

        return $result;
    }


    //Creación de la clase principal para generar los PDFs
    class PDF extends FPDF
    {
        //la base para tablas
        function BasicTable($header, $data)
        {

            $max = 260;
            $spacing = $max / count($header);

            if($spacing < 6)
            {
                $this->SetFont('Arial', 'B', 7);
            }
            else
            {
                $this->SetFont('Arial', 'B', 9);
            }


            // Header
            foreach($header as $i=>$col)
            {
                if($i == 0)
                {
                    $this->Cell(22,7,$col,1);
                }else
                {
                    $this->Cell($spacing,7,$col,1);
                }
            }
            $this->Ln();
            // Data
            foreach($data as $row)
            {
                foreach((array)$row as $i=>$col)
                {
                    if($row[0] == "Total")
                    {
                        $this->SetFillColor(180,180,180);
                    }else
                    {
                        $this->SetFillColor(220,220,220);
                    }

                    if($i == 0)
                    {
                        $this->Cell(22,7,$col,1,0,'C',true);
                    }else
                    {
                        $this->Cell($spacing,7,$col,1,0,'C',true);
                    }
                }
                $this->Ln();
            }
        }

        //header de la pagina
        function Header()
        {
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Titulo
            $this->Cell(0,10,utf8_decode("Estadísticas - Casa Ronald McDondald"),1,0,'C');
            // salto de linea
            $this->Ln(20);
        }

        // Page footer
        function Footer()
        {
            // Posision at 1.5 cm desde abajo
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,utf8_decode('Página '.$this->PageNo().'/{nb}'));
        }
    }


    // instanciamiento de la pagina.
    $pdf = new PDF();
    $pdf->AliasNbPages();

    //El pdf se muestra en landscape para mejorar la visualización de las tablas.
    $pdf->AddPage("landscape");
    $pdf->SetFont('Times','',12);

    $pdf->Cell(0,10,utf8_decode("Desde: ".date("Y-m-d", $startDate)),0,0,'L');
    $pdf->Cell(0,10,utf8_decode("Hasta: ".date("Y-m-d", $endDate)),0,1,'R');

    $pdf->BasicTable($header,$table);

    //Salida final del programa, muestra el archivo pdf al cliente.
    $pdf->Output();

?>
