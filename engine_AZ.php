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
	
	//ENGINE BARANG
	
	case"tambah_barang":
		$nama_barang=$_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$harga= $_POST['harga'];
		$satuan=$_POST['satuan'];
		 
		$sql="INSERT INTO barang VALUES(NULL ,'$nama_barang','$jumlah','$harga','$satuan')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:barang.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:barang.php");
		}
		break;
	
	case"edit_barang":
		$id_barang=$_POST['id_barang'];
		$nama_barang=$_POST['nama_barang'];
		$jumlah = $_POST['jumlah'];
		$harga= $_POST['harga'];
		$satuan=$_POST['satuan'];
		 
		$sql=" UPDATE barang set  nama_barang='$nama_barang', jumlah='$jumlah', harga='$harga', satuan='$satuan'
			   WHERE id_barang='$id_barang'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:barang.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:barang.php");
		}
		break;
	
		case"hapus_barang":
	 
	 	$id_barang=$_POST['id_barang'];
		
		$sql=" DELETE from barang WHERE id_barang = '$id_barang'";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:barang.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:barang.php");
		}
		break;
		
		
		// ENGINE BARANG OPERASIONAL
		
		case"tambah_operasional":
		$nama=$_POST['nama'];
		$biaya = $_POST['biaya'];
		$keterangan=$_POST['keterangan'];
		 
		$sql="INSERT INTO barang_operasional VALUES(NULL ,'$nama','$biaya','$keterangan')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:operasional.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:operasional.php");
		}
		break;
		
		case"edit_operasional":
		$id_operasional=$_POST['id_operasional'];
		$nama=$_POST['nama'];
		$biaya= $_POST['biaya'];
		$keterangan=$_POST['keterangan'];
		 
		$sql=" UPDATE barang_operasional set nama='$nama', biaya='$biaya' ,keterangan='$keterangan'
			   WHERE id_operasional='$id_operasional'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:operasional.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:operasional.php");
		}
		break;
		
		case"hapus_operasional":
		$id_operasional=$_POST['id_operasional'];
		 
		$sql=" DELETE from barang_operasional 
			   WHERE id_operasional='$id_operasional'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:operasional.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:operasional.php");
		}
		break;
	
	
	
	// ENGINE HUTANG
	
	case"tambah_hutang":
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$tanggal=$_POST['tanggal'];
		 
		$sql="INSERT INTO hutang_bank VALUES(NULL ,'$nama','$jumlah','$tanggal')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_bank.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_bank.php");
		}
		break;

		case"edit_hutang":
		$id_hutang=$_POST['id_hutang'];
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$tanggal= $_POST['tanggal'];
		 
		$sql=" UPDATE hutang_bank set  nama='$nama', jumlah='$jumlah', tanggal='$tanggal'
			   WHERE id_hutang='$id_hutang'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_bank.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_bank.php");
		}
		break;
		
		case"hapus_hutang":
		$id_hutang=$_POST['id_hutang'];
		 
		$sql=" DELETE from hutang_bank 
			   WHERE id_hutang='$id_hutang'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_bank.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_bank.php");
		}
		break;
		
		// ENGINE HUTANG SUPPLIER
		
		case"tambah_hutangsupp":
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$tanggal=$_POST['tanggal'];
		 
		$sql="INSERT INTO hutang_supplier VALUES(NULL ,'$nama','$jumlah','$tanggal')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_supplier.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_supplier.php");
		}
		break;
		
		case"edit_hutangsupp":
		$id_hutangsupp=$_POST['id_hutangsupp'];
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$tanggal= $_POST['tanggal'];
		 
		$sql=" UPDATE hutang_supplier set  nama='$nama', jumlah='$jumlah', tanggal='$tanggal'
			   WHERE id_hutangsupp='$id_hutangsupp'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_supplier.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_supplier.php");
		}
		break;
		
		
		case"hapus_hutangsupp":
		$id_hutangsupp=$_POST['id_hutangsupp'];
	
		 
		$sql=" DELETE  FROM hutang_supplier 
			   WHERE id_hutangsupp='$id_hutangsupp'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_supplier.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_supplier.php");
		}
		break;
		
		// ENGINE HUTANG LAIN
		
		case"tambah_hutanglain":
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$tanggal=$_POST['tanggal'];
		 
		$sql="INSERT INTO hutang_lain VALUES(NULL ,'$nama','$jumlah','$tanggal')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_lainnya.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_lainnya.php");
		}
		break;
		
		case"edit_hutanglain":
		$id_hutanglain=$_POST['id_hutanglain'];
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$tanggal= $_POST['tanggal'];
		 
		$sql=" UPDATE hutang_lain set  nama='$nama', jumlah='$jumlah', tanggal='$tanggal'
			   WHERE id_hutanglain='$id_hutanglain'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_lainnya.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_lainnya.php");
		}
		break;
		
		case"hapus_hutanglain":
		$id_hutanglain=$_POST['id_hutanglain'];
		 
		$sql="DELETE from hutang_lain WHERE id_hutanglain='$id_hutanglain'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:hutang_lai	nnya.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:hutang_lainnya.php");
		}
		break;
		
		
		
		// ENGINE PIUTANG
		
		case"tambah_piutang":
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$tanggal=$_POST['tanggal'];
		 
		$sql="INSERT INTO piutang VALUES(NULL ,'$nama','$jumlah','$tanggal')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:piutang.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:piutang.php");
		}
		break;
		
		case"edit_piutang":
		$id_piutang=$_POST['id_piutang'];
		$nama=$_POST['nama'];
		$jumlah= $_POST['jumlah'];
		$tanggal=$_POST['tanggal'];
		 
		$sql=" UPDATE piutang set nama='$nama', jumlah='$jumlah', tanggal='$tanggal'
			   WHERE id_piutang='$id_piutang'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:piutang.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:piutang.php");
		}
		break;
		
		case"hapus_piutang":
	 
	 	$id_piutang=$_POST['id_piutang'];
		
		$sql=" DELETE from piutang WHERE id_piutang = '$id_piutang'";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:piutang.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:piutang.php");
		}
		break;
		
		// ENGINE ASSET 
		
		case"tambah_asset":
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$harga=$_POST['harga'];
		$satuan=$_POST['satuan'];
		$keterangan=$_POST['keterangan'];
		
		 
		$sql="INSERT INTO asset VALUES(NULL ,'$nama','$jumlah','$harga', '$satuan', '$keterangan')";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:form_assets.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:form_assets.php");
		}
		break;
		
		case"edit_asset":
		$id_asset=$_POST['id_asset'];
		$nama=$_POST['nama'];
		$jumlah = $_POST['jumlah'];
		$harga=$_POST['harga'];
		$satuan=$_POST['satuan'];
		$keterangan=$_POST['keterangan'];
		
		 
		$sql="UPDATE asset set nama='$nama', jumlah='$jumlah', harga='$harga', satuan='$satuan', keterangan='$keterangan'
			   WHERE id_asset='$id_asset'";
		
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:form_assets.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:form_assets.php");
		}
		break;
		
		case"hapus_asset":
	 
	 	$id_asset=$_POST['id_asset'];
		
		$sql=" DELETE from asset WHERE id_asset = '$id_asset'";
		$exe=mysqli_query($konek,$sql);
		if($exe){
			$_SESSION['pesan']='sukses';
			header("location:form_assets.php");
		}else{
			$_SESSION['pesan']='gagal';
			header("location:form_assets.php");
		}
		break;
		
		
		
 }
?>