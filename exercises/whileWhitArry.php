<?php
/**
 * Crie um array com valores inteiros de 10 a 100, com incremento de 10;
 * Aplique um loop neste array;
 * Quando entrar os valores 30 ou 40, pule para a próxima execução;
 */

$valoresInteiros = [];
$incremento = 10;
$limite = 100;
$pularValorX = 30;
$pularValorY = 40;
$i = 0;

while ($i <= $limite) {
    $i += $incremento;

    if ($i == $pularValorX || $i == $pularValorY) {
        continue;
    }

    // Adiciona o valor ao array apenas se não for pular
    array_push($valoresInteiros, $i);

    // Se o valor atingir o limite, encerra o loop
    if ($i >= $limite) {
        break;
    }
}

print_r($valoresInteiros);
