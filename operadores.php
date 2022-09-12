<?php

echo "<h3>Operadores</h3>";

$valor = 10;
$valor2 = 12;

/*
if ($valor !== $valor2) {
    echo "verdade";
} else {
    echo "falso";
}
*/

/**
 *  Um sinal de igual quer dizer que estamos atribuindo um valor. Sempre retorna verdadeiro.
 */
/*
if ($valor = $valor2) {
        echo "verdade";
}
*/
/*echo "<hr>";

// apenas confere se o valor é igual.
if ($nome == $nome2) {
    echo "verdade";
}

echo "<hr>";

// conferimos para ver se é diferente
if($nome != $nome2) {
    echo "é diferente";
}*/

echo "<hr>";

// confere se sao identicos, ou seja, mesmo valor e mesmo tipo.
if($valor === $valor2) {
    echo "verdade";
} else {
    echo "não são identicos";
}


echo "<hr>";

// comparamos para ver se são diferentes (tipo e valor)
/*
if($valor !== $valor2) {
    echo "verdade";
}
*/
?>

<br>
<a style="text-decoration: none;" href="http://localhost/php_basico_nazarena/">VOLTAR</a>