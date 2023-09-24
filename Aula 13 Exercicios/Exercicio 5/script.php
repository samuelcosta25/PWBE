<?php
    function calcularConsumo($quilometragem, $consumo, $preco_litro) {
        $consumo_medio = $quilometragem / $consumo;
        $custo_por_km = $preco_litro * ($consumo_medio / $quilometragem);
        return array($consumo_medio, $custo_por_km);
    }
?>
