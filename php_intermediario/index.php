<?php
include("../config.php");

echo "<h2><a style='text-decoration: none;' href='http://localhost/php_basico_nazarena/php_intermediario/foreach.php'>Foreach</a></h2>";

echo "<hr>";

echo "<h2><a style='text-decoration: none;' href='http://localhost/php_basico_nazarena/php_intermediario/array-multi.php'>ARRA's MULTIDIMENSIONAIS</a></h2>";

echo "<hr>";

// sleep -> durma o código por x segundos.
// die -> "matar" o código

$nome = "guilherme";

if($nome == 'joao'){
    echo 'tudo certo';
} else {
    die("o script parou de ser executado!");
}


?>