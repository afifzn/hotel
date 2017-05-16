<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: TUGAS PWI</title>
</head>
<body>

<h1 align="center">Mencari Selisih Hari dari Dua Tanggal</h1>
<div style="position: absolute;left:40%">
<form method="post">
<table cellpadding=2 cellspacing=0>
 <tr>
  <td width=100>Tanggal 1</td><td width=100><input type="date" size="8" name="date1" /></td>
 </tr>
 <tr>
  <td>Tanggal 2</td><td><input type="date" size="8" name="date2" /></td>
  <td> &nbsp </td>
 </tr>
 <tr>
  <td colspan="2" align="center"><input type="submit" name="submit" value="HITUNG" />
 <a href="index.php"> <input type="button" value="Kembali ke Menu Utama"> </a></td>
  <td> </br> </td>
 </tr>
 <tr>
  <td colspan="2">
   <?php
  if (isset($_POST['submit'])){
   $date1 = $_POST['date1'];
   $date2 = $_POST['date2'];
   
   $selisih = ((abs(strtotime ($date1) - strtotime ($date2)))/(60*60*24));
   echo "Lama selisih 2 tanggal antara tanggal ".$date1." dan ".$date2." adalah ".$selisih." hari";
   }
   ?>
  </td>
 </tr>
</table>
</form>
</div>
</body>
</html>