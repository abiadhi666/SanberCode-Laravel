<?php

function palindrome_angka($angka) {
    $x=$angka;
    $revnum = 0;
    while ($angka != 0)
    {
    $revnum = $revnum * 10 + $angka % 10;
    //below cast is essential to round remainder towards zero
    $angka = (int)($angka / 10); 
    }
     
    if($revnum==$x)
    {
    echo $x," adalah angka palindrome <br>";
    }
    else
    {
    echo $x." adalah bukan angka palindrome <br>";
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>