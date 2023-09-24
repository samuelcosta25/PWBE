<?php
    function calcularFatorial($numero) {
        if ($numero == 0 || $numero == 1) {
            return 1;
        } else {
            $resultado = 1;
            for ($i = $numero; $i > 1; $i--) {
                $resultado *= $i;
            }
            return $resultado;
        }
    }
?>
