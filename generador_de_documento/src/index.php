<?php

    require_once('fpdf.php');
    require_once('check.php');
    /* 
        Generador de reportes.
        Genera un pdf, conteniendo estadísticas globales pertinientes entre 2 fechas.
        
        Estas 2 fechas son proporcionadas a traves de GET. Para mas información, ver
        getCheck() dentro de check.php

        --Aviso de Código--
        BASE. Este programa fue obtenido directamente de la documentacion de FPDF
        El mismo ha sido modificado parcialmente.
    */
    
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

    for($i=1;$i<=120;$i++)
    {
        $pdf->Cell(10,10,'DEBUG -> linea numero '.$i,0,1);
    }

    //Salida final del programa, muestra el archivo pdf al cliente.
    $pdf->Output();

?>