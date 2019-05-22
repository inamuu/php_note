<?php

$birthday = '';

function YmdA($birthday) {
  $year = date('Ymd');
  $age = floor(($year - str_replace('-', '', $birthday)) / 10000);
  print($age . "\n");
  $placeOfTen = floor($age / 10);
  print($placeOfTen . "\n");
}

function YmdB($birthday) {
  $ymd = date('Ymd');
  $birthYmd = date('Ymd', strtotime($birthday));
  $age2 = floor(($ymd - $birthYmd) / 10000);
  print($age2 . "\n");

  $placeOfTen2 = floor($age2 / 10);
  print($placeOfTen2 . "\n");
}

YmdA('1987-05-22 14:25:00');
YmdB('1987-05-22 14:25:00');
?>
