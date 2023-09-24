 <?php
    
    $cobertura_por_litro = 3;
    $folga = 1.1;
    $preco_lata = 80;
    $preco_galao = 25;
    $litros_lata = 18;
    $litros_galao = 3.6;

    $litros_necessarios = $area / $cobertura_por_litro * $folga;
    $latas_necessarias = ceil($litros_necessarios / $litros_lata);
    $galoes_necessarios = ceil($litros_necessarios / $litros_galao);
    $preco_apenas_latas = $latas_necessarias * $preco_lata;
    $preco_apenas_galoes = $galoes_necessarios * $preco_galao;

    $melhor_preco = min($preco_apenas_latas, $preco_apenas_galoes);

    $latas_mistas = ceil($litros_necessarios / $litros_lata);
    $galoes_mistos = ceil(($litros_necessarios - ($latas_mistas - 1) * $litros_lata) / $litros_galao);
    $preco_misto = $latas_mistas * $preco_lata + $galoes_mistos * $preco_galao;

    echo "Para pintar " . $area . " metros quadrados, você precisará de:<br>";
    echo "Latas de 18 litros: " . $latas_necessarias . " latas<br>";
    echo "Preço com apenas latas: R$ " . $preco_apenas_latas . "<br>";
    echo "Galões de 3,6 litros: " . $galoes_necessarios . " galões<br>";
    echo "Preço com apenas galões: R$ " . $preco_apenas_galoes . "<br>";
    echo "Latas e galões mistos: " . $latas_mistas . " latas e " . $galoes_mistos . " galões<br>";
    echo "Preço com mistura: R$ " . $preco_misto . "<br>";
    echo "O melhor preço é: R$ " . $melhor_preco;
    ?>