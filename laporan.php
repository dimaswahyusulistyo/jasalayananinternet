<?php
  include "config.php";
    session_start();
        if($_SESSION['status']!="login"){
            header("location:login.php");
        }
        // jika tidak ada aktivitas pada browser selama 300 detik/ 5 menit, maka ...
        if((time() - $_SESSION["last_login_time"]) > 300){
        // akan diarahkan kehalaman logout.php
        header("location: logout.php");
        }
  ?>
<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
$datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));
$row = mysqli_fetch_assoc($datas);

 
// intance object dan memberikan pengaturan halaman PDF 
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA JENIS LAYANAN',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(20,7,'LAYANAN' ,1,0,'C');
$pdf->Cell(15,7,'HARGA',1,0,'C');
$pdf->Cell(110,7,'DESKRIPSI',1,0,'C');
$pdf->Cell(20,7,'GAMBAR',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM barang");
while($d = mysqli_fetch_array($data)){
  $gambar=$d['foto'];
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(20,6, $d['nama'],1,0);
  $pdf->Cell(15,6, $d['harga'],1,0);  
  $pdf->Cell(110,6, $d['deskripsi'],1,0);
  $pdf->Image('gambar/' . $d['foto'], $pdf->GetX(), $pdf->GetY(), 5, 0);
  $pdf->Cell(20, 6, '', 1, 1);
}
 
$pdf->Output();
 
?>