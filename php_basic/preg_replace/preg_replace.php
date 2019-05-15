<?php
$var = '201905';
print(preg_replace("/^\d{4}/", "$0-", $var));
?>