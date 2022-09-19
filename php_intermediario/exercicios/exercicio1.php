<?php

echo "<h2>Exercício 1</h2>";

echo "<h3>FAÇA UMA VERIFICAÇÃO SE A PESSOA É MAIOR DE IDADE, SE FOR, ELA PODE DIRIGIR, CASO CONTRÁRIO, NÃO PODE DIRIGIR AINDA. CRIE DUAS VARIÁVEIS, UMA DO NOME DA PESSOA, OUTRA COM A IDADE, E DEPOIS JUNTA TUDO.</h3>";

echo "<hr>";

$nome = "xxx";
$idade = 17;

if ($idade >= 18) {
	echo $nome." já pode dirigir.";
} else{
	echo $nome." não pode dirigir ainda, pois ela(e) tem ".$idade." anos.";
}


?>