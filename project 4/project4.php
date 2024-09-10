<?php
for ($j = 0; $j < 2; $j++) {  // looping untuk menggambar dua persegi
    for ($i = 0; $i < 4; $i++) { // looping untuk gambar 4 baris
        echo str_repeat('*', 8) . '<br>'; // looping simbol bintangnya
    }
    echo '<br>'; // yang ini ngasih jarak di kedua box itu
}
?>  