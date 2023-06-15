<?php
    require '../fpdf/fpdf.php';
    require '../basedata/basedata2.php';
    
    class PDF  extends FPDF
    {
        function header(){

            $this->SetFont('Arial','B',10);
            $this->Cell(80, 5, 'fecha actual:', 0, 0, 'L');
            $this->Cell(40, 5, 'Horarios', 0, 0, 'C');

            $this->Ln(20);

            $this->Cell(30, 5, 'Dia', 1, 0, 'C');

            $this->Cell(30, 5, 'Hora de Entrada', 1, 0, 'C');

            $this->Cell(35, 5, utf8_decode('Receso (1º, 2º y 3º)'), 1, 0, 'C');
            
            $this->Cell(35, 5, utf8_decode('Receso (4º, 5º y 6º)'), 1, 0, 'C');

            $this->Cell(30, 5, 'Hora de Salida', 1, 1, 'C');
        }

        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',10);
            $this->Cell(0, 90, 'copyright@', 0,0, 'C');
        }
    }

    
        $consulta = "SELECT * FROM horarios h INNER JOIN dias d ON h.dia = d.dia";
        $resultado = $conn->query($consulta);

        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10);

        foreach ($resultado as $row) {

            $pdf->Cell(30, 5, $row['dia'], 1, 0, 'C', 0);
            $pdf->Cell(30, 5, $row['hora_ent'], 1, 0, 'C', 0);
            $pdf->Cell(35, 5, $row['hora_rec1'], 1, 0, 'C', 0);
            $pdf->Cell(35, 5, $row['hora_rec2'], 1, 0, 'C', 0);
            $pdf->Cell(30, 5, $row['hora_sal'], 1, 1, 'C', 0);

        }

    $pdf->Output();
?>