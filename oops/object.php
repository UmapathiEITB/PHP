<?php
class Car {
    public $brand;
    public $color;
    public function drive() {
        echo $this->brand;
    }
}
$m = new Car();
$m->brand = "test";
$m->drive();