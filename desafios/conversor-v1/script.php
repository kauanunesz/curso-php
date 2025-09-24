<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor V1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas - v1</h1>
    </header>
    <section>
        <main>
            <?php 
                $cotacao = 5.28;
                $real = $_POST['din'];
                $dolar = ($real/ $cotacao);
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                // Biblioteca intl (internacionalization)
                echo "Você tem ". numfmt_format_currency($padrao, $real, "BRL").", e a conversão fica em ". numfmt_format_currency($padrao, $dolar, "USD");
            ?>
        </main>
    </section>
</body>
</html>