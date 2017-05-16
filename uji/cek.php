<?php 
	include "../koneksi.php;";
 
	if (isset($_POST['edit'] ) ) {
		
		$id  = $_POST['id'];
		$nik  = $_POST['nik'];
		$nama  = $_POST['nama'];
		$hobby  = implode(', ', $_POST['hobby']);
 
		$sql = mysqli_query ($con, "UPDATE ismet_biodata SET
								nik = '$nik', nama = '$nama', hobby = '$hobby' WHERE id = '$id' ");
		header ('location:index.php?sukses');
	}
 
	$show = $_GET['edit'];
	$kueri = mysqli_query ($con, "SELECT * FROM ismet_biodata WHERE id = '$show' ");
 
	$edit = mysqli_fetch_array($kueri);
 
	$checked = explode(', ', $edit['hobby']);
 
	$i = mysqli_query($con, "SELECT * FROM ismet_biodata ORDER BY id DESC");
 
 ?>
 
 <form action="" method="POST" name="form[0]">
	NIK : <br/>
	<input type="text" name="nik" placeholder="" value="<?php echo $edit['nik'] ?>"><br/>
	NAMA : <br/>
	<input type="text" name="nama" placeholder="" value="<?php echo $edit['nama'] ?>"><br/>
	Hobby : <br/>
	<input type="checkbox" name="hobby[]" value="balet"  <?php in_array ('balet', $checked) ? print "checked" : ""; ?>> Balet <br/><br/>
	<input type="checkbox" name="hobby[]" value="renang" <?php in_array ('renang', $checked) ? print "checked" : ""; ?>> renang <br/><br/>
	<input type="checkbox" name="hobby[]" value="ngoding" <?php in_array ('ngoding', $checked) ? print "checked" : ""; ?>> ngoding <br/><br/>
	<input type="checkbox" name="hobby[]" value="berkelahi" <?php in_array ('berkelahi', $checked) ? print "checked" : ""; ?>> berkelahi <br/><br/>

	<input type="submit" name="edit" value="Ubah">
	<input type="submit" name="hapus" value="HAPUS">
	<input type="reset" name="reset" value="CANCEL"><br/><br/>
	<input type="hidden" name="id" value="<?php echo $edit['id'] ?>"><br/><br/>
	
	<table border="1" cellspacing="0">
		<input type="checkbox" name="" class="all" onclick="cek(0);">Check All
		<tr>
			<td></td>
			<td>NIK</td>
			<td>NAMA</td>
			<td>HOBBY</td>
			<td>AKSI</td>
		</tr>
		<?php if(mysqli_num_rows($i)>0){ ?>
			<?php while($data = mysqli_fetch_array($i)){ ?>
				<tr>
					<td><input type="checkbox" name="num[]" value="<?php echo $data['id'] ?>"></td>
					<td><?php echo $data['nik']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['hobby']; ?></td>
					<td>
						<a href="edit.php?edit=<?php echo $data['id'] ?>">EDIT</a>
					</td>
				</tr>
			<?php } ?>
		<?php } ?>
	</table>
</form>