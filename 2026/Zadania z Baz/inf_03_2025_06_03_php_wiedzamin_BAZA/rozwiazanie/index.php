<?php
$db = mysqli_connect("localhost", "root", "", "biblioteka");


$query = "SELECT autor, tytul, kod FROM ksiazki ORDER BY RAND() LIMIT 5";
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_assoc($result)) { echo $row['autor'] . " " . $row['tytul'] . " " . $row['kod'] . "<br>"; }