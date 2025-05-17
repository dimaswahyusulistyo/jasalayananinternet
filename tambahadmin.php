<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
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
            color: #ff695f;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ff695f;
        }
        .form-label {
            font-weight: 500;
            margin-bottom: 8px;
        }
        .form-group {
            margin-bottom: 20px;
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
        .card-header {
            font-size: 1.1rem;
            padding: 15px 20px;
        }
        #pesan {
            font-size: 14px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <?php
    include "config.php";
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login.php");
    }
    if((time() - $_SESSION["last_login_time"]) > 300){
        header("location: logout.php");
    }
    ?>

    <div class="container">
        <h1 class="page-title">Tambah Admin Baru</h1>
        
        <div class="form-container">
            <div class="card-header text-white" style="background-color:#ff695f !important">
                <i class="fas fa-user-plus me-2"></i>Form Tambah Admin
            </div>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="user" class="form-label">Username</label>
                        <div class="input-group">
                            <input type="text" id="user" name="user" class="form-control" required placeholder="Masukkan username">
                            <span id="pesan" class="input-group-text bg-transparent border-0"></span>
                        </div>
                        <small class="text-muted">Username harus unik</small>
                    </div>
         
                    <div class="form-group">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" id="pass" name="pass" class="form-control" required placeholder="Masukkan password">
                        <small class="text-muted">Password akan dienkripsi dengan MD5</small>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control" required placeholder="Masukkan alamat">
                    </div>

                    <div class="form-group">
                        <label for="telp" class="form-label">Telepon</label>
                        <input type="text" id="telp" name="telp" class="form-control" required placeholder="Masukkan nomor telepon">
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="setelanadmin.php" class="btn btn-secondary">
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
                    $user = mysqli_real_escape_string($koneksi, $_POST['user']);
                    $pass = mysqli_real_escape_string($koneksi, $_POST['pass']);
                    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
                    $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);
                    
                    // Hash password with MD5
                    $hashed_pass = md5($pass);
                    
                    // Insert data with hashed password
                    $datas = mysqli_query($koneksi, "INSERT INTO login (user, pass, alamat, telp) VALUES ('$user', '$hashed_pass', '$alamat', '$telp')") or die(mysqli_error($koneksi));
                    
                    // Show success message and redirect
                    echo "<script>
                            alert('Data admin berhasil ditambahkan.');
                            window.location='setelanadmin.php';
                          </script>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#user').blur(function(){
            $('#pesan').html('<i class="fas fa-spinner fa-spin"></i>');
            var user = $(this).val();

            $.ajax({
                type: 'POST',
                url: 'proses.php',
                data: 'user='+user,
                success: function(data){
                    $('#pesan').html(data);
                },
                error: function() {
                    $('#pesan').html('<i class="fas fa-times text-danger"></i> Error');
                }
            });
        });
    });
    </script>
</body>
</html>