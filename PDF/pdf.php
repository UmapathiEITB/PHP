<?php

require 'vendor/autoload.php';
use setasign\Fpdi\Fpdi;
use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->Addpage();
$pdf->SetFont('Arial','B',12);
$data = [
    ['Name'=> 'Test1', 'Age'=> 1],
    ['Name'=> 'Test2', 'Age'=> 2],
    ['Name'=> 'Test3', 'Age'=> 3]
];
$pdf->Cell(60,10,'Name',1);
$pdf->Cell(30,10,'Age',1);
$pdf->Cell(100,10,'Email',1);
$pdf->Ln();
foreach($data as $r){
    $pdf->Cell(60,10,$row['Name'],1);
    $pdf->Cell(30,10,$row['Age'],1);
    $pdf->Cell(100,10,$row['Email'],1);
    $pdf->Ln();
}
$pdf->Output('I', 'data.pdf');