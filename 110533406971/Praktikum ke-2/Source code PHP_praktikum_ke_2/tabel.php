<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Generate Tabel</title>
</head>

<body>

<?php

function Tabel($row, $column)
{
echo "<h2>Tabel $row row dan $column column</h2>";
echo "<table width = \"40%\" border=\"1\">\n";

for($b = 0; $b < $row; $b++) {
echo "<tr>\n";

for($k = 0; $k < $column; $k++) {
echo "<td height=\"20\" width=\"7%\"></td>\n";
}
echo "</tr>\n";
}
echo "</table>\n";
}
echo Tabel(3,4); //memanggil fungsi Tabel

?>
</body>
</html>
