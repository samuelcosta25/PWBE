 <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        include "script.php";
        
        if ($num1 > $num2) {
            $maior = $num1;
            $menor = $num2;
        } else {
            $maior = $num2;
            $menor = $num1;
        }

        echo "<h2>O resultado da divisão é: " . divisao($maior, $menor) . "</h2>";
    ?>