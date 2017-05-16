<?php
include 'koneksi.php';
$q = intval($_GET['q']);
$sql="SELECT harga FROM extra_bed WHERE id_bed = '".$q."'";
$exe = mysqli_query($konek,$sql);

$data = mysqli_fetch_array($exe);
	echo" 
		<input type='number' class='form-control' value='$data[harga]' name='harga_bed' id='harga_bed' onchange='MyFuntcion()' readonly>";
?>

