<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Menciptakan Tabel</title>
</head>
<body>
<?php
require_once '../aktivitas/koreksi.php';
$sql = 'CREATE TABLE mahasiswa (
nim VARCHAR(12) NOT NULL,
nama VARCHAR(40) NOT NULL,
alamat VARCHAR(100),
PRIMARY KEY (nim)
) ENGINE=MyISAM;';
$res = mysql_query($sql);
if ($res) {
echo 'Tabel Created';
mysql_close($res);
} else {
echo mysql_error();
}
?>

</body>
</html>
