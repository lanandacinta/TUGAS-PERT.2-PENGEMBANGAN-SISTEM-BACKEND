<!-- Latihan 2 - Menampilkan Bilangan Genap dan Ganjil -->

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " = Genap<br>";
    } else {
        echo $i . " = Ganjil<br>";
    }
}
?>
