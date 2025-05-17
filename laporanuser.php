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
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Laporan User',0,0,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(15,7,'User',1,0,'C');
$pdf->Cell(20,7,'Password',1,0,'C');
$pdf->Cell(30,7,'Telp' ,1,0,'C');
$pdf->Cell(35,7,'Alamat',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$datas = mysqli_query($koneksi, "select * from login") or die(mysqli_error($koneksi));?>

<?php while($d = mysqli_fetch_array($datas)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(15,6, $d['user'],1,0,'C');  
  $pdf->Cell(20,6, $d['pass'],1,0,'C');
  $pdf->Cell(30,6, $d['telp'],1,0,'C');
  $pdf->Cell(35,6, $d['alamat'],1,1,'C');
  }
 
$pdf->Output();
 
?>