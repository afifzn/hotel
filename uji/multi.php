<!DOCTYPE html>
<html>
<head>
	<title>Input Banyak Data Ke Database Dengan PHP | www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Input Banyak Data Ke Database Dengan PHP | www.malasngoding.com</h1>
	<h2>Data Makanan</h2>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Makanan</th>
		</tr>
		<?php 
		include "koneksi.php";
		$data = mysqli_query($konek,"select * from makanan");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['makanan']; ?></td>		
		</tr>
		<?php } ?>
	</table>
	<br/>
	<h2>Input Banyak Data</h2>
	<?php 
include 'koneksi.php';
if(isset($_POST['simpan'])){
$makanan = $_POST['makanan'];
$jumlah_dipilih = count($makanan);

for($x=0;$x<$jumlah_dipilih;$x++){
	mysqli_query($konek,"UPDATE makanan SET makanan='Banyak' WHERE id='$makanan[$x]'");
}


}
?>
	
	<form method="post" action="">		
	<table>
	<?php 
		include "koneksi.php";
		$ma=mysqli_query($konek,"SELECT * FROM makanan");
		while($makanan=mysqli_fetch_array($ma)){
	?>
		<tr>
			<td>
				<input type="checkbox" name="makanan[]" value="<?php echo $makanan['id']?>">
			</td>
			<td>
				<?php echo $makanan['makanan']?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td>				
			</td>
			<td>
				<input type="submit" value="Input" name="simpan">
			</td>
		</tr>
	</table>
	</form>

</body>
</html>