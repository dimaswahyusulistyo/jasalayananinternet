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

			include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
			$id = $_GET['id']; //menampung id

			//query hapus
			$datas = mysqli_query($koneksi, "delete from login where id ='$id'") or die(mysqli_error($koneksi));

			//alert dan redirect ke index.php
			echo "<script>alert('Data member berhasil dihapus.');window.location='setelanadmin.php';</script>";
	?>