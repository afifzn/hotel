<?php
session_start();
 include"koneksi.php";
	//$aksi = $_GET['p'];
	switch ($_GET['p']) {
		
		default: echo "Halaman Tidak Ditemukan"; break;
	
		case"reservasi":
		$id_kamar=$_POST['id_kamar'];
		$tamu=$_POST['nama_tamu'];
		$tgl_masuk = $_POST['tgl_masuk'];
		$tgl_keluar= $_POST['tgl_keluar'];
		$saldo=$_POST['saldo'];
		$total=$_POST['total'];
		 $lama = ((abs(strtotime ($tgl_masuk) - strtotime ($tgl_keluar)))/(60*60*24));
		 
		$sql="INSERT INTO tamu VALUES(NULL,'$id_kamar','$tamu','$tgl_masuk','$tgl_keluar','$lama','$saldo','$total')";
		$exe=mysqli_query($konek,$sql);
		$up="UPDATE kamar SET status_kamar='OC' WHERE id_kamar='$id_kamar'";
		$xx=mysqli_query($konek,$up);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:fo_ds.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:fo_ds.php");
		}
		break;
	}
	
	
 
?>