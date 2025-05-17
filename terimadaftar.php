<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <link rel="”icon”" href="”assets/images/indohome.png”">
        <title>IndoHome</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
        <link rel="stylesheet" href="assets/css/animated.css">
        <link rel="stylesheet" href="assets/css/owl.css">
    </head>

    <!-- Menu -->
    <header
        class="header-area header-sticky wow slideInDown"
        data-wow-duration="0.75s"
        data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/indohome.png" width="200" height="100">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#member" class="active">Hasil Pendaftaran</a>
                            </li>
                            <li class="scroll-to-section">
                                <div class="main-red-button-hover">
                                    <a href="#contact">Contact</a>
                                </div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <body>
    <?php
    $nama = $_POST['nama'];
    $email =$_POST['email'];
    $sandi = $_POST['sandi'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $tanggal = $_POST['hari'];
    $prov = $_POST['prov'];
    $kota = $_POST['kota'];
    $langganan = $_POST['langganan'];
    //  echo "Jenis Member :$langganan </br>";

    include "koneksi.php";
    //ambil nama provinsi
    $sql=mysqli_query($koneksi,"SELECT * FROM tbl_prov WHERE ProvKode='$prov'");
    while($data=mysqli_fetch_array($sql)){
        $namaprov=$data['ProvNama'];
    }
    //ambil nama provinsi

    //ambil nama kota
    $sql=mysqli_query($koneksi,"SELECT * FROM tbl_prov_kota where KotaKode = '$kota'");
    while($data=mysqli_fetch_array($sql)){
        $namakota=$data['KotaNama'];
    }
    //ambil nama kota

     $i = 0;
     $addon = array();
     if (isset($_POST['addon1']))
     { 
         $addon[$i] = $_POST['addon1'];
        //  echo "Layanan Tambahan :$addon[$i] </br>";
         $i++;
     }
     if (isset($_POST['addon2']))
     { 
         $addon[$i] = $_POST['addon2'];
        //  echo "Layanan Tambahan :$addon[$i] </br>";
         $i++;
     }
     if (isset($_POST['addon3']))
     { 
         $addon[$i] = $_POST['addon3'];
        //  echo "Layanan Tambahan :$addon[$i] </br>";
         $i++;
     }

     $addonlist=implode(", ",$addon);
?>

<?php
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . $_FILES['foto']['name'];
if($_FILES['foto']['type']=="image/png" || $_FILES['foto']['type']=="image/jpeg")
if (move_uploaded_file($_FILES['foto']['tmp_name'],
$uploadfile)) 
?>

        <div id="member" class="contact-us section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" style="padding-bottom: 50px;">
                        <div class="section-heading">
                            <div
                                class="col-lg-12 align-self-center"
                                <p>
                                    <form enctype="multipart/form-data" action="terima.php" method="post">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                                        <table align="center" width="100%">
                                            <tr>
                                                <td colspan="2">
                                                    <h2 align="center">
                                                        Data
                                                        <em>Pelangan</em>
                                                        yang
                                                        <span>di Inputkan</span></h2>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>
                                                    :
                                                    <?=$nama?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>
                                                    :
                                                    <?=$email?></td>
                                            </tr>
                                            <tr>
                                                <td>Password / Sandi
                                                </td>
                                                <td>
                                                    : 
                                                    <?php $hash= password_hash("$sandi", PASSWORD_DEFAULT);?>
                                                    <?=$hash?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Layanan Tambahan
                                                </td>
                                                <td>
                                                    :
                                                    <?=$addonlist?></td>
                                            </tr>
                                            <tr>
                                                <td>Member IndoHome
                                                </td>
                                                <td>
                                                    :
                                                    <?=$langganan?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat
                                                </td>
                                                <td>
                                                    :
                                                    <?=$alamat?></td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi
                                                </td>
                                                <td>
                                                    :
                                                    <?=$namaprov?></td>
                                            </tr>
                                            <tr>
                                                <td>Kota
                                                </td>
                                                <td>
                                                    :
                                                    <?=$namakota?></td>
                                            </tr>
                                            <tr>
                                                <td>Hari Pemesanan
                                                </td>
                                                <td>
                                                    :
                                                    <?=$tanggal?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Upload Foto
                                                </td>
                                                <td>
                                                  :
                                                    <img src="uploads/<?=$_FILES['foto']['name']?>" style="width: 50%;"/></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <div class="main-blue-button-hover">
                                        <li>
                                            <a href="formdaftar.php">Kembali</a>
                                        </li>
                                        <!-- <li>
                                            <a href="formcicil.php">Simulasi Pembayaran</a>
                                        </li> -->
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" style="padding-bottom: 50px;">
                    <div class="section-heading">
                        <!-- Sidebar -->
                        <div id="sidebar">
                            <li class="widget">
                                <h2 align="left">
                                    <em>Black Mamba</em>
                                    X
                                    <span>IndoHome 🖤❤</span></h2>
                            </li>
                        </ul>
                        <li>
                            <a href="#">Perbedaan Black Mamba & Black Pink</a>
                        </li>
                        <li>
                            <a href="#">Jadwal konser Black Mamba X Indohome</a>
                        </li>
                        <li>
                            <a href="#">Pesan Tiket Konser Black Mamba</a>
                        </li>

                        <h2 align="left">
                            Tanya
                            <em>Tentang</em>
                            Layanan
                            <span>IndoHome🏫</span></h2>
                        <ul>
                            <li>
                                <a href="#">Apakah Indohome sekuat Wifi Mesen?</a>
                            </li>
                            <li>
                                <a href="#">Apakah Indohome membuat listrik mati?</a>
                            </li>
                            <li>
                                <a href="#">Berapa Waktu yang pemasangan layanan Indohome?</a>
                            </li>
                        </ul>
                        <li class="widget">
                            <h2 align="left">
                                Nyantai
                                <em>Dulu</em>
                                Ga
                                <span>Sih??🥦</span></h2>
                            <!-- <h3>Audio Streaming</h3> -->
                            <audio id="audio" src="assets/sound/koyojogjaistimewa.mp3" controls="controls"></audio>
                        </li>
                    </div>
                </div>
            </div>
        </div>
      </div>
      </div>
      </div>
        
       <?php
       require('footer.php');
       ?>
    </body>

</html>