<?php
function encontrarPrimos() {
    $primos = [];

    for ($i = 2; $i <= 1000; $i++) {
        $ehPrimo = true;

        for ($j = 2; $j <= sqrt($i); $j++) {
            if ($i % $j == 0) {
                $ehPrimo = false;
                break;
            }
        }

        if ($ehPrimo) {
            $primos[] = $i;
        }
    }

    return $primos;
}
?>
