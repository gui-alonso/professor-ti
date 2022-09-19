<?php
echo "<h3>FOREARCH e FOR para ARRAYS</h3>";
$arr = array('chave1'=>'Guilherme', 'João', 'Felipe', 'Vinicius');
/*
foreach ($arr as $key => $value) {
    echo $key.'=>'.$value;
    echo '<hr>';
}
*/

//FUNÇÃO -> nada mais é que um valor que é retornado.

/*são 3 etapas obrigatoriamente;
    a primeira -> a definição de uma variável auxiliar;
    a segunda -> a condição , ela vai ser revista a cada loop que fizermos;
    a terceira -> fim de loop
*/
for ($numero = 0; $numero < 10; $numero+=1) {
    echo "N: ".$numero."</br>";
}


?>
<br>
<a style="text-decoration: none;" href="http://localhost/php_basico_nazarena/php_intermediario/">VOLTAR</a>