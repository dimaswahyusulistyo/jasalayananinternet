<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kredit WiFI</title>
        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
        <link rel="stylesheet" href="assets/css/animated.css">
        <link rel="stylesheet" href="assets/css/owl.css">
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

                <form
                    class="contact1-form validate-form"
                    action="terimakredit.php"
                    method="post">
                    <span class="contact1-form-title">
                        Isikan Data Kredit WiFi Pelanggan
                    </span>
                    <!-- Tabel Inputan -->
                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        Harga WiFi :
                        <input class="input1" type="number" name="harga" placeholder="Min 10 JT Rupiah">
                        <span class="shadow-input1"></span>
                    </div>
                    <div
                        class="wrap-input1 validate-input"
                        data-validate="Valid email is required: ex@abc.xyz">
                        Uang Muka (DP) :
                        <input class="input1" type="number" name="uangmuka" placeholder="30%-100%">
                        <span class="shadow-input1"></span>
                    </div>
                    <div
                        class="wrap-input1 validate-input"
                        data-validate="Valid email is required: ex@abc.xyz">
                        Bunga :
                        <input class="input1" type="number" name="bunga" placeholder="5%-10%">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Name is required">
                        Margin Bank :
                        <input class="input1" type="number" name="margin" placeholder="%">
                        <span class="shadow-input1"></span>
                    </div>
                    <div class="wrap-input1 validate-input" data-validate="Subject is required">
                        Jangka Waktu (Tenor) :
                        <input class="input1" type="number" name="waktu" placeholder="1-5 Tahun">
                        <span class="shadow-input1"></span>
                    </div>

                    <!-- Tampilkan tombol "Kalkulasi" pada halaman -->
                    <div class="container-contact1-form-btn">
                        <button class="contact1-form-btn" type="submit">
                            <span>
                                Kalkulasi
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="main-blue-button-hover">
			<li>
				<a href="index.php">Kembali</a>
			</li>
		</div>
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

    </body>
</html>