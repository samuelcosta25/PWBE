  <?php
            include "script.php";
            $primos = encontrarPrimos();
            foreach ($primos as $primo) {
                echo "<li>$primo</li>";
            }
        ?>