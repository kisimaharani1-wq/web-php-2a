<?php
$nilai = [
    "Andi" => 85,
    "Budi" => 70,
    "Citra" => 92,
    "Dina" => 60
];

echo "<h2>Daftar Nilai</h2>";

$total = 0;

foreach ($nilai as $nama => $n) {
    if ($n >= 75) {
        $ket = "Lulus";
    } else {
        $ket = "Remedial";
    }

    echo $nama . " : " . $n . " (" . $ket . ")<br>";
    $total = $total + $n;
}

$rata = $total / count($nilai);
echo "<br>Rata-rata: " . $rata;
?>