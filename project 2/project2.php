<?php

$pembelian = 130000;
// mengambil nama hari dalam format lengkap (misalnya: "Monday", "Tuesday", dll.)
$hari = date("l");
$totalBelanja = 0 ;  // inisialisasi variabel untuk total belanja setelah diskon

// pengecekan nilai lebih besar dari 100.000
if ($pembelian > 100000) { 
    $totalBelanja = ($pembelian - ($pembelian * 7 / 100));
 } else if ($hari == "Tuesday") {
    
        $totalBelanja = ($pembelian - ($pembelian * 5 / 100));
    } else {
         // jika bukan hari Selasa, tidak ada diskon
        $totalBelanja = $pembelian; 
    }
echo " Hari ini hari : " . $hari . "<br>";
echo "Total Pembelanjaan : " . $pembelian . "<br>"; 
echo "Total yang harus dibayar : " . $totalBelanja . "<br>";

?>