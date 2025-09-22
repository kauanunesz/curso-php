<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Resultado</h1>
    <main>
        <?php 
            $num = $_POST['numero'];
            $ant = $num - 1;
            $suc = $num + 1;
            echo "Número: $num <br> Antecessor: $ant<br>Sucessor: $suc";
        ?>
    </main>
    <button onclick="location.href='index.html'">Voltar</button>
</body>
</html>