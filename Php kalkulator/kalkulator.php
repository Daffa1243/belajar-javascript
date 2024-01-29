<?php

// Mengambil data dari form
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

// Melakukan operasi aritmatika
switch ($operator) {
    case "+":
        $hasil = $angka1 + $angka2;
        break;
    case "-":
        $hasil = $angka1 - $angka2;
        break;
    case "*":
        $hasil = $angka1 * $angka2;
        break;
    case "/":
        $hasil = $angka1 / $angka2;
        break;
    case "√":
        $hasil = sqrt($angka1);
        break;
    case "^":
        $hasil = pow($angka1,$angka2);
        break;
    case "%":
        $hasil = ($angka1 * $angka2) /100 ;
        break;
    case "convert":
        $exchangeRate = 15510.70;
        $hasil = $angka1 * $exchangeRate;
        echo "<p>Hasil konversi: $angka1 USD = $hasil IDR</p>";
        break;
      
}

// Menampilkan hasil
echo "Hasil: $hasil";

?>