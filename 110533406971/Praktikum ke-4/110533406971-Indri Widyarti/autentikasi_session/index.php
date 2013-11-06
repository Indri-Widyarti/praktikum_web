<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Autentikasi Halaman Session</title>
<style type="text/css">
.inner{
	margin:140px auto; padding:20px; width:300px; border:5px solid #9933FF;}
</style>

</head>
<body bgcolor="#CC99FF">

<p>
<?php

ini_set('display_errors', 1);
define('_VALID', 1);

//include file eksternal yang telah dibuat
require_once('./auth.php');
init_login();
validate();
?>

</p>
	<h2 style="font-family:"Courier New", Courier, monospace" align="center" style="border-bottom-style:groove">Welocome To My Blog</h2>
	<h4 style=" font-stretch:wider" align="center"> Enjoy With My Blog</h4>
	
	<p align="center">
	<a href="?m=logout"></a>
	<p align="center">
	Silahkan Pilih Menu pada Content yang Tersedia
	<p style="font-size:18px" align="center" style="font-style:inherit" style="border-color:#990099" style="font-stretch:ultra-condensed"> Menu-menu	: 
				<br />1. Home
				<br />	2. Profile
				<br />	3. Contact Us
	<p align="center">
	<a href="?m=logout"><h3> Keluar</h3></a>
</p>
</body>
 
</html>