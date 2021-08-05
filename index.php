<?php

include 'plantilla.php';
require 'conexion.php';

//crear el pdf con un objeto de la clase

$query = 'SELECT * FROM productos';

$resultado = $mysqli->query($query);



$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();

//fuente
$pdf->SetFont('Arial','B',10);

$pdf->SetFillColor(232,232,232);
$pdf->Cell(15,6,'CODIGO',1,0,'C',1);
$pdf->Cell(35,6,'NOMBRE',1,0,'C',1);
$pdf->Cell(40,6,'DESCRIPCION',1,0,'C',1);
$pdf->Cell(35,6,'PRECIO DE VENTA',1,0,'C',1);
$pdf->Cell(40,6,'PRECIO DE COMPRA',1,0,'C',1);
$pdf->Cell(22,6,'EXISTENCIA',1,1,'C',1);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(15,6,$row['codigo'],1,0,'C',1);
    $pdf->Cell(35,6,$row['nombre'],1,0,'C',1);
    $pdf->Cell(40,6,$row['descripcion'],1,0,'C',1);
    $pdf->Cell(35,6,$row['precioVenta'],1,0,'C',1);
    $pdf->Cell(40,6,$row['precioCompra'],1,0,'C',1);
    $pdf->Cell(22,6,$row['existencia'],1,1,'C',1);


}

// Establecer la salida del pdf
$pdf->Output();


?>