<!DOCTYPE html 
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
	<title>Data Checkbox</title> 
</head> 
<body> 
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
	Pilih Hobby <br />
	<input type="checkbox" name="hobby[]" value="Membaca" 
	/>Membaca <br />
	<input type="checkbox" name="hobby[]" value="Olahraga" 
	/>Olahraga <br />
	<input type="checkbox" name="hobby[]" value="Menyanyi" 
	/>Menyanyi <br /> 
	<input type="checkbox" name="hobby[]" value="Menulis" 
	/>Menulis <br /> 
	<input type="checkbox" name="hobby[]" value="Meng-coding" 
	/>Meng-coding <br /> 
	<input type="submit" value="ok" /> 
	</form> 
<?php 
// Ekstraksi nilai 
if (isset($_POST['hobby'])) { 
	foreach ($_POST['hobby'] as $key => $val) { 
	echo $key . '.  Hobby Anda : ' .$val . '<br />'; 
	} 
} 
?> 
</body> 
</html> 