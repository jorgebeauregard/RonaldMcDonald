<?php

    require_once('fpdf.php');
    require_once('check.php');
    require_once('masterVars.php');
    require_once('apiManager.php');

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
            $d1 = $_GET["start_date"]; 
            $d2 = $_GET["end_date"];
            
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
    $startDate = validDate($_GET["start_date"]);
    $endDate = validDate($_GET["end_date"]);


    //Creación de la clase principal para generar los PDFs
    class PDF extends FPDF
    {
        //header de la pagina
        function Header()
        {
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Titulo
            $this->Cell(0,10,utf8_decode("Estadísticas - Casa Ronald McDondald's"),1,0,'R');
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
    $pdf->AddPage();
    $pdf->SetFont('Times','',12);

    $pdf->Cell(0,10,utf8_decode("Desde: ".date("Y-m-d", $startDate)),0,0,'L');
    $pdf->Cell(0,10,utf8_decode("Hasta: ".date("Y-m-d", $endDate)),0,1,'R');

    for($i=1;$i<=120;$i++)
    {
        $pdf->Cell(10,10,'DEBUG -> linea numero '.$i,0,1);
    }

    //Salida final del programa, muestra el archivo pdf al cliente.
    $pdf->Output();

?>