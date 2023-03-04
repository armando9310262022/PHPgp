<!DOCTYPE html>
<html>
<head>
	<title>Números Enteros</title>
	<link rel="stylesheet" type="text/css" href="css/helloWorld.css" />

</head>
<body>
<h1>Desbordamiento de Enteros (integers)</h1>
<div class="genDiv">
	Los integer pueden especificarse mediante notación decimal (base 10), hexadecimal (base 16), octal (base 8) o binaria (base 2), opcionalmente precedidos por un signo (- o +).

Los literales de tipo integer binarios están disponibles desde PHP 5.4.0.

Para utilizar la notación octal, se antepone al número un 0 (cero). Para utilizar la notación hexadecimal, se antepone al número 0x. Para utilizar la notación binaria, se antepone al número 0b.

</div>

<br>
<div class="genDiv">
El tamaño de un integer depende de la plataforma, aunque el valor usual es un valor máximo de aproximadamente dos mil millones (esto es, 32 bits con signo). Las plataformas de 64 bits normalmente tienen un valor máximo de aproximadamente 9E18, excepto en Windows antes de PHP 7, que siempre es de 32 bits. PHP no tiene soporte para el tipo integer sin signo. El tamaño de un integer se puede determinar mediante la constante PHP_INT_SIZE, y el valor máximo mediante la constante PHP_INT_MAX desde PHP 4.4.0 y PHP 5.0.5, y el valor mínimo mediante la constante PHP_INT_MIN desde PHP 7.0.0.
</div>
<br>
<b>Desbordamiento de Enteros</b>
<div class="genDiv">
Si PHP encuentra un número fuera de los límites de un integer, se interpretará en su lugar como un valor de tipo float. También, una operación cuyo resultado sea un número fuera de los límites de un integer devolverá en su lugar un valor de tipo float.
</div>

<br>
<b>Ejemplo #1 Literales de números enteros:</b>
<br><br>
<img src="imgs/numbers.jpg">
<br><br><b>Resultados:</b><br>
<div class="fontCode">
<?php
$a = 1234; // número decimal
echo $a,"<br>";
$a = -123; // un número negativo
echo $a,"<br>";
$a = 0123; // número octal (equivale a 83 decimal)
echo $a,"<br>";
$a = 0x1A; // número hexadecimal (equivale a 26 decimal)
echo $a,"<br>";
$a = 0b11111111; // número binario (equivale al 255 decimal)
echo $a,"<br>";
?>
</div>

<h1>Desbordamiento de Datos:</h1>
<div class="genDiv">
Si PHP encuentra un número fuera de los límites de un integer, se interpretará en su lugar como un valor de tipo float. También, una operación cuyo resultado sea un número fuera de los límites de un integer devolverá en su lugar un valor de tipo float.
</div>

Script en PHP:<br>
<img src="imgs/desbordamiento32bits.jpg">
<br><br><b>Resultados en 32 Bits:</b><br>
<div class="fontCode">
<?php

	$número_grande = 2147483647;
	var_dump($número_grande);                    // int(2147483647)
	echo "<br>";
	$número_grande = 2147483648;
	var_dump($número_grande);                    // float(2147483648)
	echo "<br>";
	$millón = 1000000;
	$número_grande =  50000 * $millón;
	var_dump($número_grande);                    // float(50000000000)

?>
</div>
<br>
<b>Script en PHP:</b><br>
<img src="imgs/desbordamiento64bits.jpg"><br> 
<b>Resultados en 64 bits</b>
<?php
echo "<br>";
$número_grande = 9223372036854775807;
var_dump($número_grande);                    // int(9223372036854775807)
echo "<br>";
$número_grande = 9223372036854775808;
var_dump($número_grande);                    // float(9.2233720368548E+18)
echo "<br>";
$millón = 1000000;
$número_grande =  50000000000000 * $millón;
var_dump($número_grande);                    // float(5.0E+19)
?>
<br><br>
<div class="genDiv">
No existe el operador de división de integer en PHP. 1/2 produce el float 0.5. El valor puede ser convertido a un integer redondeándolo a cero, o mediante la función round() que permite un mayor control sobre el redondeo.
</div>
<br>
<b>Script en PHP:</b>
<br>
<img src="imgs/divEnt.jpg">
<br>
<b>Resultados:</b>
<div class="fontCode">
<?php
	var_dump(25/7);         // float(3.5714285714286) 
	var_dump((int) (25/7)); // int(3)
	var_dump(round(25/7));  // float(4) 
?>
</div>
<br>
<b>Conversión a números enteros:</b>
<div class="genDiv">
Para convertir explícitamente un valor al tipo integer se puede emplear tanto (int) como (integer). Sin embargo, la mayoría de las veces la conversión no es necesaria, ya que un valor es convertido de forma automática cuando un operador, función o estructura de control requiera un argumento de tipo integer. Un valor también puede ser convertido al tipo integer mediante la función intval().
<br>
Si un resource es convertido a un integer, el resultado será el número de recurso único asignado al resource por PHP durante la ejecución.
<br>
<b>Consulte también la Manipulación de tipos.</b>
<br>
<b>Desde booleanos ¶</b>
<br>
false producirá 0 (cero), y true producirá 1 (uno).
<br>
<b>Desde números de punto flotante ¶</b>
<br>
Cuando se convierte un float a un integer, el número será redondeado hacia cero.
<br>
Si el valor de tipo float esta por debajo de los límites de un integer (normalmente +/- 2.15e+9 = 2^31 en plataformas de 32 bits y +/- 9.22e+18 = 2^63 en plataformas de 64 bits distintas de Windows), el resultado es indefinido, debido a que float no tiene la precisión suficiente para ofrecer el resultado como un integer exacto. No se mostrará ninguna advertencia, ni siquiera un aviso, cuando esto ocurra.
</div>
<b>Script en PHP:</b><br>
<img src="imgs/castToIntNumbs.jpg"><br>
<b>Resultados:</b>
<div class="genDiv">
	
	<?php
	echo (int) ( (0.1+0.7) * 10 ); // ¡muestra 7!
	?>

</div>
</body>
</html>

