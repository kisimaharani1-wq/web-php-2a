<?php
// ARRAY BIASA: laci diberi nomor, mulai dari 0
$buah = ["Apel", "Jeruk", "Mangga"];

echo "<h3>Array biasa</h3>";
echo $buah[0] . "<br>";   // Apel
echo $buah[2] . "<br>";   // Mangga

// tambah isi baru ke laci paling belakang
$buah[] = "Pisang";

// hitung jumlah isinya
echo "Jumlah buah: " . count($buah) . "<br>";

// FOREACH: perulangan khusus array, ambil isi laci satu per satu
echo "<h3>Semua buah</h3>";
foreach ($buah as $b) {
    echo "- " . $b . "<br>";
}

// ARRAY ASOSIATIF: laci diberi nama, bukan nomor
$mahasiswa = [
    "nama" => "Kisi",
    "jurusan" => "Sistem Informasi",
    "semester" => 3
];

echo "<h3>Array asosiatif</h3>";
echo "Nama: " . $mahasiswa["nama"] . "<br>";
echo "Jurusan: " . $mahasiswa["jurusan"] . "<br>";
?>