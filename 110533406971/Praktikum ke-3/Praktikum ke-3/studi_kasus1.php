<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Studi Kasus 1</title>
</head>

<body>

<html>
<head>
	<title>Seleksi dengan menambahkan Preselecting</title>
</head>
<body>
	<h2>Propinsi di Indonesia</h2>
	<strong>Propinsi:</strong><br>
	<em>Silakan pilih salah satu Propinsi :</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="propinsi">
			<option value="Jawa Timur" 
			<?php if (isset($_POST['propinsi']) && $_POST['propinsi']=='Jawa Timur') {
				echo "selected";
			} ?>
			>Propinsi Jawa Timur</option>
			
			<option value="Jawa Barat" <?php if (isset($_POST['propinsi'])&&$_POST['propinsi']=='Jawa Barat') {
				echo "selected";
			} ?>>Propinsi Jawa Barat</option>
			
			<option value="Jawa Tengah" 
			<?php if (isset($_POST['propinsi'])&&$_POST['propinsi']=='Jawa Tengah') {
				echo "selected";
			} ?>
			>Propinsi Jawa Tengah</option>
			
			<option value="D.I Yogyakarta" 
			<?php if (isset($_POST['propinsi'])&&$_POST['propinsi']=='D.I Yogyakarta') {
				echo "selected";
			} ?>
			>Daerah Istimewa Yogyakarta</option>
			
			<option value="Pulau Bali" 
			<?php if (isset($_POST['propinsi'])&&$_POST['propinsi']=='Pulau Bali') {
				echo "selected";
			} ?>
			>Pulau Bali</option>
			
			<option value="DKI Jakarta" 
			<?php if (isset($_POST['propinsi'])&&$_POST['propinsi']=='DKI Jakarta') {
				echo "selected";
			} ?>
			>DKI Jakarta</option>
			
			<option value="Pulau Madura" 
			<?php if (isset($_POST['propinsi'])&&$_POST['propinsi']=='Pulau Madura') {
				echo "selected";
			} ?>
			>Pulau Madura</option>
			
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['propinsi'])) {
		switch ($_POST['propinsi']) {
			case 'Jawa Timur':
				echo "<div id='daerah'>Kota Anda Sekarang : Propinsi Jawa Timur</div>";
				break;

			case 'Jawa Barat':
				echo "<div id='daerah'>Kota Anda Sekarang : Propinsi Jawa Barat</div>";
				break;

			case 'Jawa Tengah':
				echo "<div id='daerah'>Kota Anda Sekarang : Propinsi Jawa Tengah</div>";
				break;

			case 'D.I Yogyakarta':
				echo "<div id='daerah'>Kota Anda Sekarang : Daerah Istimewa Yogyakarta</div>";
				break;

			case 'Pulau Bali':
				echo "<div id='daerah'>Kota Anda Sekarang : Pulau Bali</div>";
				break;
				
			case 'DKI Jakarta':
				echo "<div id='daerah'>Kota Anda Sekarang : DKI Jakarta</div>";
				break;	
				
			case 'Pulau Madura':
				echo "<div id='daerah'>Kota Anda Sekarang : Pulau Madura</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>

</body>
</html>