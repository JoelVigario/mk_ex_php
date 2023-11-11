<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Reajuste salárial</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
             $_sl = $_POST['sl'];
             $padrao = numfmt_create("pt-PT", NumberFormatter::CURRENCY);
        ?>
        
        <main class="corpo">
            <h1>Reajuste Salárial</h1>
            
            <form action="index.php" method="post">
                <label for="sl">Digite o seu salário:</label>
                <input type="number" id="sl" name="sl" step=".01" required value="<?= $_sl?>">
                <input type="submit" value="Reajustar">
            </form>
            
            <article class="resultado">
                <p>
                    <?php 
                        if (!empty($_sl)) {
                            $aumento = numfmt_format_currency( $padrao, ( $_sl + ($_sl * 7) / 100 ), 'AOA' );
                            $desconto = numfmt_format_currency($padrao, ( $_sl - ($_sl * 7) / 100 ), 'AOA' );
                            echo "Com 5% de <em>aumento</em> o seu salário será <strong>$aumento</strong> <br>Com 5% de <em>desconto</em> o seu salário será <strong>$desconto</strong>";
                        }
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


