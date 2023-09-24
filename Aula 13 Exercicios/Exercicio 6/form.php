
<?php
        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];
        
        include "script.php";
        
        $mensagem = verificarTriangulo($lado1, $lado2, $lado3);

        echo "<h2>$mensagem</h2>";
    ?>