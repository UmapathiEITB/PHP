<?php
try{
$st = $c->prepare("insert into table_name(*,*,*) values (:*,:*,:*))");
$st->bindParam(':*','*');
$st->bindParam(':*','*');
$st->bindParam(':*','*');
$st->execute();
echo 'Data inserted successfully';
}catch(PDOException $e){
    echo $e->getMessage();
}