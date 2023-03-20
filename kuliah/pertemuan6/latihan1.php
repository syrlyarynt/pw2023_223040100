<?php 
//array multidimensi
//array di dalam array
$mahasiswa = [
['Ranisa', '🐱', '🍕'], 
['Ipeh', '🐯', '🍨'], 
['Lala', '🐺', '🍟'], 
['Tegar', '🐨', '🍱'], 
['Satria', '🐲', '🍳']
];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <?php foreach($mahasiswa as $m ) { ?>

    <ul>
        <li>Nama: <?= $m [0]; ?></li>
        <li>Makanan Favorit: <?= $m [2]; ?></li>
        <li>Hewan peliharaan: <?= $m [1]; ?></li>
    </ul>
    <?php } ?>
</body>
</html>