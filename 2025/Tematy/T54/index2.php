<?php
$x = 2;
$y = 3;
function potega(&$x, &$y) {
    echo("x =  $x <br> y = $y <br> x<sup>y</sup> = $x<sup>$y</sup> = ");
    $z = $x;
    for ($i = 1; $i < $y; $i++) {
        $x *= $z;
    }
    echo("$x");

}

potega($x, $y);

