    <?php
        $quilometragem = $_POST["quilometragem"];
        $consumo = $_POST["consumo"];
        $preco_litro = $_POST["preco_litro"];
        
        include "script.php";
        
        list($consumo_medio, $custo_por_km) = calcularConsumo($quilometragem, $consumo, $preco_litro);

        echo "<h2>O consumo médio é de $consumo_medio km/l</h2>";
        echo "<h2>O custo por quilômetro é de R$ $custo_por_km</h2>";
    ?>