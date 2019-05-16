<?php
$vars = ['hoge'];

if(isset($vars)){
    foreach($vars as $var){
        print("set " . $var . "\n");
    }
} else {
    print('not set' . "\n");
}

$hoges = [ 'key' => 'value' ];
foreach($hoges as $fuga){
    print($fuga);
}

if(is_null($hoges)){
    print('not set' . "\n");
} else {
    foreach($hoges as $hoge){
        print("set " . $hoge . "\n");
    }
}

?>