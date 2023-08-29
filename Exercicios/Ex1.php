<?php
function Adicao($num1, $num2){
	return $num1 + $num2;
}
function Subtracao($num1, $num2){
	return $num1 - $num2;
}
function Multiplicao($num1, $num2){
	return $num1 * $num2;
}
function Divisao($num1, $num2){
	if($num2 != 0){
	return $num1 / $num2;
}else{
	return "Divisão por zero não é possível !! ";	
	}	
}

$num1 = 10;
$num2 = 12;

echo "<h1> Operações Matemáticas</h1>";
echo "<h3> Números Digitados: </h3>";
echo "<h4>Número 1: ". $num1 . "</h4>";
echo "<h4>Número 2: " . $num2 . "</h4>";

echo "<h2>Resultados: </h2>";
echo "<h4>Resultado da Soma é :". Adicao($num1, $num2) . "</h4>";
echo "<h4>Resultado da Subtração é : " . Subtracao($num1, $num2) . "</h4>";
echo "<h4>Resultado da Multiplicação é : ". Multiplicao($num1, $num2) . "</h4>";
echo "<h4>Resultado da Divisão é : " . Divisao($num1, $num2) . "</h4>";

?>
<<<<<<< HEAD
=======

<?php 


 ?>
>>>>>>> 6b2771d7cdcb7c0aadfa59faa8f6fba59171e69e
