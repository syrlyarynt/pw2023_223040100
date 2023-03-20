<?php 
$mahasiswa = [
    [   // mahasiswa 1
        'nama' => 'Syerli Aryanti Nurafifa',
        'nrp' => '223040100',
        'email' => 'Syerli.223040100@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'eii.jpg'
    ],
    [   // mahasiswa 2
        'nama' => 'Dena Astia',
        'nrp' => '223040116',
        'email' => 'Dena.223040116@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'nana.jpg'
    ],
    [   // mahasiswa 3
        'nama' => 'Syahbrina Dinova',
        'nrp' => '223040074',
        'email' => 'Syahbrina.223040074@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'bina.jpg'
    ],
    [   // mahasiswa 4
        'nama' => 'Ichka Sabila',
        'nrp' => '223040144',
        'email' => 'Ichka.223040144@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'nci.jpg'
    ],
    [   // mahasiswa 5
        'nama' => 'Melinda Sulaeman',
        'nrp' => '223040091',
        'email' => 'Melinda.223040091@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'mel.jpg'
    ],
    [   // mahasiswa 6
        'nama' => 'Fadhilla Nur Islami',
        'nrp' => '223040082',
        'email' => 'Fadhilla.223040082@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'dilla.jpg'
    ],
    [   // mahasiswa 7
        'nama' => 'Nita Febriany',
        'nrp' => '223040096',
        'email' => 'Nita.223040096@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'nita.jpg'
    ],
    [   // mahasiswa 8
        'nama' => 'Maria Oa Paulina Memen Loly',
        'nrp' => '223040099',
        'email' => 'Maria.223040099@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'lyn.jpg'
    ],
    [   // mahasiswa 9
        'nama' => 'Andiana Eka Riyanto',
        'nrp' => '223040115',
        'email' => 'Andiana.223040115@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'eka.jpg'
    ],
    [   // mahasiswa 10
        'nama' => 'Feby Alia Rahman',
        'nrp' => '223040059',
        'email' => 'Feby.223040059@mail.unpas.ac.id',
        'jurusan' => 'Teknik Informatika',
        'img' => 'feb.jpg'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
     <ul>
        <li> <img src="img/<?=$m['img']; ?>" alt="picture" width=150></li>
        <li>Nama : <?= $m ['nama'] ?> </li>
        <li>NRP : <?= $m ['nrp'] ?> </li>
        <li>Jurusan : <?= $m ['jurusan'] ?> </li>
        <li>E-mail : <?= $m ['email'] ?> </li>
        <br>
     </ul>
    <?php endforeach ?>
</body>
</html>