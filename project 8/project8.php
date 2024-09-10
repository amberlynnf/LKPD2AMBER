<?php
function buatArrayJurusan($data) {

    $jurusanArray = explode(',', $data);

  
    $jurusanArray = array_map('trim', $jurusanArray); //menghapus whitespace di sekitar elemen
    $jurusanArray = array_map('strtoupper', $jurusanArray); //mengubah menjadi huruf kapital
    // menerapkan fungsi tertentu pada setiap elemen

    $jurusanUnik = array_unique($jurusanArray);

    return array_values($jurusanUnik); // mengambil hanya nilai nilainya
    // mendapatkan semua nilai dari sebuah array dan mengembalikannya dalam array baru dengan indeks numerik yang dimulai dari 0.
}

$data = "PPLG, HTL, KLN, PMN, pplg, htl";

$hasilArray = buatArrayJurusan($data);

print_r($hasilArray); // karena datanya bentuk array (array indeks)
?>
