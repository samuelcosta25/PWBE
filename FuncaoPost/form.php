<?php
	include "funcao.php";

	$x=$_POST["num1"];
	$y=$_POST["num2"];
	echo "Soma entre eles: ".adicao($x,$y)."<br>";
	echo "O primeiro numero elevado ao segundo: ".potencia($x,$y)."<br>";


?>