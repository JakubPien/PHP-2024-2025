<?php
$db = mysqli_connect('localhost', 'root', '', 'przewozy');
$query = "SELECT imie, nazwisko, telefon, zadanie, data FROM osoby JOIN zadania ON id_osoba = osoba_id WHERE id_osoba = osoba_id;";

$result = mysqli_query($db, $query);

echo "<table border='1' cellpadding='5'>
        <th>Imie</th><th>Nazwisko</th><th>Telefon</th><th>Zadanie</th><th>Data</th>
";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
                <td>{$row['imie']}</td>
                <td>{$row['nazwisko']}</td>
                <td>{$row['telefon']}</td>
                <td>{$row['zadanie']}</td>
                <td>{$row['data']}</td>
        </tr>";
}

echo "</table>";

mysqli_close($db);