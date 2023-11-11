<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Conversor de Moedas simples</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
            $usd = $_POST['usd'];
            $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
            $catação = 860;
        ?>
        
        <main class="corpo">
            <h1>Conversor de Moedas simples</h1>
            
            <form action="index.php" method="post">
                <label for="usd">Digite o valor em Dolares:</label>
                <input type="number" id="usd" name="usd" step=".01" required value="<?= $usd?>">
                <input type="submit" value="Calcular">
            </form>
            
            <article class="resultado">
                <p>
                    <?php 
                        printf("<strong>%s</strong> equivale a <strong>%s</strong>", 
                                numfmt_format_currency($padrao, $usd, "USD"), numfmt_format_currency($padrao, 860 * $usd, "AOA")
                        );
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


