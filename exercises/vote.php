
<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<div class="titulo">Você pode votar?</div>
<form action="#" method="post">
    <input type="text" name="age" placeholder="Idade:">
    <button>Enviar</button>
</form>

<?php
/*
* Crie um arquivo chamado controle.php e:
* Faça um script que verifica se uma pessoa pode votar (idade >= 16).
*/
$age = isset($_POST['age']) ? $_POST['age'] : 0;

if ($age >= 16) {
  echo "Você tem $age anos de idade e pode votar";
} elseif ($age == 0) {
  echo "Entre com a sua idade para verificar.";
} else {
  echo "Você tem $age anos de idade e não pode votar";
}

?>



