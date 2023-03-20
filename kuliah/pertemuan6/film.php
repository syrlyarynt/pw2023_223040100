<?php 
    $daftarFilm = [
        [ // no.1
            'poster' => 'avatar.jpeg',
            'Judul' => 'Avatar The Way of Water',
            'Tahun' => '2022',
            'Genre' => ['Sci-Fi, ', 'Adventure, '],
            'Pemeran Utama' => [
                'Sam Worthington, ', 
                'Zoe Saldana, ', 
                'Sigourney Weaver'],
            'Sutradara' => 'James Cameron'
        ],
        [ // no.2
            'poster' => 'captain marvel.jpeg',
            'Judul' => 'Captain Marvel',
            'Tahun' => '2019',
            'Genre' => ['Action, ', 'Adventure, ', 'Sci-Fi'],
            'Pemeran Utama' => [	
                'Brie Larson, ',
                'Samuel L.Jackson, ',
                'Ben Meldelsohn, ',
                'Jude Law, ',
                'Annette Bening'],
            'Sutradara' => 'Anna Boden'
        ],      
        [ // no.3
            'poster' => 'frozen.jpg',
            'Judul' => 'Frozen II',
            'Tahun' => '2019',
            'Genre' => ['Animation, ', 'Adventure, ', 'Comedy'],
            'Pemeran Utama' => [
                'Kristen Bell, ', 
                'Idina Menzel, ', 
                'Josh Gad, ',
                'Jonathan Groff'],
            'Sutradara' => 'Jennifer Lee'
        ],
        [ // no.4
            'poster' => 'ivanna.jpg',
            'Judul' => 'Ivanna',
            'Tahun' => '2022',
            'Genre' => ['Horror, ', 'Thriller, '],
            'Pemeran Utama' => [
                'Caitlin Halderman, ', 
                'Jovarel Callum, ', 
                'Junior Roberts, ', 
                'Sonia Alyssa'],
            'Sutradara' => 'Kimo Stamboel'
        ],
        [ // no.5
            'poster' => 'mencuri raden saleh.jpg',
            'Judul' => 'Mencuri Raden Saleh',
            'Tahun' => '2022',
            'Genre' => ['Action, ', 'Crime, ', 'Drama'],
            'Pemeran Utama' => [	
                'Iqbaal Dhiafakhri Ramadhan, ',
                'Angga Yunanda, ',
                'Umay Shahab, ',
                'Ari Irham, ',
                'Aghniny Haque, ',
                'Rachel Amanda'],
            'Sutradara' => 'Angga Dwimas Sasongko'
        ],
        
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($daftarFilm as $i) { ?>
    <ul>
        <li>
            <img src="img/<?= $i['poster']; ?>" width ="150">
        </li>
        <li>Judul : <?= $i['Judul']; ?></li>
        <li>Tahun : <?= $i['Tahun']; ?></li>
        <li>Genre : </li>
        <?php foreach($i['Genre'] as $g ) {
            echo $g;
        }; ?>
        <li>Pemeran Utama : </li>
        <?php foreach($i['Pemeran Utama'] as $p ) {
            echo $p;
        }; ?>
        <li>Sutradara : <?= $i['Sutradara']; ?></li>
        <br><br>
    </ul>
        <?php } ?>

</body>
</html>