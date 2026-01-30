<?php

$db = mysqli_connect("localhost", "root", "", "remonty");
$query = "SELECT imie, cena FROM klienci JOIN zlecenia USING(id_klienta) WHERE miasto = 'Poznań' AND rodzaj = 'malowanie'";

$result = mysqli_query($db, $query);

echo "<table border='1' cellpadding='5'>
 <th>imie</th><th>cena</th>
";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['imie']}</td>
            <td>{$row['cena']}</td>
          </tr>
    ";
}
echo "</table>";