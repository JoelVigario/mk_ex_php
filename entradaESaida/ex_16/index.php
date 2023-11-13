<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Conversor de toneladas</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
              $tn = filter_input(INPUT_POST, 'tn', FILTER_VALIDATE_FLOAT);
        ?>
        
        <main class="corpo">
            <h1>Conversor de toneladas</h1>
            
            <form action="index.php" method="post" autocomplete="on">
                <label for="tn">Digite o valor da massa em <strong>Toneladas</strong>:</label>
                <input type="number" id="tn" name="tn" step=".01" required  value="<?= $tn?>">
                <input type="submit" value="Converter">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        if (!empty($tn)) {
                            printf("$tn ton equivalem a <strong>%s</strong> Kg e a <strong>%s</strong> g", number_format($tn * 1000, 2, ',', ' '), number_format($tn * 1000000, 2, ',', ' '));
                        }
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


