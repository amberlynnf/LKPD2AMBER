<?php
function truncateText($text, $limit = 50) {
    if (strlen($text) > $limit) { // menghitung jumlah karakter
        return substr($text, 0, $limit) . '...'; // memotong 
    } else {
        return $text;
    }
}

$kalimat = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi numquam explicabo eius, dolores repudiandae aut! Ullam voluptatibus incidunt doloremque adipisci nemo architecto animi, distinctio, culpa magnam tempore est consequatur aut.";
echo truncateText($kalimat);