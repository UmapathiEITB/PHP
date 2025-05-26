<?php
class C{
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function __destruct() {
        echo "C object destroyed";
    }
}
$m = new C("Honda");
