<?php
for ($v = 0; $v < 2; $v++) { // Loop untuk menggambar dua persegi
    for ($h = 0; $h < 4; $h++) { 
        echo str_repeat('*', 8) . '<br>'; // ngulang simbol
    }
    echo '<br>'; // ngasih jarak 
}
?>
