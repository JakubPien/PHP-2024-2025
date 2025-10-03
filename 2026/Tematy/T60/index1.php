<?php
$db = mysqli_connect("localhost", "root", "", "3i_2_baza1");

$q = "SELECT pracownicy.imie, pracownicy.nazwisko, pracownicy.wynagrodzenie FROM pracownicy WHERE wynagrodzenie > 90000";

$wynik = mysqli_query($db, $q);
echo "<ol>";
while ($el = mysqli_fetch_row($wynik)) {
    echo "<li>" . "Imię: " . $el[0] . "<br> Nazwisko:  " . $el[1] . "<br>Wynagrodzenie " . $el[2] . "<br> "  .  "</li><br>";
}
echo "</ol>";

mysqli_close($db);