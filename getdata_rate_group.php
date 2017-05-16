<?php
include 'koneksi.php';
$q = intval($_GET['q']);


$sql="SELECT * FROM rate_harga WHERE id_type = '".$q."' ORDER BY id_rate DESC";
$exe = mysqli_query($konek,$sql);

while($data = mysqli_fetch_array($exe)){
	echo" 
		<option value='".$data['rate']."'>".$data['nama_rate']."</option>";
}