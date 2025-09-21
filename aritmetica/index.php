<?php 
    echo abs(200.50)."<br>";
    // Retorna valor absoluto
    $num = base_convert(18, 10, 2);
    echo($num)."<br>";
        // Converta o número tal (1º), que está na base (2), para a base (3º)
    $break = 2.5;
    echo ceil($break)."<br>";
    echo floor($break)."<br>";
    echo round($break)."<br>";

    print"<h1>Diferença entre divisões</h1>";
    print(5/2)." -> Divisão real"."<br>";
    print(5%2)." -> Módulo (resto)"."<br>";
    print(intdiv(5, 2))." -> Divisão inteira"."<br>";

    echo "<h1>Calcular Radiano para Graus (e vice-versa)</h1>";
    $graus = 90;
    $rad = 2*pi();

    echo "A resposta é ". rad2deg($rad)."<br>";
    echo "A resposta é ". number_format(deg2rad($graus), 2, ",")."<br>";
?>