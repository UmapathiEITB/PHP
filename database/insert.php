<?php
try{
    $sql = "Insert into tablename(*,*) values(*,*)";
    $c->exec($sql);
    //to get last insert data
    $l_id = $c->lastInsertId();
    echo "Data created successfully";
}catch(PDOException $e){
    echo $e->getMessage();
}