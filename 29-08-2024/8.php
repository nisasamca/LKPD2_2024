<?php
function buatArrayJurusan($data) {

    $jurusanArray = explode(',', $data);

  
    $jurusanArray = array_map('trim', $jurusanArray); // cek jika ada whitespcae
    $jurusanArray = array_map('strtoupper', $jurusanArray); // mengubah teks menjadi kapital
// menerapkan fungsi elemen

    $jurusanUnik = array_unique($jurusanArray); // tidak ada duplikat

    return array_values($jurusanUnik); // inisialisasi nilai pada jurusanunik
}

$data = "PPLG, HTL, KLN, PMN, pplg, htl";

$hasilArray = buatArrayJurusan($data);

print_r($hasilArray);
?>