 <!doctype html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
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
                                <a href="#member" class="active">Form Pendaftaran</a>
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
        <!-- ________ Form _________ -->
        <div id="member" class="contact-us section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8" style="padding-bottom: 50px;">
                        <div class="section-heading">
                            <div
                                class="col-lg-12 align-self-center"
                                style="background-image: url(../images/contact-form-bg.png);">
                                <br>
                                <br>
                                <form enctype="multipart/form-data" action="terimadaftar.php" method="post">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                                    <table align="center" width="100%">
                                        <tr>
                                            <td colspan="2">
                                                <h2 align="center">
                                                    Feel free to
                                                    <em>register</em>
                                                    us via the
                                                    <span>HTML form</span></h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>
                                                <input type="text" name="nama" size="10"/></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <input type="text" name="email" value="email"/></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>
                                                <input type="password" name="sandi"/></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Member</td>
                                            <td>
                                            <?php 
                                            include('koneksi.php'); //memanggil file koneksi
                                            $datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));
                                            //script untuk menampilkan data barang

                                            $no = 1;//untuk pengurutan nomor

                                            //melakukan perulangan
                                            while($row = mysqli_fetch_assoc($datas)) {
                                            ?>
                                
                                                <input type="radio" name="langganan" value="<?=$row['nama'];?>" checked="checked"/><?= $row['nama'];?>
                                                <!-- <input type="radio" name="langganan" value="Gold"/>Gold
                                                <input type="radio" name="langganan" value="Platinum" checked="checked"/>Platinum -->
                                                <?php $no++; } ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td rowspan="3">Layanan Add-On (Wajib Pilih 1)
                                            </td>
                                            <td><input type="checkbox" name="addon1" checked="checked" value="Netflix"/>Netflix</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="addon2" value="Chanel Tambahan"/>Chanel Tambahan</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="addon3" value="Upgrade Highspeed"/>Upgrade Highspeed</td>
                                        </tr>

                                        <tr>
                                            <td>Alamat</td>
                                            <td>
                                                <textarea name="alamat">tulis alamat</textarea>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <!-- <select name="provinsi">
                                                    <option selected="selected">Aceh</optio>
                                                    <option>Sumatra Utara</optio>
                                                    <option>Sumatra Barat</optio>
                                                    <option>Riau</optio>
                                                    <option>Jambi</optio>
                                                    <option>Sumatra Selatan</optio>
                                                    <option>Bengkulu</optio>
                                                    <option>Lampung</optio>
                                                    <option>Kepulauan Bangka Belitung</optio>
                                                    <option>Kepulauan Riau</optio>
                                                    <option>DKI Jakarta</optio>
                                                    <option>Jawa Barat</optio>
                                                    <option>Jawa Tengah</optio>
                                                    <option>DI Yogyakarta</optio>
                                                    <option>Jawa Timur</optio>
                                                    <option>Banten</optio>
                                                    <option>Bali</optio>
                                                    <option>NTB</optio>
                                                    <option>NTT</optio>
                                                    <option>Kalimantan Barat</optio>
                                                    <option>Kalimantan Tengah</optio>
                                                    <option>Kalimantan Selatan</optio>
                                                    <option>Kalimantan Timur</optio>
                                                    <option>Kalimantan Utara</optio>
                                                    <option>Sulawesi Utara</optio>
                                                    <option>Sulawesi Tengah</optio>
                                                    <option>Sulawesi Selatan</optio>
                                                    <option>Sulawesi Tenggara</optio>
                                                    <option>Gorontalo</optio>
                                                    <option>Sulawesi Barat</optio>
                                                    <option>Maluku</optio>
                                                    <option>Maluku Utara</optio>
                                                    <option>Papua</optio>
                                                    <option>Papua Barat</optio>
                                                    <option>Papua Selatan</optio>
                                                    <option>Papua Tengah</optio>
                                                    <option>Papua Pegunungan</optio>
                                                    <option>Papua Barat Daya</optio>
                                                </select> -->
                                                <select name="prov" id="prov">
                                                    <option value="">--- Pilih Provinsi</option>
                                                    <?php
                                                    $sql=mysqli_query($koneksi,"SELECT * FROM tbl_prov ORDER BY ProvNama");
                                                    while($data=mysqli_fetch_array($sql)){
                                                        $kode=$data['ProvKode'];
                                                        $nama=$data['ProvNama'];
                                                        echo "<option value='$kode'>".$nama."</option>";
                                                    }
                                                    ?>
                                                </select>

                                                <select name="kota" id="kota">
                                                    <option value="">--- Pilih Kota/Kab</option>
                                                </select>

                                                <script>
                                                    $(document).ready(function(){
                                                        
                                                        $('#prov').change(function(){
                                                            var kode = $(this).val();
                                                            
                                                            $.ajax({
                                                                url:"select2.php",
                                                                method:"post",
                                                                data:{kode:kode},
                                                                success:function(data){
                                                                    $('#kota').html(data);
                                                                }
                                                            });

                                                        });

                                                    });
                                                </script>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Upload Foto KTP</td>
                                            <td>
                                                <input type="file" name="foto"/>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Hari Pemesanan</td>
                                            <td>
                                                <input type="date" name="hari"/>
                                            </td>
                                        </tr>

                                        <td></td>
                                        <td>
                                            <input type="submit" name="input" value="INPUT"/>
                                            <input type="reset" name="clear" value="CLEAR"/>
                                            <input
                                                type="button"
                                                onclick="window.location.href='pilihanlayanan.php'"
                                                value="MEMBER"/>
                                            <!-- <input type="button" onclick="window.location.href='terima.php'" value="HASIL"/> -->
                                        </td>
                                    </tr>
                                </table>
                            </form>
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

            <div class="main-blue-button-hover">
                <li>
                    <a href="index.php">Kembali</a>
                </li>
            </div>

               
            <?php require('footer.php');?>
        </body>

    </html> 