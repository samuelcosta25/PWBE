
    <?php
        $numero = $_POST["numero"];
        
        include "script.php";
        
        echo "<h2>O fatorial de $numero é: " . calcularFatorial($numero) . "</h2>";
    ?>