<?php
function cariKoin($jumlah) {
   
    $koinTersedia = [1000, 500, 200, 100, 50, 25, 10];

  
    $hasil = [];

 
    foreach ($koinTersedia as $koin) { // looping data yang uda ada
       
        $jumlahKoin = intdiv($jumlah, $koin); // untuk membagi bilangan bulat

      
        if ($jumlahKoin > 0) {
            $hasil[$koin] = $jumlahKoin;
          
            $jumlah -= $jumlahKoin * $koin;
        }
    }

  
    return $hasil;
}


$jumlah = 1750;
$hasil = cariKoin($jumlah);

echo "Jenis koin untuk uang Rp. $jumlah";
echo "<ul>";
foreach ($hasil as $koin => $jumlahKoin) {
    echo "<li>Rp. $koin x $jumlahKoin</li>";
}
echo "</ul>";
?>