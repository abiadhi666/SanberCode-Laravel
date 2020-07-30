<?php

function cari_mean($arr){
//kode di sini
$sum_mapel = array_sum($arr);
$jml_mapel = count($arr);
$avg = $sum_mapel / $jml_mapel;
$bulat = round($avg);

echo "$bulat <br>";
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>