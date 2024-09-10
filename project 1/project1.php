<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="isi">
         <!-- form untuk input data -->
        <form method="post">
            <label for="kata">Masukkan kalimat:</label>
            <!-- input teks untuk memasukkan kalimat -->
            <input type="text" id="simbol" name="simbol" required>
             <!-- tombol untuk mengirimkan form -->
            <input type="submit" value="Cek Simbol">
        </form>
        <br>
        <?php
         // mengecek if form telah disubmit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $simbol = $_POST['simbol'];

                // fungsi untuk memeriksa simbol dalam kalimat
                function cekSimbolnya($simbol) {
              // mencocokkan semua karakter non-alfanumerik dan bukan spasi
                    preg_match_all('/[^a-zA-Z0-9\s]/', $simbol, $matches);
                    
                      // memeriksa apakah ada simbol yang ditemukan
                    if (!empty($matches[0])) {
                          // menggabungkan semua simbol yang ditemukan menjadi string
                        $gabung = implode(', ', $matches[0]);
                        return "Simbol yang terdapat pada kalimat: $gabung";
                    } else {
                        
                        return "Tidak terdapat simbol pada kalimat.";
                    }
                }
                   // menjalankan fungsi dan menyimpan hasilnya
                $hasil = cekSimbolnya($simbol);
                 // menampilkan kalimat yang dimasukkan dan hasil pengecekan
                echo $simbol
                    . "<br>"
                    . $hasil; 
            }
        ?>
    </div>
</body>
</html>
