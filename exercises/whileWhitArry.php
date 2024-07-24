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
echo count($valoresInteiros);


$valoresInteirosPassados = [10,20,30,40,50,60,70,80,90,100];
$limiteFinal = 100;
$i = 0;
$numeroAtual = 0;

while ($i < count($valoresInteirosPassados)) {
    $numeroAtual = $valoresInteirosPassados[$i];
    if ($numeroAtual == 30 || $numeroAtual == 40) {
        $i++;
        continue;
    }

    echo "Elemento: $valoresInteirosPassados[$i] \n";
    $i++;
}