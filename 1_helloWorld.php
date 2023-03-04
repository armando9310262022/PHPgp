<!DOCTYPE html>
<html>
<head>
<title>Ejemplo</title>
<link rel="stylesheet" type="text/css" href="css/helloWorld.css" />
</head>
<body>

<h1>¿Qué es PHP?
</h1>

<p class="genDiv">PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML.
<br>
Bien, pero ¿qué significa realmente? Un ejemplo nos aclarará las cosas:
</p>

Script en PHP:
<br>
<img src="imgs/helloWorld.jpg">
<br>
<b>Resultado:</b>
<div class="fontCode">

		<?php
            echo "¡Hola, soy un script de PHP!";
		?>

		<?php
			$string1 = "<b>< ?php y ?></b>";
		?>

	</div>

<p class="genDiv">
	En lugar de usar muchos comandos para mostrar HTML (como en C o en Perl), las páginas de PHP contienen HTML con código incrustado que hace "algo" (en este caso, mostrar "¡Hola, soy un script de PHP!). El código de PHP está encerrado entre las etiquetas especiales de comienzo y final <?php echo $string1 ?> que permiten entrar y salir del "modo PHP".
</p>

<p class="genDiv">
Lo que distingue a PHP de algo del lado del cliente como Javascript es que el código es ejecutado en el servidor, generando HTML y enviándolo al cliente. El cliente recibirá el resultado de ejecutar el script, aunque no se sabrá el código subyacente que era. El servidor web puede ser configurado incluso para que procese todos los ficheros HTML con PHP, por lo que no hay manera de que los usuarios puedan saber qué se tiene debajo de la manga.
</p>
<p class="genDiv">
Lo mejor de utilizar PHP es su extrema simplicidad para el principiante, pero a su vez ofrece muchas características avanzadas para los programadores profesionales. No sienta miedo de leer la larga lista de características de PHP. En unas pocas horas podrá empezar a escribir sus primeros scripts.
</p>
<p class="genDiv">
Aunque el desarrollo de PHP está centrado en la programación de scripts del lado del servidor, se puede utilizar para muchas otras cosas. Siga leyendo y descubra más en la sección ¿Qué puede hacer PHP?, o vaya directo al tutorial introductorio si solamente está interesado en programación web.
</p>
</body>
</html>
