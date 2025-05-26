<?php
$s = "***"; //hostname
$u = "***"; //databse username
$p = "***"; //database password
$d = "***"; //database name
try {
    $c = new PDO("mysql:host=$s;$d",$u,$p);
    $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database configured";
} catch (PDOException $e) {
    echo "Connection failed".$e->getMessage();
}