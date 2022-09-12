<?php

echo "<h3>Array</h3>";
//array => lista
echo "<p>array = variáveis com diversas chaves</p>";

$nome = array("Guilherme", "João", "Felipe");

echo $nome[1];
echo "<br>";

$ingredientes = [
        'açucar',
        'farinha de trigo',
        'ovo',
        'leite',
        'fermento de pó'
];
var_dump($ingredientes);
//echo $ingredientes[3];
//print_r($ingredientes);

echo "<br>";

$informacao['nome'] = "Guilherme";
$informacao['idade'] = 24;
$informacao['cidade'] = "Itu";

echo $informacao['nome'];
echo "<br>";
echo $informacao['idade'];
echo "<br>";
echo $informacao['cidade'];
echo "<br>";

?>

<br>
<a style="text-decoration: none;" href="http://localhost/php_basico_nazarena/">VOLTAR</a>