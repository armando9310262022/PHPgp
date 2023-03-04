<link rel="stylesheet" type="text/css" href="css/helloWorld.css" />
<b>Acceder a un arreglo:</b>
<div class="genDiv">
	Acceder a un arreglo y crear un objeto con las personas:
</div>
<br>
<b>Script en PHP:</b><br>
<img src="imgs/arrayAccessjpg.jpg">
<br>
<b>Resultado:</b>
<div class="fontCode">
<?php
$jugos = array("manzana", "naranja", "koolaid1" => "púrpura");

echo "Él tomó algo de jugo de $jugos[0].".PHP_EOL;
echo "<br>";
echo "Él tomó algo de jugo de $jugos[1].".PHP_EOL;
echo "<br>";
echo "Él tomó algo de jugo $jugos[koolaid1].".PHP_EOL;

class persona {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    
    public $smith = "Smith";
}

$persona = new persona();
echo "<br>";
echo "$persona->john tomó algo de jugo de $jugos[0].".PHP_EOL;
echo "<br>";
echo "$persona->john entonces dijo hola a $persona->jane.".PHP_EOL;
echo "<br>";
echo "La esposa de $persona->john saludó a $persona->robert.".PHP_EOL;
echo "<br> <b>No funcionará:</b>";
echo "$persona->robert saludó a los dos $persona->smiths."; // No funcionará
?>
</div>