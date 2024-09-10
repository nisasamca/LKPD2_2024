<?php

$pembelian = 130000;
$hari = date("l");
$totalBelanja = 0 ;


if ($pembelian > 100000) {
    $totalBelanja = ($pembelian - ($pembelian * 7 / 100));
    if ($hari == "Tuesday") {
        $totalBelanja = ($pembelian - ($pembelian * 5 / 100));
    } else {
        $totalBelanja = $pembelian; 
    }
}

echo " Hari ini hari : " . $hari . "<br>";
echo "Total Pembelanjaan : " . $pembelian . "<br>"; 
echo "Total yang harus dibayar : " . $totalBelanja . "<br>";

?>