<?php
include "koneksi.php";

$kode=$_POST['kode'];

$sql=mysqli_query($koneksi,"SELECT * FROM tbl_prov_kota WHERE ProvKode='$kode'
ORDER BY KotaNama");
while($data=mysqli_fetch_array($sql)){
    $kodekota=$data['KotaKode'];
    $namakota=$data['KotaNama'];
    echo "<option value='$kodekota'>".$namakota."</option>";
}
?>