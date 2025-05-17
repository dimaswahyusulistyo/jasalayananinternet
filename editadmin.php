<!DOCTYPE html>
<html>

<head>
	<title>Edit Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<?php
  include "config.php";
	//memulai sesi
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
<body>
	<div class="container col-md-6 mt-4">
		<h1>Table User Admin</h1>
		<div class="card">
			<div class="card-header bg-success text-white " style="background-color:#ff695f !important">
				Edit Admin
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from login where id = '$id'");
				$row = mysqli_fetch_assoc($data);
				?>
				
				<form action="" method="post" role="form" enctype="multipart/form-data">
					<input type="hidden" value="<?php echo $id;?>" name="id">
					<div class="form-group">
						<label>User</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="user" required="" class="form-control" value="<?= $row['user']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="text" name="pass" class="form-control" value="<?= $row['pass']; ?>">
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?= $row['alamat']; ?>">
					</div>

					<div class="form-group">
						<label>Telp</label>
						<textarea class="form-control" name="telp"><?= $row['telp']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$user = $_POST['user'];
					$pass = $_POST['pass'];
                    $alamat = $_POST['alamat'];
					$telp = $_POST['telp'];

					//query mengubah barang
					mysqli_query($koneksi, "update login set user='$user', pass='$pass', alamat='$alamat', telp='$telp' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data user admin berhasil diupdate.');window.location='setelanadmin.php';</script>";
				}

				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>