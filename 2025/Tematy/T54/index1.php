<?php

function wbz1($x) {
 if ($x > 0) return "$x";
 else return $x * -1;
} ////////////////////////////////////////////

function wbz2($x) {
    $wynik = ($x>0) ? $x : $x * -1;
    return $wynik;
} ////////////////////////////////////////////

echo ("Wariant 1:")."<br>";
echo wbz1(-12)."<br>";
echo wbz1(32)."<br>";
echo ("Wariant 2:")."<br>";
echo wbz2(32)."<br>";
echo wbz2(-12)."<br>";


