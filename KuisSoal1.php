<!-- Kuis Soal 1 - Menampilkan Angka yang Habis Dibagi 3 -->

<?php
$angka = range(1, 50);

foreach ($angka as $bilangan) {
    if ($bilangan % 3 == 0) {
        echo $bilangan . "<br>";
    }
}
?>
