<?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        include "script.php";
        
        echo "<h2>O resultado da multiplicação é: " . multiplicacao($num1, $num2) . "</h2>";
?>
