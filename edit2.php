<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		$id = $_GET['id'];

		$query = mysqli_query($koneksi,"SELECT * FROM barang WHERE id='$id'");
		$row = mysqli_fetch_array($query);

	}else{
		header("location:index.php");
	}
}else{
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
	<title>Cara Membuat CRUD Upload File Menggunakan PHP Dan MySQLi - belajarwithib</title>
</head>
<body>
	<div class="container mt-5 ">
		<center class="mb-5" ><h2>Cara Membuat CRUD Upload File Menggunakan PHP Dan MySQLi - belajarwithib</h2></center>
		<hr>
		<form action="edit_act.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Nama</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" >
				<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>" >
			</div>
			<div class="mb-3">
				<label class="form-label">Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $row['harga']; ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Deskripsi</label>
				<textarea class="form-control" name="deskripsi" rows="3"><?php echo $row['deskripsi']; ?></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Foto</label>
				<input type="file" name="foto" class="form-control"><?php echo $row['foto']; ?>
				<br>
				<?php 
				if ($row['foto'] == "") { ?>
					<img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width:100px;height:100px;">
				<?php }else{ ?>
					<img src="gambar/<?php echo $row['foto']; ?>" style="width:100px;height:100px;">
				<?php } ?>
			</div>
			<div class="mb-3">
				<button class="btn btn-success" type="submit">Submit</button>
				<a href="index.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
		
	</div>
</body>
</html>