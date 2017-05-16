<?php
	

// String dengan variabel
$tgl_masuk = '1994-04-05';
		$tahun=substr($tgl_masuk,0,4);
		$bulan=substr($tgl_masuk,5,2);
		$tgl=substr($tgl_masuk,8,2);
		$kode='199999';
		$kode_awal=$tgl.$bulan.$tahun.$kode;
		$kode2=substr($kode_awal,8,6);
		$kode = $kode2 + 1;
echo $kode; // Dengan satu tanda kutip 
 



?>