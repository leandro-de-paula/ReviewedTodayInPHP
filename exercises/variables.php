<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<div class="titulo">$_POST</div>
<form action="#" method="post">
    <input type="text" name="name" placeholder="Nome:">
    <input type="text" name="age" placeholder="Idade:">
    <input type="text" name="address" placeholder="Endereço:">
    <button>Enviar</button>
</form>

<?php
/*
* Crie um arquivo chamado variaveis.php e:
* Declare uma variável para seu nome, idade e cidade.
  * Exiba essas informações com um texto formatado (ex.: "Meu nome é X, tenho Y anos e moro em Z.").
*/
$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : 0;
$address = isset($_POST['address']) ? $_POST['address'] : '';

echo "Seu nome é $name, você tem $age anos de idade e mora em $address.";

?>



