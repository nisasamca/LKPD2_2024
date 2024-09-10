<?php
// Array berisi jawaban yang benar
$JawabanBenar = ['A', 'B', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];

// Fungsi untuk mengecek jawaban siswa
function cekJawabanSiswa($namaSiswa, $jawabanSiswa, $jawabanBenar) {
    $jumlahBenar = 0;
    $jumlahSalah = 0;

    // Perulangan untuk membandingkan jawaban siswa dengan jawaban yang benar
    for ($i = 0; $i < count($jawabanBenar); $i++) {
        if (isset($jawabanSiswa[$i]) && $jawabanSiswa[$i] === $jawabanBenar[$i]) {
            $jumlahBenar++;
        } else {
            $jumlahSalah++;
        }
    }

    // Output hasil cek jawaban
    echo "Nama: $namaSiswa<br>";
    echo "Jumlah Jawaban Benar: $jumlahBenar<br>";
    echo "Jumlah Jawaban Salah: $jumlahSalah<br>";
}

// Contoh penggunaan fungsi dengan jawaban dari siswa
$jawabanSiswaNiset = ['B', 'B', 'C', 'D', 'B', 'A', 'E', 'C', 'A', 'D'];
cekJawabanSiswa('nizet', $jawabanSiswaNiset, $JawabanBenar);

?>