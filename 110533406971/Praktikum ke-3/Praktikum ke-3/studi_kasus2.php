<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 2</title>
</head>

<body>

<html>
<head>
	<title>Checkbox dengan menambahkan Preselecting</title>
</head>
<body>
	<h1>Daftar Genre</h1>
	<div id='daftar'>Daftar Genre Lagu </div>
	<em>Pilih genre lagu favorit kamu:</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="genre[]" value="Korean Pop (K-POP)" 
		<?php if (isset($_POST['genre'])) {

			foreach ($_POST['genre'] as $key => $value) {
				if ($value=='Korean Pop (K-POP)') {
					echo "checked";
				}
		}
			
		} ?>
		>Korean Pop (K-POP)<br>
		
		<input type="checkbox" name="genre[]" value="Rock" 
		<?php if (isset($_POST['genre'])) {

			foreach ($_POST['genre'] as $key => $value) {
				if ($value=='Rock') {
					echo "checked";
				}
		}
			
		} ?>
		>Rock<br>
		
		<input type="checkbox" name="genre[]" value="Pop-Rock"
		<?php if (isset($_POST['genre'])) {

			foreach ($_POST['genre'] as $key => $value) {
				if ($value=='Pop-Rock') {
					echo "checked";
				}
		}
			
		} ?>
		>Pop-Rock<br>
		<input type="checkbox" name="genre[]" value="Dangdut"
		<?php if (isset($_POST['genre'])) {

			foreach ($_POST['genre'] as $key => $value) {
				if ($value=='Dangdut') {
					echo "checked";
				}
		}
			
		} ?>
		>Dangdut<br>
		
		<input type="checkbox" name="genre[]" value="Campur Sari"
		<?php if (isset($_POST['genre'])) {

			foreach ($_POST['genre'] as $key => $value) {
				if ($value=='Campur Sari') {
					echo "checked";
				}
		}
			
		} ?>
		>Campur Sari<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['genre'])) {
		echo "<div id='pilihan'>Anda memilih lagu berikut ini : </div><br/>";
		echo "<ul>";
		foreach ($_POST['genre'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>
