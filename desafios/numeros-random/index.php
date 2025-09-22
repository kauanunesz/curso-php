<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Random</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gerador de Números - 0 a 100</h1>
    </header>
    <section>
        <main>
            <?php 
            $num = rand(0, 100);
            print "Valor gerado: $num";
            ?>
        </main>
        <button onclick="location.reload()">Gerar Outro</button>
    </section>
</body>
</html>