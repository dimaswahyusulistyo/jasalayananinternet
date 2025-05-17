<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Dinamic Select/Option</h1>

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
</body>
</html>

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