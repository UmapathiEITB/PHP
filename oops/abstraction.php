<?php
abstract class Shape {
    abstract public function area();
}
class Circle extends Shape {
    public function area() {
        return 3.14 * 5 * 5;
    }
}
