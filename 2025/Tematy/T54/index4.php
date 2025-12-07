<?php
function porownajLiczby($x, $y) {
    if ($x < $y) {
        echo "<span style='color: green;'>$x</span> ";
        echo "<span style='color: red;'>$y</span>";
    } elseif ($x > $y) {
        echo "<span style='color: green;'>$x</span> ";
        echo "<span style='color: red;'>$y</span>";
    } else {
        echo "<span style='color: blue;'>$x</span> ";
        echo "<span style='color: blue;'>$y</span>";
    }
}

porownajLiczby(5, 10);

