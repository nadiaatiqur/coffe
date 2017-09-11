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
$pdf->CELL(50,6,'MAKANAN',1,0,'C',1);
$pdf->CELL(50,6,'MINUMAN',1,0,'C',1);
$pdf->CELL(30,6,'JUMLAH PESAN',1,0,'C',1);
$pdf->CELL(45,6,'HARGA MENU',1,0,'C',1);

$pdf->Ln();
$no = 1;
$query = mysqli_query($db,"SELECT * FROM tabel_pesan");
while ($key=mysqli_fetch_array($query)) {
$pdf->CELL(6,6,$no++,1,0,'C',1);
$pdf->CELL(50,6,$key['makan'],1,0,'C',1);
$pdf->CELL(50,6,$key['minum'],1,0,'C',1);
$pdf->CELL(30,6,$key['jumlah_pesan'],1,0,'C',1);
$pdf->CELL(45,6,$key['harga_menu'],1,0,'C',1);
}
$pdf->output("oke","I");
?>