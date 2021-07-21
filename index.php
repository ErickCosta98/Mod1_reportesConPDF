<?php

include 'plantilla.php';
require 'conexion.php';

//crear el pdf con un objeto de la clase

$query = 'SELECT e.estado , m.id_municipio , m.municipio FROM t_municipio as m INNER JOIN t_estado as e on m.id_estado = e.id_estado';

$resultado = $mysqli->query($query);



$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();

//fuente
$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(232,232,232);
$pdf->Cell(70,6,'ESTADO',1,0,'C',1);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(70,6,'MUNICIPIO',1,1,'C',1);
// $pdf->Cell(100,10,'Hola mundo',1,1,'C');
// $pdf->Cell(100,10,'Hola mundo2',1,0,'C');
while($row = $resultado->fetch_assoc()){
    $pdf->Cell(70,6,$row['estado'],1,0,'C',1);
    $pdf->Cell(20,6,$row['id_municipio'],1,0,'C',1);
    $pdf->Cell(70,6,$row['municipio'],1,1,'C',1);

}

// Establecer la salida del pdf
$pdf->Output();


?>