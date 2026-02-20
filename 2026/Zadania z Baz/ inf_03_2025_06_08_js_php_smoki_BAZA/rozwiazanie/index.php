<?php
$db = mysqli_connect("localhost", "root", "", "smoki");

$query = "SELECT nazwa, dlugosc, szerokosc FROM smok WHERE pochodzenie = 'Polska'";
$result = mysqli_query($db, $query);


echo "<table border='1' cellpadding='5'>
 <th>nazwa</th><th>dlugosc</th><th>szerokosc</th>
";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
                <td>{$row['nazwa']}</td>
                <td>{$row['dlugosc']}</td>
                <td>{$row['szerokosc']}</td>
        </tr>";
}

mysqli_close($db);