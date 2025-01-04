<?php 
/*
* Este HW foi feito Usando:
* LunarVim
* Warp-terminal
* Internal Server PHP
*/
echo "Hello, World!";

$nome = "Maria"; // String
$idade = 25; // Inteiro
$altura = 1.65; // Float

echo "<br>O nome dela é $nome, ela tem $idade anos e sua altura é de $altura metros";

$a = 10;
$b = 20;
  
echo "<br>";
echo $a + $b; // Soma 30
echo $a > $b; // Retorna Falso

if ($idade >= 18) {
  echo "<br>você é marior de idade.";
} else {
  echo "<br>Você é menor de idade.";
}

echo "<br>";
for ($i = 1; $i <= 5; $i++) {
  echo "Número: $i<br>";
}
?>

