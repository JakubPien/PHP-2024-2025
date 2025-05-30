
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T113</title>
</head>
<body>

<header>
    <h1>Zadanie T113 </h1>
    <h2>Autor: Jakub Pieniężny 2p</h2>
    <link rel="stylesheet" href="style.css">
</header>

<section>
  <p>
      Dane są dwie tablice. Napisz funkcję, która otrzymuje obie tablice w argumencie i zwraca posortowaną tablicę zawierającą wszystkie elementy z pierwszej i drugiej tablicy.
  </p>
    <form method="post">
        <label>Tablica 1 (oddziel przecinkami):</label><br>
        <input type="text" name="tablica1" placeholder="Np. 5,2,8"><br><br>

        <label>Tablica 2 (oddziel przecinkami):</label><br>
        <input type="text" name="tablica2" placeholder="Np. 3,1,7"><br><br>

        <input type="submit" value="Połącz i posortuj">
    </form>
</section>

<section>

   <?php
function polaczIPosortuj($tablica1, $tablica2) {
    $polaczona = array_merge($tablica1, $tablica2);
    sort($polaczona);
    return $polaczona;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input1 = $_POST["tablica1"];
    $input2 = $_POST["tablica2"];

    $tab1 = array_map("intval", array_map("trim", explode(",", $input1)));
    $tab2 = array_map("intval", array_map("trim", explode(",", $input2)));

    $wynik = polaczIPosortuj($tab1, $tab2);

    echo "<h2>Wynik:</h2>";
    echo "<pre>";
    print_r($wynik);
    echo "</pre>";
}
?>
</section>

</body>
</html>