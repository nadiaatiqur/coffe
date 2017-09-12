<?php 
$con = mysqli_connect('localhost','root','','cafe');

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '01' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '02' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '03' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '04' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '05' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '06' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '07' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '08' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '09' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '10' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '11' ");
$ya = mysqli_fetch_array($dat);

$dat = mysqli_query($con, "SELECT SUM(harga_menu) FROM tabel_pesan WHERE YEAR(tanggal) = YEAR(NOW()) AND date_format(tanggal, '%m') = '12' ");
$ya = mysqli_fetch_array($dat);

 ?>