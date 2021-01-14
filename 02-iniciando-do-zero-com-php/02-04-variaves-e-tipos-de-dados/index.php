<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

//Usando camelcase
$userFirtName = "Leandro";
$userLastName = "de Paula";
echo "<h3>{$userFirtName} {$userLastName}</h3>";

//Usando undescore
$user_first_name = $userFirtName;
$user_last_name = $userLastName;
echo "<h3>{$user_first_name} {$userLastName}</h3>";

$userAge ="33";
echo "<p>{$userFirtName} {$userLastName} <span class='tag'>tem {$userAge}</span></p>";

$userEmail = "<p>leandrodepaula.ti@gmail.com</p>";

//Variavel Variavel
//$company = "UpInside";
//$company = "Treinamento";
//echo "<h3>{$company} {$UpInside}</h3>";

$calcA = 10;
$calcB = 20;
$calcB = $calcA;
$calcB = &$calcA;
$calcB = 50;

var_dump(
    [
    "a" => $calcA,
    "b" => $calcB
    ]
);


/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge > 50);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

// if ($a || $b || $c || $d || $e) {
//   var_dump(expression: true);
// } else {
//   var_dump(expression: false);
// }



/**
 * [ tipo callback ] call | closure
 */
//fullStackPHPClassSession("tipo callback", __LINE__);

// $code = "<article><h1>Um call User Function!</h1></article>";
// //$codeClear = call_user_func( function: "strip_tags", $code);
//
// $codeMore = function ($code)
// {
//   var_dump($code);
// }
// $codeMore( code: "#BoraProgramar!");



/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo";
// $$arrayName = [$string];
$object = new StdClass();
$object ->hello = $string;
$null = null;
$int = 12132;
$float = 1.23213;

var_dump(
    [
    $string,
    // $$arrayName,
    $object,
    $null,
    $int,
    $float
    ]
);
