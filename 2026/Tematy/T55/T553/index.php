    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T553</title>
</head>
<body>

<section>
<?php
function sortowanie(array $tab1, array $tab2){
    $tab3 = array_merge($tab1, $tab2);

    sort($tab3);

    return $tab3;
}

$tab1 = [2,4,6,2,7,4];
$tab2 = [9,7,4,8,6,3];

$tab3 = sortowanie($tab1, $tab2);
echo "Tablica 1: ";
for ($i = 0; $i < count($tab1); $i++) {
    echo $tab1[$i]." ";
}
echo "<br>";
echo "Tablica 2: ";
for ($i = 0; $i < count($tab2); $i++) {
    echo $tab2[$i]." ";
}
echo "<br>";
echo "Tablice połączone: ";
for ($i = 0; $i < count($tab3); $i++) {
    echo $tab3[$i]." ";
}

?>
</section>

</body>
</html>


