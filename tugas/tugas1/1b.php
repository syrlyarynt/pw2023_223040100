<?php 
     $nrp = 00;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1b</title>
</head>
<body>
    <?php 
        echo "Aku adalah angka <b> " . $nrp . "</b> <br>";
        echo "Jika aku dikali 5, maka aku sekarang menjadi <b> " . ($nrp *= 5)  . "</b> <br>";
        echo "Jika aku dibagi 2, maka aku sekarang menjadi <b> " . ($nrp /= 2)  . "</b> <br>";
        echo "Jika aku ditambah 75, maka aku sekarang menjadi <b> " . ($nrp += 75)  . "</b> <br>";
        echo "Jika aku dikurang 20, maka aku sekarang menjadi <b> " . ($nrp -= 20)  . "</b> <br>";
    ?>
</body>
</html>