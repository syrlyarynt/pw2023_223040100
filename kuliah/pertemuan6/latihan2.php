<?php 
//array associative
//array yang indexnya adalah string
$mahasiswa = [
[
    'nama' => 'Ranisa', 
    'makanan' => ['🍕', '🍟'], 
    'binatang' => '🐱'
], 
[
    'nama' => 'Ipeh', 
    'makanan' => ['🍨', '🧇', '🥨'], 
    'binatang' => '🐯'
], 
[
    'nama' => 'Lala', 
    'makanan' => ['🍟'],  
    'binatang' => '🐺'
], 
[
    'nama' => 'Tegar', 
    'makanan' => ['🍱', '🥓'],  
    'binatang' => '🐨'
], 
[
    'nama' => 'Satria', 
    'makanan' => ['🍳', '🥩', '🥗'], 
    'binatang' => '🐲'
]
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
        <li>Nama: <?= $m ['nama']; ?></li>
        <li>Makanan Favorit:
            <?php foreach($m['makanan'] as $makanan ) {
                echo $makanan;
            }
            
            ?>
        </li>
        <li>Hewan peliharaan: <?= $m ['binatang']; ?></li>
    </ul>
    <?php } ?>
</body>
</html>