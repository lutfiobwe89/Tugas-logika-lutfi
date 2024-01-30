<?php
function tampilkanTanggalIndonesia($date) {
    // Array nama hari dalam Bahasa Indonesia
    $namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    
    // Ubah format tanggal
    $tanggal = date_create_from_format('D, d M Y', $date);
    
    // Ambil nama hari dari array
    $hari = $namaHari[date_format($tanggal, 'w')];
    
    // Ubah format tanggal menjadi "Hari, dd M Y"
    $tanggalIndonesia = date_format($tanggal, 'd M Y');
    
    // Tampilkan hasil
    echo $hari . ', ' . $tanggalIndonesia;
}

// Contoh penggunaan
$date = date('D, d M Y');
echo $date . " vs ";
tampilkanTanggalIndonesia($date);

?>