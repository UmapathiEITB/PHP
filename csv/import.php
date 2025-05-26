<?php
$data = [["Name", "Age"],["User1","1"],["User2","2"]];
$f = "filename.csv";
if(($h = fopen($f, "w")) !== FALSE){
    foreach($data as $r){
        fputcsv($h, $r);
    }
    fclose($h);
}else{
    echo "Faile to import";
}