<?php


$db = mysqli_connect("localhost", "root", "", "3p_2_szkolenia");
$query = "SELECT COUNT(kod_kursu) AS 'Zapisanych', nazwa FROM kursy JOIN kursy_uczestnicy ON kod = kod_kursu GROUP BY nazwa";


$result = mysqli_query($db, $query);
echo "<table border='1' cellpadding='5'>
 <th>Zapisanych</th><th>nazwa</th>
";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['Zapisanych']}</td>
            <td>{$row['nazwa']}</td>
            </tr>
";
}

echo "</table>";


mysqli_close($db);
