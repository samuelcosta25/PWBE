<?php
	include "funcao.php";

	$r=$_POST['raio'];
	echo "Valor do perimetro do circulo: ".perimetro($r)."<br>";
	echo "Valor da area do circulo: ".area($r)."<br>";


?>