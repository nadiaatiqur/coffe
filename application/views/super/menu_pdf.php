<?php
$db = mysqli_connect('localhost','root','','cafe');
$this->load->model('m_cafe');
$this->load->view('fpdf/fpdf');
 
$tgl = date('d-M-Y');
$pdf = new FPDF();
$pdf->addPage();
$pdf->setAutoPageBreak(false);
$pdf->setFont('Arial','',20);
$pdf->text(75,30,'Laporan PDF Cafe');
$pdf->text(50,36,'');
$yi = 50;
$ya = 44;
$pdf->setFont('Arial','',9);
$pdf->setFillColor(222,222,222);
$pdf->setXY(10,$ya);
$pdf->CELL(6,6,'NO',1,0,'C',1);
$pdf->CELL(25,6,'MAKANAN',1,0,'C',1);
$pdf->CELL(25,6,'MINUMAN',1,0,'C',1);
$pdf->CELL(25,6,'JUMLAH MAKANAN',1,0,'C',1);
$pdf->CELL(25,6,'JUMLAH MINUMAN',1,0,'C',1);
$pdf->CELL(25,6,'HARGA MAKANAN',1,0,'C',1);
$pdf->CELL(25,6,'HARGA MINUMAN',1,0,'C',1);

$pdf->Ln();
$no = 1;
$query = mysqli_query($db,"SELECT * FROM tabel_pesan");
while ($key=mysqli_fetch_array($query)) {
$pdf->CELL(6,6,$no++,1,0,'C',1);
$pdf->CELL(25,6,$key['makan'],1,0,'C',1);
$pdf->CELL(25,6,$key['minum'],1,0,'C',1);
$pdf->CELL(25,6,$key['jumlah_makan'],1,0,'C',1);
$pdf->CELL(25,6,$key['jumlah_minum'],1,0,'C',1);
$pdf->CELL(25,6,$key['harga_makan'],1,0,'C',1);
$pdf->CELL(25,6,$key['harga_minum'],1,0,'C',1);
}
$pdf->output("oke","I");
?>