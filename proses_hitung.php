<?php
// fungsi untuk menghitung
function hitung($a, $b, $operasi) {
    if ($operasi == "tambah") {
        return $a + $b;
    } elseif ($operasi == "kurang") {
        return $a - $b;
    } elseif ($operasi == "kali") {
        return $a * $b;
    } elseif ($operasi == "bagi") {
        if ($b == 0) {
            return "Tidak bisa dibagi nol";
        }
        return $a / $b;
    }
}

// ambil data dari form kalkulator
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operasi = $_POST['operasi'];

// panggil fungsi
$hasil = hitung($angka1, $angka2, $operasi);

// tampilkan
echo "Angka 1: " . $angka1 . "<br>";
echo "Angka 2: " . $angka2 . "<br>";
echo "Operasi: " . $operasi . "<br>";
echo "Hasil: " . $hasil . "<br><br>";
echo "<a href='kalkulator.php'>Hitung lagi</a>";
?>