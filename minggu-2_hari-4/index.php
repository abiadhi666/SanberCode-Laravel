<?php
require "animal.php";
require "ape.php";
require "frog.php";

$sheep = new Animal("shaun");

echo $sheep->getName(); // "shaun"
echo "<br>";
echo $sheep->getLegs(); // 2
echo $sheep->cold_blooded; // false
echo "<br>";

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()

//APE
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";

//FROG
$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"