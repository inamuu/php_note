<?php

$file = './test.txt';
$zipfile = './test.zip';

// zipライブラリ
$zip = new ZipArchive();
$res = $zip->open($zipfile, ZipArchive::CREATE);
if ($res === true){
    $zip->addFile($file);
    $zip->close();
}

// zipコマンド
$zipDir = './hoge/';
$zipFile = 'hoge.zip';
$cmd = exec("zip -r " . "$zipFile" . " " . "$zipDir");

?>