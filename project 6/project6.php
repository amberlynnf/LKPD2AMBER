<?php 
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

$total_harga = 0; 
foreach ($barang as $item) { // karena bentuknya array asosiatif
    $totalbelanjaan = $item['harga_barang'] * $item['jumlah_beli']; 
    $total_harga += $totalbelanjaan;

  
    echo $item['nama_barang'] . " (" . $item['jumlah_beli'] . "): " . number_format($totalbelanjaan, 0, ',', '.') . "<br>";
}

echo "Total harga pembelian: Rp" . number_format($total_harga, 0, ',', '.') . "<br>";
?>
