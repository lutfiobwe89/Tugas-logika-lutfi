<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

$totalBayar = 0;

foreach ($barang as $item) {
    $namaBarang = $item['nama_barang'];
    $hargaBarang = $item['harga_barang'];
    $jumlahBeli = $item['jumlah_beli'];

    $totalBarang = $hargaBarang * $jumlahBeli;
    $totalBayar += $totalBarang;

    echo "Andi membeli $jumlahBeli $namaBarang seharga Rp $totalBarang<br>";
}

echo "Total yang harus dibayar oleh Andi adalah Rp $totalBayar";
