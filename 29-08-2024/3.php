<?php
$number = 90;
$range = range(1, 30);

echo "<br>";
foreach ($range as $num) {
    if ($number % $num == 0) { //moduls num yaitu menghitung 1 - 30 dan hasilnya akan muncul
        $result = $number / $num;
        echo "$number:$num=$result<br>";
    }
}
?>