<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operators = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *= 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5)
];
var_dump($operators);

$incremententA = 5;
$incremententB = 5;
$incrementent = [
    "pós-incremento" => $incremententA++,
    "res-incremento" => $incremententA,
    "pré-incremento" => ++$incremententA,
    "pós-decremento" => $incremententB--,
    "res-decremento" => $incremententB,
    "pré-decremento" => --$incremententB
];
var_dump($incrementent);


/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;
$related = [
    "a == b" => ($relatedA == $relatedB), 
    "a === b" => ($relatedA === $relatedB), 
    "a != b" => ($relatedA != $relatedB),
    "a !== b" => ($relatedA !== $relatedB),
    "a > c" => ($relatedA > $relatedC),
    "a < c" => ($relatedA < $relatedC),
    "a >= B" => ($relatedA >= $relatedB),
    "a >= c" => ($relatedA >= $relatedC),
    "a <= c" => ($relatedA <= $relatedC)
];
var_dump($related);



/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "! a" => (!$logicA),
    "! B" => (!$logicB)
];
var_dump($logic);


/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;
$calc = [
    "a + B" => ($calcA + $calcB),
    "a - B" => ($calcA - $calcB),
    "a * B" => ($calcA * $calcB),
    "a / B" => ($calcA / $calcB),
    "a % B" => ($calcA % $calcB)
];
var_dump($calc);
