<?php
$data = [["Name", "Age"],["User1","1"],["User2","2"]];
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename="download.csv"');
$o = fopen('php://output', 'w');
foreach ($data as $r) {
    fputcsv($o, $r);
}
fclose($o);
exit;
?>
