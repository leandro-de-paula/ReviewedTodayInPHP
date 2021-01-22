<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O último show do AC/DC foi incrível!";
$start = 0;
var_dump(
    [
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, $start, $length = 15),
    //PHP 8 => "substr" => substr($string, start:"9"),
    "mb_substr" => mb_substr($string, $start, $length = 15),
    //PHP 8 => "mb_substr" => mb_substr($string, start:"9"),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string)
    ]
);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbstring = $string;

var_dump(
    [
    "mb_strtoupper" => mb_strtoupper($mbstring),
    "mb_strtolower" => mb_strtolower($mbstring),
    "mb_convert_case UPPER" => mb_convert_case($mbstring, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mbstring, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbstring, MB_CASE_TITLE)
    ]
);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbstring . " Fui, iria novamente, e foi épico";

var_dump(
    [
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", ", 0),
    "mb_strrpos" => mb_strrpos($mbReplace, ", ", 0),
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14),
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true)
    ]
);

$mbStrReplace = $string;
echo "<p>", $mbStrReplace, "</p>";
echo "<p>", str_replace("AC/DC", "Nirvana", $mbReplace), "</p>";
echo "<p>", str_replace(["AC/DC", "foi", "último"], "Nirvana", $mbReplace), "</p>";
echo "<p>", str_replace(["AC/DC", "foi", "último"], "Nirvana", $mbReplace), "</p>";


//PHP 8
// $article = <<ROCK
//     <article>
//         <h3>event</h3>
//         <p>desc</p>
//     </article>
// ROCK;

// $articleData = [
//     "event" => "Rock in Rio",
//     "desc" => $mbReplace
// ];

// echo str_replace(array_keys($articleData), array_values($articleData), $article);

$article = "
    <article>
        <h3>event</h3>
        <p>desc</p>
    </article>";

$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);



/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endPoint = "name=Leandro&email=leandrodepaula.ti@gmail.com.br";
mb_parse_str($endPoint, $parseEndPoint);

var_dump(
    [
    $endPoint,
    $parseEndPoint,
    (object)$parseEndPoint
    ]
);