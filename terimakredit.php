<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kredit WiFi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.png"/>
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="contact1">           
            <div class="container-contact1">
                <div class="contact1-pic js-tilt" data-tilt="data-tilt">
                    <img src="assets/images/img.png" alt="IMG">
                </div>

                <!-- Membulatkan Angka -->
                <?php
                function rupiah($angka)
                {
                $jadi = "Rp ".number_format($angka,2,',','.');
                return $jadi;}
                ?>

                <!-- Inisialisasi Data yang Diinputkan-->
                <?php 
                    $harga = $_POST['harga'];
                    $uangmuka = $_POST['uangmuka'];
                    $waktu = $_POST['waktu'];

                    $UM = $harga * ($uangmuka/100);
                ?>

                <form class="contact1-form validate-form">
                    <span class="contact1-form-title" style="margin-bottom:-30px;">

                    <?php $stringawal = "Data Kredit Wifi Pelanggan";
                     echo "$stringawal </br>";?> 
                     <!-- perubahan string ada dibawah untuk mengganti judul -->

                    </span>
                    <p align="center">
                    <font color="#ff8c00"> 
                    <?php
                    $today = date("l d F Y - h:i:s a");
                    echo "Kalkulasi dihitung tanggal : </br>
                    $today </br>";
                    ?> 
                    </font>
                    </p>

                </br>
                    <!-- Output dari Inputan -->
                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        Harga WiFi :
                        <input
                            class="input1"
                            type="number"
                            name="harga"
                            placeholder="<?php
                            $harga = $_POST['harga'];
                                // Percabangan If untuk menentukan Valid/tidak valid
                                if ($harga < 10000000) {
                                echo "Inputan salah. Nilai harus lebih dari atau sama dengan 10 juta.";
                                } else {
                                echo "Inputan valid.";
                                }
                            ?> Rp.<?=$harga?>" readonly> 
                        <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					Bunga :
					<input class="input1" type="number" name="bunga" placeholder="<?php
                            // Assign inputan bunga dari form
                            $bungabank = $_POST['bunga'];
                            if ($bungabank < 5) {
                                echo "Bunga harus minimal 5%.";
                            } elseif ($bungabank > 10) {
                                echo "Bunga tidak boleh melebihi 10%.";
                            } else {
                                echo "Uang muka valid.";
                            }
                            $bunga = $bungabank/100
                            ?> <?=$bungabank?>" readonly>
					<span class="shadow-input1"></span>
				    </div>

                    <div class="wrap-input1 validate-input" data-validate = "Name is required">
					Margin Bank :
					<input class="input1" type="number" name="margin" placeholder="<?php $margin = $_POST['margin']; $marginbank = $margin/12 ?> <?=$marginbank?> /Bulan">
					<span class="shadow-input1"></span>
				    </div>

                    <div
                        class="wrap-input1 validate-input"
                        data-validate="Valid email is required: ex@abc.xyz">
                        Uang Muka (DP) :
                        <input class="input1" type="number" name="uangmuka" placeholder="<?php
                            // Assign inputan uang muka dari form
                            $uangmuka = $_POST['uangmuka'];
                            if ($uangmuka < 30) {
                                echo "Uang muka harus minimal 30%.";
                            } elseif ($uangmuka > 100) {
                                echo "Uang muka tidak boleh melebihi 100%.";
                            } else {
                                echo "Uang muka valid.";
                            }
                            ?> <?=rupiah($uangmuka)?>%" readonly>
					    <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        Jangka Waktu (Tenor) :
                        <input class="input1" type="number" name="waktu" placeholder="<?php
                            $waktu = $_POST['waktu'];
                            if ($waktu < 1) {
                                echo "Tenor harus minimal 1 tahun.";
                            } elseif ($waktu > 5) {
                                echo "Tenor tidak boleh lebih dari 5 tahun.";
                            } else {
                                echo "Tenor valid.";
                            }
                            $tenor= $waktu*12
                            ?> <?=$waktu?> Tahun" readonly>
					    <span class="shadow-input1"></span>
                    </div>
                </form>

                <form class="contact1-form validate-form">
                    <span class="contact1-form-title">

                    <!-- perubahan string -->
                    <?php $ubahstring = str_replace("Kredit", "KPR", $stringawal);
                    echo "$ubahstring </br>";?>
                    </span>

                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        Plafon Pinjaman :
                        <?php $plafon = $harga - $UM;?>
                        <input class="input1" type="number" name="harga" placeholder="<?=rupiah($plafon)?>" readonly>
					    <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        Angsuran per Priode :
                        <?php $angsuran = $plafon / $tenor ?>
                        <input class="input1" type="number" name="angsuran" placeholder="<?=rupiah($angsuran)?>">
					    <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        Angsuran Bunga :
                        <?php $angsuranbunga = $plafon * $bunga /12 ?>
                        <input class="input1" type="number" name="angsuran" placeholder="<?=rupiah($angsuranbunga)?>">
					    <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        Total Angsuran :
                        <?php $totalangsuran = $angsuran + $angsuranbunga ?>
                        <input class="input1" type="number" name="angsuran" placeholder="<?=rupiah($totalangsuran)?>">
					    <span class="shadow-input1"></span>
                    </div>

                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        Total Priode :
                        <?php $totalpriode = $waktu * 12 ?>
                        <input class="input1" type="number" name="harga" placeholder="<?=$totalpriode?> Bulan" readonly>
					    <span class="shadow-input1"></span>
                    </div>
                </form>

                <div class="contact1-pic js-tilt" data-tilt="data-tilt">
                    <img src="assets/images/img2.png" alt="IMG">
                </div>

                <div class="contact1-pic js-tilt" data-tilt="data-tilt">
                    <img src="assets/images/img3.png" alt="IMG">
                </div>

                <div class="center">
            <table class="table table-striped">
            <span class="contact1-form-title">
                    Tabel Angsuran
            </span>
                <tr>
                    <th>Bulan</th>
                    <th>Angsuran Bunga</th>
                    <th>Angsuran Pokok</th>
                    <th>Total Angsuran</th>
                    <th>Sisa Wajib</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>Rp 0,00</td>
                    <td>Rp 0,00</td>
                    <td>Rp 0,00</td>
                    <td><?=rupiah($plafon)?></td>
                </tr>
                 <!-- Perulangan Digunakan Untuk Membuat Tabel-->
                 <?php
                    $sisa = $plafon;
                    for ($i=1; $i<=$tenor; $i++)
                    {
                        $sisa = $sisa - $angsuran;
                        echo "
                            <tr>";
                        echo "
                        <td>".$i."</td>
                        ";
                        echo "
                        <td>".rupiah($angsuranbunga)."</td>
 
                        ";
                        echo "
                        <td>".rupiah($angsuran)."</td>
 
                        ";
                        echo "
                        <td>".rupiah($totalangsuran)."</td>
 
                        ";
                        echo "
                        <td>".rupiah($sisa)."</td>
 
                        ";
                        echo "</tr>
 
                        ";
                    }?>

                    <?php
                    $TOTALAB = $angsuranbunga * $tenor; //TOTAL ANGSURAN BUNGA
                    $TOTALAP = $angsuran * $tenor; //TOTAL ANGSURAN POKOK
                    $TOTALA  = $totalangsuran * $tenor; //TOTAL ANGSURAN (ANGSURAN BUNGA + ANGSURAN POKOK)
                    ?>

                    <tr>
                        <th>Total</th>
                        <th><?=rupiah($TOTALAB)?></th>
                        <th><?=rupiah($TOTALAP)?></th>
                        <th><?=rupiah($TOTALA)?></th>
                        <th>0</th>
                    </tr>
            </table>
        </div>
            </div>

            <!-- Tampilkan tombol "Kembali" pada halaman -->
            <!-- <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn" href="fromcicil.html" name="kembali">
                        <span>
                            Kembali
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            <a href="formcicil.html">Kembali</a>
                        </span>
                    </button>
                </div> -->
        </div>

        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({scale: 1.1})
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script
            async="async"
            src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>

        <!--===============================================================================================-->
        <script src="js/main.js"></script>

        <div class="main-blue-button-hover">
            <li>
                <a href="index.php">Kembali</a>
            </li>
        </div>
    </body>
</html>