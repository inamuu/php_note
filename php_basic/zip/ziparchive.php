<?php

$file = './test.txt';
$zipfile = './test.zip';

$zip = new ZipArchive();
$res = $zip->open($zipfile, ZipArchive::CREATE);
if ($res === true){
    $zip->addFile($file);
    $zip->close();
}

?>