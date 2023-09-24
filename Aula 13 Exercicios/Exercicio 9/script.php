<?php
    function encontrarNumerosPerfeitos() {
        $perfeitos = [];

        for ($i = 2; $i <= 1000; $i++) {
            $somaFatores = 1; // 1 sempre é um fator

            for ($j = 2; $j <= $i/2; $j++) {
                if ($i % $j == 0) {
                    $somaFatores += $j;
                }
            }

            if ($somaFatores == $i) {
                $perfeitos[] = $i;
            }
        }

        return $perfeitos;
    }
?>
