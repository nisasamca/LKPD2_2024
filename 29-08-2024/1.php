<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
</head>
<body>
    <div class="isi">
        <form method="post">
            <label for="kata">Masukkan kalimat:</label>
            <input type="text" id="simbol" name="simbol" required>
            <input type="submit" value="Cek Simbol">
        </form>
        <br>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $simbol = $_POST['simbol'];
                function cekSimbolnya($simbol) {
            
                    preg_match_all('/[^a-zA-Z0-9\s]/', $simbol, $matches);                   
                    if (!empty($matches[0])) {
                       
                        $gabung = implode(', ', $matches[0]);
                        return "Simbol yang terdapat pada kalimat: $gabung";
                    } else {
                        return "Tidak terdapat simbol pada kalimat.";
                    }
                }
                
                $hasil = cekSimbolnya($simbol);
                echo $simbol
                    . "<br>"
                    . $hasil; 
            }
        ?>
    </div>
</body>
</html>