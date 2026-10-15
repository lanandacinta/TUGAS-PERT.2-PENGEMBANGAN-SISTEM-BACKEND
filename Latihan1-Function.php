<!-- Latihan 1 Function - Menghitung Luas Lingkaran -->

<?php
function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

$jari = 7;
$hasil = hitungLuasLingkaran($jari);

echo "Luas lingkaran dengan jari-jari "
    . $jari . " adalah " . number_format($hasil, 2, '.', '');
?>
