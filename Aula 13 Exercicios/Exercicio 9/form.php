<?php
    include "script.php";
    $perfeitos = encontrarNumerosPerfeitos();
?>
<h2>Números Perfeitos até 1000:</h2>
<ul>
    <?php
        foreach ($perfeitos as $perfeito) {
            echo "<li>$perfeito</li>";
        }
    ?>
</ul>
