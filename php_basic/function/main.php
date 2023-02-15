<?php
function main(){
    global $argv;
    $argval = $argv[1];
    print($argval());
}

function example_1(){
    print('return: exmaple 1');
}

function example_2(){
    print('return: exmaple 2');
}

main();
?>
