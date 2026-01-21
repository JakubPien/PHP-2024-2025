<?php

$db = mysqli_connect('localhost', 'root', '', '3p_2_opony');

$zapytanie = "SELECT zamowienie.id_zam, zamowienie.ilosc, opony.model, opony.cena FROM zamowienie JOIN opony ON zamowienie.nr_kat = opony.nr_kat ORDER BY RAND() LIMIT 1;
";

$result = mysqli_query($db, $zapytanie);

echo "<table border='1' cellpadding='5'>
            <tr>
                <th>id_zam</th><th>ilosc</th><th>model</th><th>cena</th>
            </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
                <td>{$row['id_zam']}</td>
                <td>{$row['ilosc']}</td>
                <td>{$row['model']}</td>
                <td>{$row['cena']}</td>
              </tr>";
}

echo "</table>";

mysqli_close($db);