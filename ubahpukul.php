<?php
// Ubah pukul 19.00 menjadi pukul 07.00 pm
$waktu1 = "19:00";
$waktu1_formatted = (date("H:i a", strtotime($waktu1)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($waktu1));

// Ubah pukul 23.45 menjadi pukul 11.45 pm
$waktu2 = "23:45";
$waktu2_formatted = (date("H:i a", strtotime($waktu2)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($waktu2));

// Ubah pukul 08.55 menjadi pukul 08.55 am
$waktu3 = "08:55";
$waktu3_formatted = (date("H:i a", strtotime($waktu3)) == "00:00 am") ? "12:00 am" : date("h:i a", strtotime($waktu3));

// Tampilkan hasil
echo "Waktu 1: " . $waktu1_formatted . "<br>";
echo "Waktu 2: " . $waktu2_formatted . "<br>";
echo "Waktu 3: " . $waktu3_formatted . "<br>";
?>