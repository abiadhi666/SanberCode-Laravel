<?php
function pasangan_terbesar($angka){
// kode di sini
$both = 0;
$arr = str_split($angka);

for ($i=0; $i < count($arr) - 1; $i++) { 
    # code...
    if ($i === 0)$both = $arr[$i] + $arr[$i+1];
    if ($both < $arr[$i] + $arr[$i+1])$both = $arr[$i] + $arr[$i+1];
}
echo "$both <br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>