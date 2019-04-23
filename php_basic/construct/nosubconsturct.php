<?php
class BaseClass {
    public function __construct() {
        print "In Base constructor\n";
    }
}

class SubClass extends BaseClass {
    public function __construct() {
        print "In SubClass constructor\n";
    }
}

$a = new Subclass();
?>