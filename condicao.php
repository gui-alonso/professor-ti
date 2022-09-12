<?php
include ("config.php");

echo "<h3>Condição</h3>";

$nota1 = 8;
$nota2 = 8;
$media = ($nota1 + $nota2) / 2;

echo "</hr>";
echo "A média é: ".$media;
echo "<br>";

//$mediaFinal = 7;

if ($media >= 7) {
	echo "passou";
} else {
	echo "reprovado";
}

echo "<br>";

$idade = 17;

if ($idade >= 18) {
	echo "pode dirigir";
} else{
	echo "não pode dirigir";
}
?>
<br>
<a style="text-decoration: none;" href="<?= INCLUDE_PATH;?>">VOLTAR</a>