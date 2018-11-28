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
    $endDateDays = $startDate/$secondsInADay;
    $numDays = $endDateDays - $startDateDays;
    $typeCalc = "days";

    if( $numDays > 31)
    {
        $typeCalc = "weeks";
    }

    //table[0] es el header de la tabla
    $headerUnixTime = array();
    $header = array();

    for($i = 0; $i< 10; $i++)
    {
        $table[$i] = array();
    }

    array_push($header,"Dia");

    array_push($table[0],"Cuartos");
    array_push($table[1],"Ninos en casa");
    array_push($table[2],"Adultos");
    array_push($table[3],"Total");
    array_push($table[4],"Familias");
    array_push($table[5],"Lactantes");
    array_push($table[6],"En hospital");
    array_push($table[7],"Total con hosp.");
    array_push($table[8],"Total Masculino");
    array_push($table[9],"Total Femenino");


    for($i = $startDate; $i <= $endDate; $i += $secondsInADay)
    {
        array_push($headerUnixTime, $i);
        array_push($header,date("d",$i));
        array_push($table[0],getRooms($i));
        array_push($table[1],getChilds($i));
        array_push($table[2],getCompanions($i));
        array_push($table[3],getChilds($i)+getCompanions($i));
    }


    //Creación de la clase principal para generar los PDFs
    class PDF extends FPDF
    {
        //la base para tablas
        function BasicTable($header, $data)
        {

            $max = 250;
            $spacing = $max / count($header);

            $this->SetFont('Arial', 'B', 9);

            // Header
            foreach($header as $i=>$col)
            {
                if($i == 0)
                {
                    $this->Cell(30,7,$col,1);
                }else
                {
                    $this->Cell($spacing,7,$col,1);
                }
            }
            $this->Ln();
            // Data
            foreach($data as $row)
            {
                foreach($row as $i=>$col)
                {
                    if($i == 0)
                    {
                        $this->Cell(30,7,$col,1);
                    }else
                    {
                        $this->Cell($spacing,7,$col,1);
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
