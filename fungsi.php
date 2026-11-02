<?php
// fungsi tanpa parameter
function salam() {
    echo "Halo, selamat belajar PHP!<br>";
}

// fungsi dengan parameter (bahan yang dikirim ke fungsi)
function sapa($nama) {
    echo "Halo, " . $nama . "!<br>";
}

// fungsi yang mengembalikan nilai (return)
function luasPersegi($sisi) {
    return $sisi * $sisi;
}

// MEMANGGIL fungsi
salam();
sapa("Caleb");
sapa("Airan");

$hasil = luasPersegi(5);
echo "Luas persegi: " . $hasil . "<br>";
?>