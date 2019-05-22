<?php
$var = '201904';
echo $var . "\n";
echo date('Y-m', strtotime($var)) . "\n";

$var = '20190501';
echo $var . "\n";
echo date('Y-m', strtotime($var)) . "\n";

echo date('Y-m-d' . "\n");
echo date('Y-m-d H:i:s' . "\n");
?>