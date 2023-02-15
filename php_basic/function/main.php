<?php
function main(){
    global $argc;
    global $argv;
    print("start: run php test function\n");

    if ($argc != 2){
        print("info: please set argument\n");
        return;
    }

    $argval = $argv[1];
    print($argval());
}

function example_1(){
    print("result: exmaple 1\n");
}

function example_2(){
    print("result: exmaple 2\n");
}

main();
?>
