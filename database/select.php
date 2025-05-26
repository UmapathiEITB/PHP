<?php
try{
    $sql = "select * from table_name";
    $st = $c->prepare($sql);
    $st->execute();
    $r = $st->setFetchMode(PDO::FETCH_ASSOC);
    var_dump($r); 
}catch(PDOException $e){
    echo $e->getMessage();
}