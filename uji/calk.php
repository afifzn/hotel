<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalkulator JavaScript</title>
<style type="text/css">
.body {
    margin: 0px;
    padding: 0px;
    background-color: #efefef;
}
.body1 {
    margin: auto;
    padding: 5px;
    background-color: #f3f3f3;
    border: 1px solid #000;
    width: 250px;
}
</style>
<script>
function hitung(){
    var angka1 = document.getElementById('angka1').value;
    var angka2 = document.getElementById('angka2').value;
    var oprt = document.getElementById('oprt').value;

    // kondisi apabila operator telah dipilih 
    
        hasil = eval(angka1)+eval(angka2);
    
    
    document.getElementById('hasil').value = hasil;
    
}
</script>
</head>

<body class="body">
<div class="body1">
  <h1>Kalkulator Sederhana</h1>
  <table>
    <tr>
      <td>Input 1</td>
      <td>:</td>
      <td><input type="text" name="angka1" id="angka1" onchange="hitung()" /></td>
    </tr>
    <tr>
      <td>Operator</td>
      <td>:</td>
      <td><select id="oprt" onchange="hitung()">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="/">/</option>
          <option value="*">*</option>
        </select></td>
    </tr>
    <tr>
      <td>Input 2</td>
      <td>:</td>
      <td><input type="text" name="angka2" id="angka2" onFocus="hitung()" /></td>
    </tr>
    <tr>
      <td><button id="samadengan" onclick="hitung()">=</button></td>
    </tr>
    <tr>
      <td>Hasil</td>
      <td>:</td>
      <td><input type="text" id="hasil" /></td>
    </tr>
  </table>
</div>
</body>
</html>