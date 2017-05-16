<?php 
include 'koneksi.php';
$id=$_POST['id_kmr'];


mysqli_query($konek,"UPDATE kamar SET status_kamar='OC' WHERE id_kmar='$id'");
?>