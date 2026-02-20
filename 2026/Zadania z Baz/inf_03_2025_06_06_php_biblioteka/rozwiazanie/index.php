<?php
$db = mysqli_connect("localhost", "root", "" , "biblioteka" );
$query = "SELECT tytul, id_cz, data_odd FROM ksiazka JOIN wypozyczenia ON id = wypozyczenia.id_ks ORDER BY data_odd ASC LIMIT 15;";

$result = mysqli_query($db, $query);

echo "<table border='1' cellpadding='5'>
        <th>TYTUŁ</th><th>ID_CZYTELNIKA</th><th>DATA_ODDANIA</th>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$row['tytul']}</td>";
    echo "<td>{$row['id_cz']} </td>";
    echo "<td>{$row['data_odd']}</td>";
    echo "</tr>";
}
echo "</table>";