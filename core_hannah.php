<?php
	include"koneksi.php";
	//$aksi = $_GET['p'];
	switch ($_GET['p']) {
		
		default: echo "Halaman Tidak Ditemukan"; break;
		
		case"reservation_fo":
		$gelar= $_POST['gelar'];
		$nama1 = $_POST['nama'];
		$nama=$gelar.".".$nama1;
		$alamat = $_POST['alamat'];
		$no_id = $_POST['no_id'];
		$request = $_POST['request'];
		$negara = $_POST['negara'];
		$id_kamar = $_POST['id_kamar'];
		$tgl_masuk = $_POST['tgl_masuk'];
		$tgl_keluar = $_POST['tgl_keluar'];
		$lama = $_POST['selisih'];
		$reservasi_tipe = $_POST['reservasi_tipe'];
		$saldo = $_POST['saldo'];
		$total = $_POST['total'];
		$tipe = $_POST['tipe_bayar'];
		$qty = $_POST['qty'];
		$bed= $_POST['bed'];
		$harga_bed=$_POST['harga_bed'];
		$bayar = $total + $harga_bed;
		
		//generate nomor reservasi
		$k="SELECT nomor_reservasi FROM reservasi ORDER BY id_reservasi DESC LIMIT 1";
		$x_k=mysqli_query($konek,$k);
		$data_kode = mysqli_fetch_array($x_k);
		
		$tahun=substr($tgl_masuk,0,4);
		$bulan=substr($tgl_masuk,5,2);
		$tgl=substr($tgl_masuk,8,2);
		$kode_awal=$tgl.$bulan.$tahun;
		if($data_kode){
				$kode1= substr($data_kode['nomor_reservasi'],8,6);
				$kode2= substr($data_kode['nomor_reservasi'],0,8);
				$kode= $kode1 + 1;
				$kode_otomatis = $kode_awal.$kode;
	}else {
		$kode_otomatis = $kode_awal."100001";
	}
		
		
		
		//insert data tamu
		$tamu="INSERT INTO tamu VALUES(NULL,'$nama','$alamat','$no_id','$negara','$request','In')";
		$x_tamu=mysqli_query($konek,$tamu);
		if($x_tamu){
		
		
		//ambil id_tamu terakhir
		$s_id="SELECT id_tamu FROM tamu ORDER BY id_tamu DESC LIMIT 1";
		$x_id=mysqli_query($konek,$s_id);
		$id=mysqli_fetch_array($x_id);
		$id_tamu=$id['id_tamu'];
		
		//insert data ke tabel reservasi
		$sql = "INSERT INTO reservasi VALUES(NULL,'$kode_otomatis','$tgl_masuk','$tgl_keluar','$lama','$qty','$bed','$reservasi_tipe','$saldo','$bayar','$tipe','$id_tamu','$id_kamar')";
		$exe = mysqli_query($konek,$sql);
		
		$up="UPDATE kamar SET status_kamar='OC' WHERE id_kamar='$id_kamar'";
		$x_up = mysqli_query($konek,$up);
		
		header("location:reservation.php?msg=success");
		}else{
			header("location:reservation.php?msg=failed");
		}
		break;
		
		case"tambah_kamar":
		$nomor = $_POST['nomor_kamar'];
		$tipe = $_POST['tipe_kamar'];
		$desk = $_POST['desk'];
		$gambar = $_FILES['gambar']['name'];
			if(strlen($gambar)>0){
				if(is_uploaded_file($_FILES['gambar']['tmp_name'])){
					move_uploaded_file($_FILES['gambar']['tmp_name'],"assets/gambar/".$gambar);
				}
			}
		
		$sql="INSERT INTO kamar VALUES(NULL,'$nomor','$tipe','$desk','$gambar','VR')";
		$exe = mysqli_query($konek,$sql);
		if($exe){
			header("location:house-control.php?msg=success");
		}else{
			header("location:house-control.php?msg=failed");
		}
		break;
		
		case"edit_kamar":
		$nomor = $_POST['nomor_kamar'];
		$id = $_POST['id_kamar'];
		$tipe = $_POST['tipe_kamar'];
		$status = $_POST['status_kamar'];
		$desk = $_POST['desk'];
		$gambar = $_FILES['gambar']['name'];
			if(strlen($gambar)>0){
				if(is_uploaded_file($_FILES['gambar']['tmp_name'])){
					move_uploaded_file($_FILES['gambar']['tmp_name'],"assets/gambar/".$gambar);
				}
			}
			
			if($gambar==NULL){
				$gambar=$_POST['images'];
			}
		
		$sql="UPDATE kamar SET nomor_kamar='$nomor', type_kamar='$tipe', deskripsi='$desk', gambar='$gambar' status_kamar='$status' WHERE id_kamar='$id'";
		$exe = mysqli_query($konek,$sql);
		if($exe){
			header("location:house-control.php?msg=success");
		}else{
			header("location:house-control.php?msg=failed");
		}
		break;
		
		case"hapus_kamar":
		$id=$_POST['id_kamar'];
		$sql="DELETE FROM kamar WHERE id_kamar='$id'";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			header("location:house-control.php?msg=success");
		}else{
			header("location:house-control.php?msg=failed");
		}
		break;
		
		case"tambah_rate":
		$id = $_POST['id_type'];
		$type=$_POST['type'];
		$rate = $_POST['rate'];
		$nama_rate = $_POST['nama_rate'];
		
		
		$sql="INSERT INTO rate_harga VALUES(NULL,'$id','$nama_rate','$rate')";
		$exe = mysqli_query($konek,$sql);
		if($exe){
			header("location:price-room.php?msg=success&name=$type&id=$id");
		}else{
			header("location:price-room.php?msg=failed&name=$type&id=$id");
		}
		break;
		
		case"edit_rate":
		
		$rate = $_POST['rate'];
		$nama_rate = $_POST['nama_rate'];
		$id = $_POST['id_type'];
		$type=$_POST['type'];
		
		$id_rate = $_POST['id_rate'];
		
		$sql="UPDATE rate_harga SET nama_rate='$nama_rate', rate='$rate' WHERE id_rate='$id_rate'";
		
		$exe = mysqli_query($konek,$sql);
		if($exe){
			header("location:price-room.php?msg=success&name=$type&id=$id");
		}else{
			header("location:price-room.php?msg=failed&name=$type&id=$id");
		}
		break;
		
		case"hapus_rate":
		
		$id=$_POST['id_rate'];
		$id = $_POST['id_type'];
		$type=$_POST['type'];
		$sql="DELETE FROM rate_harga WHERE id_rate='$id'";
		$exe=mysqli_query($konek,$sql);
			$exe = mysqli_query($konek,$sql);
		if($exe){
			header("location:price-room.php?msg=success&name=$type&id=$id");
		}else{
			header("location:price-room.php?msg=failed&name=$type&id=$id");
		}
		break;
		
		case"tambah_type":
		$nama=$_POST['nama'];
		$sql="INSERT INTO type_kamar VALUES(NULL,'$nama')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			header("location:type-room.php?msg=success");
		}else{
			header("location:type-room.php?msg=failed");
		}
		break;
		
		case"edit_type":
		$nama=$_POST['nama'];
		$id=$_POST['id_type'];
		$sql="UPDATE type_kamar SET nama_type='$nama' WHERE id_type='$id'";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			header("location:type-room.php?msg=success");
		}else{
			header("location:type-room.php?msg=failed");
		}
		break;
		
		case"hapus_type":
		$id=$_POST['id_type'];
		$sql="DELETE FROM type_kamar WHERE id_type='$id'";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			header("location:type-room.php?msg=success");
		}else{
			header("location:type-room.php?msg=failed");
		}
		break;
		
		case"reservation_group1":
		
		$gelar=$_POST['gelar'];
		$nama1=$_POST['nama'];
		$nama= $gelar.".".$nama1;
		$alamat = $_POST['alamat'];
		$no_id = $_POST['no_id'];
		$negara=$_POST['negara'];
		$request=$_POST['reequest'];
		$jum_kamar = $_POST['jumlah_kamar'];
		$id_type=$_POST['type'];
		$tgl_masuk = $_POST['tgl_masuk'];
		$tgl_keluar = $_POST['tgl_keluar'];
		$lama = $_POST['selisih'];
		$reservasi_tipe = $_POST['reservasi_tipe'];
		$qty=$_POST['qty'];
		$room=$_POST['room'];
		

		$tamu="INSERT INTO tamu VALUES(NULL,'$nama','$alamat','$no_id','$negara','$request','In')";
		$x_tamu=mysqli_query($konek,$tamu);
		if($x_tamu){
				
				
header("location:group-reservation1.php?msg=success");
		}else{
		header("location:group-reservation.php?msg=failed");
		}
	break;	
	}
?>