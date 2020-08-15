<?php

echo date('d');
echo "</br>";
echo date('D');
echo "</br>";
echo date('m');
echo "</br>";
echo date('M');
echo "</br>";
echo date('l');
echo "</br>";
echo date('L');
echo "</br>";
echo date('a');
echo "</br>";
echo date('A');
echo "</br>";
echo date('h:i:s A');
echo "</br>";
$zone = date_default_timezone_get();
echo $zone;
echo "</br>";
date_default_timezone_set('Asia/Dhaka');
echo date('h:i:s A');
echo "</br>";


?>


