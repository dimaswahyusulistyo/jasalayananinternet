<?php
  include "config.php";
    session_start();
        if($_SESSION['status']!="login"){
            header("location:login.php");
        }
  ?>
<!-- Memanggil header -->
<?php require('header.php');?> 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <link rel=”icon” href=”assets/images/indohome.png”>
  <title>IndoHome</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->
  
  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <!-- scrolling -->
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <h6>Welcome to IndoHome</h6>
                  <h2>Solusi Internet<br> <em>Cepat </em><span>Berkelas</span> <em>Cerdas</em> untuk Aktivitas Tanpa
                    Batas</h2>
                  <p> Bebas akses internet stabil, telepon rumah jernih dan tayangan TV interaktif terpopuler dengan
                    IndoHome.</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a type="button" onclick="window.location.href='formdaftar.php'" velue="Register">Register</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 085-727-694-993</a>
                    </div>
                  </div>
                </div>
                <div class="item header-text">
                  <h2>Paket Internet <em>Fiber Ultra</em> Cepat <span>dan unlimited</span></h2>
                  <p> Miliki layanan internet terbaik di rumah sekarang juga.</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a type="button" onclick="window.location.href='formdaftar.php'" velue="Register">Register</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 085-727-694-993</a>
                    </div>
                  </div>
                </div>
                <div class="item header-text">
                  <h2>Nikmati <em>paket combo</em> Internet <span>Tv terbaik untuk keluarga</span></h2>
                  <p>Pelayanan maksimal, pelangan puas</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a type="button" onclick="window.location.href='formdaftar.php'" velue="Register">Register</a>
                    </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i> 085-727-694-993</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="services" class="our-services section">
    <div class="services-right-dec">
      <img src="assets/images/services-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="services-left-dec">
        <img src="assets/images/services-left-dec.png" alt="">
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Kami <em>Siap</em> menemani <span> hari-hari</span></h2>
            <span>Anda</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <!-- scrolling -->
          <div class="owl-carousel owl-services">
            <div class="item">
              <h4>Streaming dan Gaming dengan Kecepatan Tinggi</h4>
              <div class="icon"><img src="assets/images/icon2.png" alt=""></div>
              <p>IndoHome merupakan ISP #1 di Dunia untuk streaming dan gaming</p>
            </div>
            <div class="item">
              <h4>Dibangun Oleh Gamers untuk Gamers</h4>
              <div class="icon"><img src="assets/images/icon3.png" alt=""></div>
              <p>Custom routing ke server game kelas dunia menjadikan koneksi MyRepublic rendah latensi. Tidak ada lagi
                lag yang bisa menghalangi kamu untuk menang!</p>
            </div>
            <div class="item">
              <h4>Lebih Cepat, Lebih Terjangkau</h4>
              <div class="icon"><img src="assets/images/icon1.png" alt=""></div>
              <p>IndoHome menawarkan berbagai paket super cepat dengan harga super terjangkau. Bayar lebih murah untuk
                kualitas dan kecepatan lebih baik.</p>
            </div>
            <div class="item">
              <h4>TV Pilihan Untuk Seluruh Keluarga</h4>
              <div class="icon"><img src="assets/images/icon4.png" alt=""></div>
              <p>Mulai dari saluran TV lokal, channel premium seperti Galaxy Premium, Nickelodeon, ONE, Animal Planet
                dan lainnya.</p>
            </div>
            <div class="item">
              <h4>Streaming dan Gaming dengan Kecepatan Tinggi</h4>
              <div class="icon"><img src="assets/images/icon2.png" alt=""></div>
              <p>IndoHome merupakan ISP #1 di Dunia untuk streaming dan gaming</p>
            </div>
            <div class="item">
              <h4>Dibangun Oleh Gamers untuk Gamers</h4>
              <div class="icon"><img src="assets/images/icon3.png" alt=""></div>
              <p>Custom routing ke server game kelas dunia menjadikan koneksi MyRepublic rendah latensi. Tidak ada lagi
                lag yang bisa menghalangi kamu untuk menang!</p>
            </div>
            <div class="item">
              <h4>Lebih Cepat, Lebih Terjangkau</h4>
              <div class="icon"><img src="assets/images/icon1.png" alt=""></div>
              <p>IndoHome menawarkan berbagai paket super cepat dengan harga super terjangkau. Bayar lebih murah untuk
                kualitas dan kecepatan lebih baik.</p>
            </div>
            <div class="item">
              <h4>TV Pilihan Untuk Seluruh Keluarga</h4>
              <div class="icon"><img src="assets/images/icon4.png" alt=""></div>
              <p>Mulai dari saluran TV lokal, channel premium seperti Galaxy Premium, Nickelodeon, ONE, Animal Planet
                dan lainnya.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="assets/images/pengguna.png" alt="Two Girls working together">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>IndoHome <em> tersedia hingga</em> <span>pelosok </span> negeri</h2>
            <p>IndoHome Business Solutions menyediakan pilihan layanan yang dapat disesuaikan dengan berbagai kebutuhan
              dan skala usaha. Tingkatkan produktivitas Anda dengan koneksi internet ultra-cepat kami, karena peluang
              usaha tidak akan menunggu</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-01.png" alt="">
                    </div>
                    <div class="count-digit">+5Jt</div>
                    <div class="count-title">Pengguna</div>
                    <p>Diseluruh Dunia</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-02.png" alt="">
                    </div>
                    <div class="count-digit">250</div>
                    <div class="count-title">Mbps Kecepatan</div>
                    <p>Didukung Fiber Ultra</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="assets/images/service-icon-03.png" alt="">
                    </div>
                    <div class="count-digit">#1</div>
                    <div class="count-title">Dunia</div>
                    <p>Pilihan Pengguna</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="assets/images/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <!-- pemberi warna tulisan -->
          <div class="section-heading">
            <h2>Tersedia pilihan <em> layanan Add-on </em> sesuai keinginan <span>dan kebutuhan</span></h2>
            <span>Anda</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/netflix.png" alt="">
                <!-- menampilkan kotak orange -->
                <div class="hover-effect"> 
                  <div class="inner-content">
                    <h4>First Add-On</h4></a>
                    <span>Netflix</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/channel.png" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <a href="#">
                      <h4>Second Add-On</h4>
                    </a>
                    <span>Channel Tambahan</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/speed.jpg" alt="">
                <div class="hover-effect">
                  <div class="inner-content">
                    <h4>Third Add-On</h4></a>
                    <span>Upgrade Speed</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div id="contact" class="pricing-tables">
    <div class="tables-left-dec">
      <img src="assets/images/tables-left-dec.png" alt="">
    </div>
    <div class="tables-right-dec">
      <img src="assets/images/tables-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Gabung <em>dan</em> Tentukan <span>Pilihan<span> Anda</span></h2>
            <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
            <a href="laporan.php" class="btn btn-sm btn-primary float-right">Cetak PDF</a>
          </div>  
        </div>
      </div>
      
      <!-- Data Base -->
      <div class="row">
        <tbody>
            <?php
              include('koneksi.php'); //memanggil file koneksi
              // $datas = mysqli_query($koneksi, "select * from barang") or die(mysqli_error($koneksi));
              $datas = mysqli_query($koneksi,"SELECT * FROM barang");
              //script untuk menampilkan data barang

              $no = 1;//untuk pengurutan nomor

              //melakukan perulangan
              // while($row = mysqli_fetch_assoc($datas)) {
                while ($row = mysqli_fetch_array($datas)) {
            ?>
                <div class="col-lg-4">
                  <!-- kotak putih -->
                  <div class="item first-item">
                    <td>
                    <h4><?= $row['nama'];?></h4>
                    <span><?= $row['harga']; ?></span>
                    <td>
                        <img src="gambar/<?php echo $row['foto'] ; ?>" style="width: 100%;">
                    </td>
                    <ul>
                      <li><?= $row['deskripsi']; ?></li>
                    </ul>
                    <td>
                        <a href="editlayanan.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit </a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                    <div class="main-blue-button-hover">
                        <a type="button" onclick="window.location.href='formdaftar.php'" velue="Register">Register</a>
                    </div>
                  </div>
                </div>
              <?php $no++; } ?>
              </td>
        </tbody>
        <!-- <div class="col-lg-4">
          <div class="item first-item">
            <h4>Silver</h4>
            <em>Rp409K/mo</em>
            <span>Rp309K</span>
            <ul>
              <li>Unlimited Kuota</li>
              <li>Cocok 7 Perangkat</li>
              <li>Up to 100Mbps</li>
              <li>Basic Support</li>
            </ul>
            <div class="main-blue-button-hover">
              <a type="button" onclick="window.location.href='form.php'" velue="Register">Register</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <h4>Gold</h4>
            <em>Rp509K/mo</em>
            <span>Rp437K</span>
            <ul>
              <li>Unlimited Kuota</li>
              <li>Cocok 12 Perangkat</li>
              <li>Up to 175Mbps</li>
              <li>Pro Support</li>
            </ul>
            <div class="main-blue-button-hover">
              <a type="button" onclick="window.location.href='form.php'" velue="Register">Register</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item third-item">
            <h4>Platinum</h4>
            <em>Rp739K/mo</em>
            <span>Rp609K</span>
            <ul>
              <li>Unlimited Kuota</li>
              <li>Cocok 16 Perangkat</li>
              <li>Up to 250Mbps</li>
              <li>Best Support</li>
            </ul>
            <div class="main-blue-button-hover">
              <a type="button" onclick="window.location.href='form.php'" velue="Register">Register</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    // Acc
    $(document).on("click", ".naccs .menu div", function () {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
        $(".naccs .menu div").removeClass("active");
        $(".naccs ul li").removeClass("active");

        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = $(".naccs ul")
          .find("li:eq(" + numberIndex + ")")
          .innerHeight();
        $(".naccs ul").height(listItemHeight + "px");
      }
    });
  </script>
</body>

</html>
<!-- Memanggil footer -->
<?php  require('footer.php');?>