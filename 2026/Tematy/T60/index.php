<?php
    $db = mysqli_connect("localhost", "root", "", "3i_2_baza1");
    $q = "SELECT pracownicy.imie, pracownicy.nazwisko, pracownicy.stanowisko, pracownicy.dzial from pracownicy WHERE sekcja = 'drukarki'";

    $wynik = mysqli_query($db, $q);

    echo "<ol>";
    while($el = mysqli_fetch_row($wynik)){
        echo "<li>" . $el[0] . " " . $el[1] . " " . $el[2] . " ". $el[3] .  "</li><br>";
    }
    echo "</ol>";
mysqli_close($db);