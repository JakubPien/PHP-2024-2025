<?php
$db = mysqli_connect("localhost", "root", "", "piekarnia");

$query = "SELECT rodzaj, nazwa, gramatura, cena FROM wyroby WHERE rodzaj = 'INNE'";
$result = mysqli_query($db, $query);

echo "<table border='1'>";
echo "<th>Rodzaj</th><th>Nazwa</th><th>Gramatura</th><th>Cena</th>";
while ($row = mysqli_fetch_array($result)) {

    echo " <tr>
    <td>{$row["rodzaj"]}</td> <td>{$row["nazwa"]}</td> <td>{$row["gramatura"]}</td> <td>{$row["cena"]}</td>
            </tr>";
}


mysqli_close($db);
