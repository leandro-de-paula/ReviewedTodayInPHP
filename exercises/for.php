<?php
// Array com 20 números
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

// Loop para iterar sobre o array e imprimir números pares
for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] % 2 == 0) {
        echo $numeros[$i] . "\n";
    }
}
?>
