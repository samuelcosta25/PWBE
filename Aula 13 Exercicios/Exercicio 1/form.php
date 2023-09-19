<?php 

include "script.php";

$tam=$_POST['tamanho'];

echo "Em latas de 18L serão utilizadas".lata18($tam)." latas, para pintar todo o espaço mencionado.";
echo "Em latas de 3.6L serão utilizadas".lata36($tam)." latas, para pintar todo o espaço mencionado.";
echo "Na mistura de latas e galões visando o menor custo, serão utilizadas".mistura($tam).", para pintar todo o espaço mencionado.";

?>