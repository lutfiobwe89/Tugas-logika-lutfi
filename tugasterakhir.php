<?php
function pembandingNama($nama1, $nama2) {
    $panjangNama1 = strlen($nama1);
    $panjangNama2 = strlen($nama2);

    echo "Jumlah karakter nama1 ($nama1): $panjangNama1\n";
    echo "Jumlah karakter nama2 ($nama2): $panjangNama2\n";

    if ($panjangNama1 > $panjangNama2) {
        $selisih = $panjangNama1 - $panjangNama2;
        echo "$nama1 memiliki jumlah karakter lebih banyak daripada $nama2 sebanyak $selisih karakter.\n";
    } elseif ($panjangNama1 < $panjangNama2) {
        $selisih = $panjangNama2 - $panjangNama1;
        echo "$nama2 memiliki jumlah karakter lebih banyak daripada $nama1 sebanyak $selisih karakter.\n";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.\n";
    }
}

// Contoh penggunaan
pembandingNama("bagas", "Artasya Legina");
?>