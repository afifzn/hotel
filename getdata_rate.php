<?php
include 'koneksi.php';
$q = intval($_GET['q']);
$id_ty="SELECT id_type FROM kamar WHERE id_kamar='".$q."'";
$x=mysqli_query($konek,$id_ty);
$id_typee=mysqli_fetch_array($x);
$id_type=$id_typee['id_type'];

$sql="SELECT * FROM rate_harga WHERE id_type = '".$id_type."' ORDER BY id_rate DESC";
$exe = mysqli_query($konek,$sql);

while($data = mysqli_fetch_array($exe)){
	echo" 
		<option value='".$data['rate']."'>".$data['nama_rate']."</option>";
}