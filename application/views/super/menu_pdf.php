<?php 

	$this->load->view('fpdf/fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();

	$pdf->SetFont('Arial','B','20');
	$pdf->Cell(0,20,$judul,'0',1,'C');
	$pdf->SetFont('Arial','','10');
	$pdf->SetFillColor(139,69,19);
	$pdf->SetDrawColor(222,184,135);
	foreach ($header as $kolom) {
		$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
	}
	$pdf->Ln();

	$pdf->SetFillColor(245, 222, 179);
	$pdf->SetTextColor(0);
	$pdf->SetFont('');
	$fill=false;
	foreach ($data as $baris ) {
		$i = 0;
	foreach ($baris as $Cell) {
		$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
	}
	$pdf->Output();

 ?>