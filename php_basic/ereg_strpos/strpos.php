<?php
$var = 'minimum';
if(strpos($var, 'minimum')) {
    print "match\n";
} else {
    print "unmatch\n";
}

$var2 = 'text minimum';
if(strpos($var2, 'minimum')) {
    print "match\n";
} else {
    print "unmatch\n";
}
?>