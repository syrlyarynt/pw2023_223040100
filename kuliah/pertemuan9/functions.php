<?php 
define('BASE_URL', '/pw2023_223040100/kuliah/pertemuan9/');

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function uriIs($uri) {
    return($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active' : '';
}
?>