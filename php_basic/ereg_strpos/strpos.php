<?php

/* 
これだともちろんマッチしない
*/
$var1 = 'これはXXXXですね';
if(strpos($var1, 'minimum')) {
    print "match\n";
} else {
    print "unmatch\n";
}

/*
これはマッチすることを期待するがマッチしない
*/
$var2 = 'minimum';
if(strpos($var2, 'minimum')) {
    print "match\n";
} else {
    print "unmatch\n";
}

/*
マッチさせるために型もチェックするようにしないといけない
*/
$var3 = 'minimum';
if(strpos($var3, 'minimum') !== false) {
    print "match\n";
} else {
    print "unmatch\n";
}

?>