<?php
include("config.php");

echo "<h3>Loopings</h3>";


// laço de repetição FOR
/*for($cont = 0; $cont < 10; $cont++){
    echo "Olá, mundo!";
    echo "<hr>";
}*/

// laço de repetição WHILE - confere antes..
/*$cont = 0;
while ($cont < 10) {
    echo "alo mundo";
    echo "<hr>";
    $cont++;
}*/

// laço de repetição DO - vai conferir antes de conferir.
$cont = 0;
do {
    echo 'ola mundo';
    echo '<hr>';
    $cont++;
}while($cont < 10)

?>
<br>
<a style="text-decoration: none;" href="<?= INCLUDE_PATH;?>">VOLTAR</a>