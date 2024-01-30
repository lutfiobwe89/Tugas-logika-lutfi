<?php
// Ambil tanggal hari ini secara otomatis
$tanggalHariIni = date('N'); // Mendapatkan nomor hari (1-7), di mana 1 adalah Senin

// Tentukan apakah hari ini upacara atau tidak menggunakan operator ternary
$hasil = ($tanggalHariIni == 1) ? "Hari ini upacara." : "Hari ini tidak upacara.";

// Tampilkan hasil
echo $hasil;
?>