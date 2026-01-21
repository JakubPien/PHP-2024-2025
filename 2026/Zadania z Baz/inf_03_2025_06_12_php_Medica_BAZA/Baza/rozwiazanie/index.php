<?php
$db = mysqli_connect("localhost", "root", "", "3p_2_nieWiem");

$sql = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 1 ";

$result = mysqli_query($db, $sql);

echo "<table border='1' cellpadding='5'>
            <tr>
                <th>nazwa</th><th>cecha</th>
            </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
                <td>{$row['nazwa']}</td>
                <td>{$row['cecha']}</td>
              </tr>";
}

echo "</table>";


