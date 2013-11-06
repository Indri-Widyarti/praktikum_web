<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Greeting</title>
</head>

<body>

<?php

function greeting()
{
$date = date ("8");
if ($date>=0 and $date<11) {
echo "Selamat Pagi";
} else if ($date>=11 and $date<15) {
echo "Selamat Siang";
} else if ($date>=15 and $date<19) {
echo "Selamat Sore";
} else if ($date>=19 and $date<=24) {
echo "Selamat Malam";
}else { echo " ";
}
}
echo greeting();

?>

</body>
</html>
