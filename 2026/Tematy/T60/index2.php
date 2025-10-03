<?php
$db = mysqli_connect("localhost", "root", "", "3i_2_baza1");

$q = "SELECT pracownicy.imie, pracownicy.nazwisko, pracownicy.dzial, pracownicy.dzial FROM pracownicy WHERE dzial = 'Reklama' OR dzial = 'Magazyn'";

$wynik = mysqli_query($db, $q);
echo "<ol>";
while ($el = mysqli_fetch_row($wynik)) {
    echo "<li>" . "Imię: " . $el[0] . "<br> Nazwisko:  " . $el[1] . "<br>Dzial: " . $el[2] . "<br> "  .  "</li><br>";
}
echo "</ol>";

mysqli_close($db);