<?php
 $usia = 4;
 
    if ($usia >= 6 && $usia <= 12) {
        echo "Waktu tidur yang baik: 10 jam";
    } elseif ($usia > 12 && $usia <= 18) {
        echo "Waktu tidur yang baik: 8-9 jam";
    } elseif ($usia > 18 && $usia <= 40) {
        echo "Waktu tidur yang baik: 7-8 jam";
    } else {
        echo "Usia tidak valid untuk perhitungan waktu tidur.";
    }

?>