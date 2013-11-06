<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi Aritmatika</title>
</head>

<body bgcolor="#00FFFF">
<h1><font color="#CC00CC">Operasi Aritmatika</h1>

<table>
	<tr>
		<td><b>
	    <div align="center"><font color="#FF0000">Bilangan 1<b></div></td>
		<td><div align="center"><font color="#FF0000"><b>Operator</b></div></td>
		<td><b>
	    <div align="center"><font color="#FF0000">Bilangan 2<b></div></td>
		<td>&nbsp;</td>
		<td><b>
	    <div align="center"><font color="#FF0000">Hasil<b></div></td>
	</tr>
<form method="post">
<tr><td><input type="number" name="angka1" value="<?php
echo isset($_POST['angka1']) ? $_POST['angka1'] : '' ; 
?>" required placeholder= "Masukkan Nilai Angka"/></td>
<td><select name="operator">
<option value="+"
<?php if (isset($_POST['operator']) && $_POST['operator']=='+') {
				echo "selected";
			} ?>
>+</option>
<option value="-"
<?php if (isset($_POST['operator']) && $_POST['operator']=='-') {
				echo "selected";
			} ?>
>-</option>
<option value="*"
<?php if (isset($_POST['operator']) && $_POST['operator']=='*') {
				echo "selected";
			} ?>
>*</option>
<option value="/"
<?php if (isset($_POST['operator']) && $_POST['operator']=='/') {
				echo "selected";
			} ?>
>/</option>
</select></td>
<td><input type="number" name="angka2" value="<?php
echo isset($_POST['angka2']) ? $_POST['angka2'] : '' ; 
?>" required placeholder= "Masukkan Nilai Angka"/></td>
	<?php
			if(isset($_POST['angka1']) or isset($_POST['angka2']) ){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			}else{
			$angka1 = "0";
			$angka2 = "0";
			}
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			}else{
			$operator ="";
			}
			switch($operator){
			case "+":
				$hasil = $_POST["angka1"] + $_POST["angka2"];
			break;
			case "-":
				$hasil = $_POST["angka1"] - $_POST["angka2"];
			break;
			case "*":
				$hasil = $_POST["angka1"] * $_POST["angka2"];
			break;
			case "/":
				$hasil = $_POST["angka1"] / $_POST["angka2"];
			break;
			}
	?>
	<td>
		<input type="submit" name="samadengan" value="=" /></td>
	<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>
</form>
</table>
</body>
</html>
