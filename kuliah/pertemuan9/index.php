<?php 
require('functions.php');
$title = "Home";
 ?>
<?php 
  $students = [
    [
        "nama" => "Syerly aryanti",
        "npm" => "223040100",
        "email" => "aryantisyerly9@gmail.com"
    ],
    [
        "nama" => "Satria tegar",
        "npm" => "223040000",
        "email" => "tegarsatria@gmail.com"
    ],
  ];

  // dd($_SERVER["REQUEST_URI"]);
  // /pw2023_223040100/kuliah/pertemuan9/

 require('views/index.view.php');
?>