<?php
// Contoh nilai ujian (ganti nilai ini sesuai dengan kebutuhan)
$nilaiUjian = 85;

// Tentukan predikat berdasarkan nilai ujian menggunakan operator ternary
$predikat = ($nilaiUjian > 90) ? "A" : (($nilaiUjian > 75) ? "B" : "C");

// Tampilkan hasil
echo "Nilai ujian: " . $nilaiUjian . "<br>";    
echo "Predikat: " . $predikat;
?>