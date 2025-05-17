<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setelan Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 30px 20px;
        }
        .header-bg {
            background-color: #ff695f !important;
            padding: 15px 20px !important;
        }
        .table-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 20px rgba(0,0,0,0.08);
            overflow: hidden;
            margin-bottom: 25px;
        }
        .page-title {
            color: #343a40;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ff695f;
        }
        .btn-action {
            margin-right: 8px;
            padding: 5px 12px;
        }
        .btn-print {
            background-color: #6c757d;
            border-color: #6c757d;
            margin-right: 10px;
        }
        .back-link {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 25px;
            background-color: #ff695f;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .back-link:hover {
            background-color: #e05a50;
            color: white;
            transform: translateY(-2px);
        }
        .table {
            margin-bottom: 0;
        }
        .table th {
            background-color: #f8f9fa;
            padding: 15px 12px;
            font-weight: 600;
        }
        .table td {
            padding: 12px;
            vertical-align: middle;
        }
        .card-header {
            font-size: 1.1rem;
            font-weight: 500;
        }
        .action-buttons {
            min-width: 180px;
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
        <h1 class="page-title">TABEL ADMIN</h1>
        
        <div class="table-container">
            <div class="card-header text-white header-bg d-flex justify-content-between align-items-center">
                <span><i class="fas fa-users-cog me-2"></i>DAFTAR ADMIN</span>
                <div>
                    <a href="laporanuser.php" class="btn btn-sm btn-print text-white">
                        <i class="fas fa-print me-1"></i> Cetak PDF
                    </a>
                    <a href="tambahadmin.php" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus me-1"></i> Tambah Admin
                    </a>
                </div>
            </div>
            
            <div class="p-4">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th class="action-buttons">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('koneksi.php');
                            $datas = mysqli_query($koneksi, "SELECT * FROM login") or die(mysqli_error($koneksi));
                            $no = 1;
                            
                            while($row = mysqli_fetch_assoc($datas)) {
                            ?>    
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= htmlspecialchars($row['user']); ?></td>
                                <td>••••••••</td>
                                <td><?= htmlspecialchars($row['alamat']); ?></td>
                                <td><?= htmlspecialchars($row['telp']); ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="editadmin.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-success btn-action">
                                            <i class="fas fa-edit me-1"></i> Edit
                                        </a>
                                        <a href="hapusadmin.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?');">
                                            <i class="fas fa-trash me-1"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="index.php" class="back-link">
                <i class="fas fa-arrow-left me-2"></i> Kembali ke Dashboard
            </a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>