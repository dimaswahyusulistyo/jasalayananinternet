<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Layanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        .page-title {
            color: #343a40;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ff695f;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
        }
        .btn-submit {
            background-color: #ff695f;
            border-color: #ff695f;
            padding: 8px 25px;
        }
        .btn-submit:hover {
            background-color: #e05a50;
            border-color: #e05a50;
        }
        .card-header-custom {
            background-color: #ff695f !important;
            color: white;
            padding: 15px 20px;
            font-size: 1.1rem;
        }
        .preview-image {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
            display: none;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php
    include "config.php";
    session_start();
    if(!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
        header("location:login.php");
        exit();
    }
    ?>

    <div class="container">
        <div class="form-container">
            <div class="card-header card-header-custom">
                <i class="fas fa-plus-circle me-2"></i>Tambah Layanan Baru
            </div>
            <div class="card-body">
                <form action="" method="post" role="form" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Layanan</label>
                        <input type="text" id="nama" name="nama" class="form-control" required placeholder="Masukkan nama layanan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" id="harga" name="harga" class="form-control" required placeholder="Masukkan harga">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto Layanan</label>
                        <input type="file" id="foto" name="foto" class="form-control" accept="image/*" onchange="previewImage(this)">
                        <small class="text-muted">Format: JPG, PNG (Maks. 2MB)</small>
                        <img id="imagePreview" class="preview-image" alt="Preview Gambar">
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi layanan"></textarea>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="index.php" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Kembali
                        </a>
                        <button type="submit" class="btn btn-submit text-white" name="submit" value="simpan">
                            <i class="fas fa-save me-2"></i>Simpan Data
                        </button>
                    </div>
                </form>

                <?php
                include('koneksi.php');
                
                if (isset($_POST['submit'])) {
                    // Sanitize input data
                    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
                    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
                    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
                    $foto_name = "";
                    
                    // Handle file upload
                    if(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
                        $file_name = $_FILES['foto']['name'];
                        $file_tmp = $_FILES['foto']['tmp_name'];
                        $file_size = $_FILES['foto']['size'];
                        
                        // Validate file extension
                        $allowed_ext = ['jpg', 'jpeg', 'png'];
                        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
                        
                        if(in_array($file_ext, $allowed_ext)) {
                            // Generate unique filename
                            $foto_name = uniqid() . '.' . $file_ext;
                            $upload_path = 'gambar/' . $foto_name;
                            
                            if(move_uploaded_file($file_tmp, $upload_path)) {
                                // File uploaded successfully
                            } else {
                                echo "<script>alert('Gagal mengupload gambar.');</script>";
                            }
                        } else {
                            echo "<script>alert('Format file tidak didukung. Harap upload file JPG, JPEG, atau PNG.');</script>";
                        }
                    }
                    
                    // Insert data into database
                    $query = "INSERT INTO barang (nama, harga, deskripsi, foto) VALUES ('$nama', '$harga', '$deskripsi', '$foto_name')";
                    $result = mysqli_query($koneksi, $query);
                    
                    if($result) {
                        echo "<script>
                                alert('Data layanan berhasil disimpan.');
                                window.location='index.php';
                              </script>";
                    } else {
                        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "');</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Image preview function
        function previewImage(input) {
            const preview = document.getElementById('imagePreview');
            const file = input.files[0];
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            
            if(file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>
</body>
</html>