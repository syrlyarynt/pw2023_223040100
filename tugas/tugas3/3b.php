<?php 

function urutanAngka($angka) 
{
    $awal = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $awal . " ";
            $awal++;
        }
        echo "<br>";
    }
}   
urutanAngka(5);

?>