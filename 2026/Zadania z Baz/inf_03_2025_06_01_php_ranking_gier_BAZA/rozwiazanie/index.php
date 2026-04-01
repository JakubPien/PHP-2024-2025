<?php
$db = mysqli_connect("localhost", "root", "", "gry");
$query = "INSERT INTO gry (nazwa, opis, punkty, cena, zdjecie) VALUES ('Minecraft', 'kwadratowy przetrwanie', 50, 100, 'minecraft.png')";

$result = mysqli_query($db, $query);
