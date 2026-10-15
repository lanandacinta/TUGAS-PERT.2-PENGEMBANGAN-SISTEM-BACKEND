<!-- Kuis Soal 2 Function - Menghitung Nilai Akhir -->

<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30)
                + ($uts * 0.30)
                + ($uas * 0.40);

    return $nilaiAkhir;
}

$tugas = 80;
$uts = 85;
$uas = 85;

$nilai = hitungNilaiAkhir($tugas, $uts, $uas);

if ($nilai >= 70) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "Nilai Akhir: " . $nilai;
echo "<br>Status: " . $status;

//*Maaf pak, outputnya gabisa pas 83, tapi 83,5 :D 