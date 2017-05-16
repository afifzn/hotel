<?php
include 'koneksi.php';
$q = intval($_GET['q']);


$sql="SELECT * FROM kamar WHERE id_type = '".$q."' AND status_kamar='VR' ORDER BY id_kamar DESC";
$exe = mysqli_query($konek,$sql);

while($data = mysqli_fetch_array($exe)){
	echo" 
                                                <option value='$data[id_kamar]'>$data[nomor_kamar]</option>
                                           ";
}

