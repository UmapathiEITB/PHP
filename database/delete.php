<?php
try{
    $sql = "delete from tablename where column_name = *";
    $c->exec($sql);
    echo "Data deleted successfully";
}catch(PDOException $e){
    echo $e->getMessage();
}