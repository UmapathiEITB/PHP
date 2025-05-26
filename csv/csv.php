<?php
$filename = ""; //replace your filename
if(($handle == fopen($filename, "r")) !== FALSE){
    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
        print_r($data);
    }
    fclose($handle);
}else{
    echo "Cannot open file";
}
