<?php
function przetworzTablice(&$tab, $m) {
    // Przetwarzanie tablicy
    foreach ($tab as $i => $wiersz) {
        foreach ($wiersz as $j => $wartosc) {
            $nowa = $wartosc * $m;
            if ($nowa == 0) {
                $nowa = 1;
            }
            $tab[$i][$j] = $nowa;
        }
    }

    // Wyświetlanie jako tabela HTML
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    foreach ($tab as $wiersz) {
        echo "<tr>";
        foreach ($wiersz as $komorka) {
            echo "<td>" . htmlspecialchars($komorka) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Przykładowe dane
$tab = [
    [1, 0, 3],
    [0, 2, 0],
    [4, 5, 0]
];

$m = 2; // Czynnik mnożący

// Wywołanie funkcji
przetworzTablice($tab, $m);
?>
