<?php
$angka = $_POST['angka'];

echo "<h2>Tabel perkalian " . $angka . "</h2>";

for ($i = 1; $i <= 10; $i++) {
    $hasil = $angka * $i;
    echo $angka . " x " . $i . " = " . $hasil . "<br>";
}

echo "<br><a href='tabel.php'>Kembali</a>";
?>