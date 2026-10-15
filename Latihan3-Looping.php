<!-- Latihan 3 - Array Nama Mahasiswa -->

<?php
$mahasiswa = ["Andi", "Budi", "Citra", "Dika", "Eka"];

$nomor = 1;

foreach ($mahasiswa as $nama) {
    echo $nomor . ". " . $nama . "<br>";
    $nomor++;
}
?>
