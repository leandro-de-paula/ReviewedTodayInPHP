<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p> Olá Mundo!", " ","<span class='tag'>#BoraProgramar!</span>", "<p>";

$hello = "Olá Mundo!";
$code = "<span class='tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Faltam 2 {$day}s para o evento!</p>";//Sempre proter as variaveis

echo "{$hello}";
echo "{$hello} {$code}";

echo "<h3>" . $hello . " " . $code . "</h3>";//Também protege as variaveis
?>

  <h4><?= $hello;  ?> <?= $code; ?></h4><?php //atalho para ECH0S ?>

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);


//print $hello, $code;
print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";


/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$arrayName = [
  "company" => "ChavesTech",
  "couser" => "FSPHP",
  "class" => "Comandos de Saída"
 ];

 //print $array
 print_r($arrayName);
 echo "<pre>", print_r($arrayName, true), "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1></><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Lorem Ipsum is simply dummy text of the printing and typesetting
industry. Lorem Ipsum has been the industry's standard dummy text ever since
the 1500s, when an unknown printer took a galley of type and scrambled
it to make a type specimen book. It has survived not only five centuries, but
also the leap into electronic typesetting, remaining essentially unchanged.
It was popularised in the 1960s with the release of Letraset sheets containing
Lorem Ipsum passages, and more recently with desktop publishing software like
Aldus PageMaker including versions of Lorem Ipsum";

printf($article, $title, $subtitle);
echo sprintf($article, $title, $subtitle);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p>".
"</article>";
vprintf($company, $arrayName);
//echo vsprintf($company. $arrayName);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump(
  $arrayName,
  $hello,
  $code,
  $company
);
