<?php
echo "<h3>ARRAY MULTIDIMENSIONAL</h3>";

// array single
$arr = ['guilherme', 'vinicius'];
$arr = array('guilherme', 'chave2' => 'vinicius');

$arr[0] = 'guilherme';
$arr[] = 'joao';


// array multidimensionais
$arr2 = array(array('Guilherme', 'Vinicius'), array(25,13));
echo $arr2[1][0];
?>
<br>
<a style="text-decoration: none;" href="http://localhost/php_basico_nazarena/php_intermediario/">VOLTAR</a>