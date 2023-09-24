<?php
include 'script.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];
    $cinco_porcento = calcularCincoPorcento($valor);
    $cinquenta_porcento = calcularCinquentaPorcento($valor);
    
    echo "5% do valor é: " . $cinco_porcento . "<br>";
    echo "50% do valor é: " . $cinquenta_porcento . "<br>";
}
?>