<?php

/* 
    --Aviso de Código--
    BASE. Este programa fue obtenido directamente de la documentacion de FPDF
    El mismo ha sido modificado parcialmente.
*/
    require_once('fpdf.php');
    
    class PDF extends FPDF
    {
        //header De la pagina
        function Header()
        {
            // Arial bold 15
            $this->SetFont('Arial','B',15);
            // Title
            $this->Cell(0,10,utf8_decode("Estadísticas - Casa Ronald McDondald's"),1,0,'R');
            // Line break
            $this->Ln(20);
        }

        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,utf8_decode('Página '.$this->PageNo().'/{nb}'));
        }
    }

    // Instanciation of inherited class
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',12);

    for($i=1;$i<=120;$i++)
    {
        $pdf->Cell(10,10,'DEBUG -> linea numero '.$i,0,1);
    }

    $pdf->Output();

?>