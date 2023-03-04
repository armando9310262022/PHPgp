<link rel="stylesheet" type="text/css" href="css/helloWorld.css" />
<?php

echo "<div class=genDiv><b>$ _SERVER</b> es una variable especial reservada por PHP que contiene toda la información del servidor web. Es conocida como una superglobal. Consulte la página del manual sobre Superglobales para más información.</div>";

echo "<br>Código:<br>";
echo "<img src=imgs/H_U_A.jpg><br>";
echo "Resultado:";

echo "<div class=fontCode>";

echo $_SERVER['HTTP_USER_AGENT'];


	if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	
	?>
		<h3>strpos() debe haber devuelto no falso</h3>
		<p>Está usando Internet Explorer</p>
	<?php
		} else {
	?>
		<h3>strpos() debe haber devuelto falso</h3>
		<p>No está usando Internet Explorer</p>
	<?php
	}
echo "</div>";

echo "<div class=genDiv>En vez de usar una sentencia echo de PHP para mostrar algo, salimos del modo PHP y enviamos solamente HTML. Este es un punto muy importante y potente que se ha de observar aquí, y es que la fluidez lógica del script permanece intacta. Solamente uno de los bloques HTML terminará siendo enviado al navegador dependiendo del resultado de strpos(). En otras palabras, depende de si el string MSIE fue encontrada o no.</div>";
?>