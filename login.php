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
  <link rel="stylesheet" type="text/css" href="css/main.css">
  
  <!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
</head>
<?php
	@ob_start();
	session_start();
	if(isset($_POST['proses'])){
		require 'config.php';
			
		$user = strip_tags($_POST['user']);
		$pass = md5($_POST['pass']);
        $_SESSION["last_login_time"] = time();//Pengambilan waktu

        $data = mysqli_query($conn,"SELECT* FROM login WHERE user='$user'");
        $cek = mysqli_num_rows($data);
        if($cek > 0){
            $_SESSION['user'] = $user;
            $_SESSION['status'] = "login";
            echo '<script>alert("Login Sukses");window.location="index.php"</script>';
        }else{
            echo '<script>alert("Maaf! data yang anda masukan salah.");history.go(-1);</script>';
        }
	}
    if(isset($_SESSION['status']))
    {header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="favicon.ico">
    <link rel="icon" href="icon.ico" type="image/ico">
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="contact1">

<div class="container">
<br><br><br><br><br><br>

<div class="row justify-content-center">

    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-body">
                <h1 class="h4 text-center mb-4"><b>Login Admin</b></h1>
                <form method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="user" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="pass" placeholder="Password">
                    </div>
                    <button class="btn btn-purple form-control-user btn-block"
                    name="proses"  type="submit">Login</button>
                </form>
                <li>
                    <a href="homenoadmin.php">Bukan Admin?</a>
                </li>
            </div>
        </div>
    </div>

</div>


</div> <!-- end container fluid -->

    <script src="assets/js/jquery.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1000);
</script>
</body>
</html>