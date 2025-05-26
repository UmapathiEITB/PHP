<?php
try{
    $sql = "update tablename set column_name = '*' where your_condition = '*'";
    $st = $c->prepare($sql);
    $st->execute();
    echo $st->rowCount()."Data updated successfully";
}catch(PDOException $e){
    echo $e->getMessage();
}