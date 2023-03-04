<link rel="stylesheet" type="text/css" href="css/helloWorld.css" />

<b>Como acceder a un carácter de una Cadena dado su índice:</b><br>

<img src="imgs/accesCharString.jpg">
<br><br>
<b>Resultado:</b>
<br>
<div class="fontCode">
<?php
// Obtener el primer carácter de un string
$str = 'Esto es una prueba.';
$primero = $str[0];
echo $primero;
echo "<br>";

// Obtener el tercer carácter de un string
$tercero = $str[2];
echo $tercero;
echo "<br>";

// Obtener el último carácter de un string
$str = 'Esto sigue siendo una prueba.';
$último = $str[strlen($str)-1];
echo $último;
echo "<br>";

// Modificar el último carácter de un string
$str = 'Mira el mar';
$str[strlen($str)-1] = 'l';

?>
</div>