<?php
    function verificarTriangulo($lado1, $lado2, $lado3) {
        if (($lado1 < $lado2 + $lado3) && ($lado2 < $lado1 + $lado3) && ($lado3 < $lado1 + $lado2)) {
            return "Os valores representam os lados de um triângulo.";
        } else {
            return "Os valores não representam os lados de um triângulo.";
        }
    }
?>
