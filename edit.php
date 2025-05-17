<!DOCTYPE html>
<html>

<head>
	<title>Edit Layanan</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<?php
  include "config.php";
	// memulai sesi
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
		<h1>Table Member</h1>
		<div class="card">
			<div class="card-header bg-success text-white " style="background-color:#ff695f !important">
				Edit Member
			</div>
			<div class="card-body">
				<?php
				include('koneksi.php');

				$id = $_GET['id']; //mengambil id barang yang ingin diubah

				//menampilkan barang berdasarkan id
				$data = mysqli_query($koneksi, "select * from barang where id = '$id'");
				$row = mysqli_fetch_assoc($data);

				// var_dump($row);
				// die();

				?>
				<form action="" method="post" role="form" enctype="multipart/form-data">
					<input type="hidden" value="<?php echo $id;?>" name="id">
					<div class="form-group">
						<label>Nama</label>
						<!--  menampilkan nama barang -->
						<input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
					</div>

					<div class="form-group">
						<label>Foto</label>
						<img src="gambar/<?php echo $row['foto'] ; ?>" style="width: 100%;">
						<div class="form-group">
						<input <?php if(!isset($_GET['edit']))?> type="file" name="foto" class="form-control" value="<?= $row['foto']; ?>">
					</div>
					<!-- { echo"required";} -->
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">update data</button>
				</form>

				<?php

				//jika klik tombol submit maka akan melakukan perubahan
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];

					
					$foto = $_FILES['foto']['name'];
					$file_tmp = $_FILES['foto']['tmp_name'] ;
					move_uploaded_file($file_tmp, 'gambar/'.$foto) ;
					$query = "UPDATE INTO barang SET 
						nama_foto = '$nama_foto',
						foto = '$foto'
					";

					$deskripsi = $_POST['deskripsi'];

					//query mengubah barang
					mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', foto='$foto', deskripsi='$deskripsi' where id ='$id'") or die(mysqli_error($koneksi));

					//redirect ke halaman index.php
					echo "<script>alert('data member berhasil diupdate.');window.location='index.php';</script>";
				}

				?>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>