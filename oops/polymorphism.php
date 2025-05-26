<?php
class Animal {
    public function speak() {
        echo "Animal sound";
    }
}
class Dog extends Animal {
    public function speak() {
        echo "Bark!";
    }
}
$dog = new Dog();
$dog->speak();
