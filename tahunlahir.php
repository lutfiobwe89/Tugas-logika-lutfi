<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach ($data as $key => $person) {
    $nama = $person['nama'];
    $tahun = $person['tahun'];
    $keterangan = ($tahun % 4 == 0 && ($tahun % 100 != 0 || $tahun % 400 == 0)) ? 'tahun kabisat' : 'bukan tahun kabisat';

    echo "$key. $nama : lahir pada tahun $tahun ($keterangan)<br>";
}
