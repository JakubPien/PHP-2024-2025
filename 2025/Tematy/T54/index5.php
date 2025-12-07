<?php
function nwd($x, $y) {
    $x = abs($x);
    $y = abs($y);

    while ($y != 0) {
        $z = $y;
        $y = $x % $y;
        $x = $z;
    }

    echo "Największy wspólny dzielnik to: $x";
}

nwd(48, 18);
?>
