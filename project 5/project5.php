<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$menyatukanbill = array_merge($bil1, $bil2);
$bill = array_unique($menyatukanbill);

arsort($bill);
echo "Hasil : ";
echo implode (", " , $bill);
?>
