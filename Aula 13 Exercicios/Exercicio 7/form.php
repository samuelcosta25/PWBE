<?php
    $numero = $_POST["numero"];
    
    include "script.php";
    
    $nome_mes = converterNumeroParaMes($numero);

    if ($nome_mes !== false) {
        echo "<h2>O número $numero corresponde ao mês de $nome_mes</h2>";
    } else {
        echo "<h2>Não existe mês correspondente para o número $numero</h2>";
    }
?>
