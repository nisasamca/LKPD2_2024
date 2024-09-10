<?php
function cariKoin($jumlah) {
    // Daftar nilai koin yang tersedia
    $koinTersedia = [1000, 500, 200, 100, 50, 25, 10];

    // Array untuk menyimpan hasil
    $hasil = [];

    // Loop melalui setiap koin yang tersedia
    foreach ($koinTersedia as $koin) {
        // Hitung berapa banyak koin ini yang bisa digunakan
        $jumlahKoin = intdiv($jumlah, $koin); //membagi bilangan bulat

        // Jika koin ini bisa digunakan, tambahkan ke hasil
        if ($jumlahKoin > 0) {
            $hasil[$koin] = $jumlahKoin;
            // Kurangi jumlah uang dengan nilai total dari koin ini
            $jumlah -= $jumlahKoin * $koin;
        }
    }

    // Mengembalikan hasil
    return $hasil;
}

// Contoh penggunaan
$jumlah = 1750;
$hasil = cariKoin($jumlah);

echo "Jenis koin untuk uang Rp. $jumlah:\n";
echo "<ul>";
foreach ($hasil as $koin => $jumlahKoin) {
    echo "<li>Rp. $koin x $jumlahKoin</li>";
}
echo "</ul>";
?>
