<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompokSama = [];
$kelompokBerbeda = [];

foreach ($bil1 as $bil) {
    if (in_array($bil, $bil2)) {
        $kelompokSama[] = $bil;
    } else {
        $kelompokBerbeda[] = $bil;
    }
}

foreach ($bil2 as $bil) {
    if (!in_array($bil, $bil1)) {
        $kelompokBerbeda[] = $bil;
    }
}

echo "Kelompok Pertama (Bilangan yang Sama): " . implode(', ', $kelompokSama) . "<br>";
echo "Kelompok Kedua (Bilangan yang Berbeda): " . implode(', ', $kelompokBerbeda);

?>
