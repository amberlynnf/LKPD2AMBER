<?php
// Daftar jawaban yang benar
$JawabanBenar = ['A', 'B', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];
// Fungsi untuk memeriksa jawaban siswa
function cekJawabanSiswa($namaSiswa, $jawabanSiswa, $jawabanBenar) {
    // Variabel untuk menyimpan jumlah jawaban yang benar dan salah
    $jumlahBenar = 0;
    $jumlahSalah = 0;

   // Loop melalui semua jawaban
    for ($i = 0; $i < count($jawabanBenar); $i++) {
          // Memeriksa apakah jawaban siswa sesuai dengan jawaban yang benar
        if (isset($jawabanSiswa[$i]) && $jawabanSiswa[$i] === $jawabanBenar[$i]) { // ada/tidak (untuk memastikan)
              // Jika jawaban benar, tambahkan ke jumlah benar
            $jumlahBenar++;
        } else {
             // Jika jawaban salah, tambahkan ke jumlah salah
            $jumlahSalah++;
        }
    }


    // Menampilkan hasil
    echo "Nama: $namaSiswa<br>";  // Menampilkan nama siswa 
    echo "Jumlah Jawaban Benar: $jumlahBenar<br>"; // Menampilkan jumlah jawaban benar
    echo "Jumlah Jawaban Salah: $jumlahSalah<br>"; // Menampilkan jumlah jawaban salah
}

// Daftar jawaban yang diberikan oleh siswa Amber
$jawabanSiswaAmber = ['B', 'B', 'C', 'D', 'B', 'A', 'E', 'C', 'A', 'D'];
// Memanggil fungsi untuk memeriksa jawaban siswa Amber dengan jawaban benar
cekJawabanSiswa('Amber', $jawabanSiswaAmber, $JawabanBenar);

?>
