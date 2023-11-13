<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Operações tradicionais</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
            $n1 = filter_input(INPUT_POST, 'n1', FILTER_VALIDATE_INT);
            $n2 = filter_input(INPUT_POST, 'n2', FILTER_VALIDATE_INT);
        ?>
        
        <main class="corpo">
            <h1>Operações tradicionais</h1>
            
            <form action="<?= filter_input(INPUT_SERVER, 'PHP_SELF')?>" method="post">
                <label for="n1">Digite o número 1:</label>
                <input type="number" id="n1" name="n1" step="1" required value="<?= $n1?>">
                <label for="n2">Digite o número 2:</label>
                <input type="number" id="n2" name="n2" step="1" required value="<?= $n2?>">
                <input type="submit" value="Calcular">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        if (!empty($n1) && !empty($n2)) {
                            printf("<strong>Soma:</strong> %d<br>"
                                    . "<strong>Diferença:</strong> %d<br>"
                                    . "<strong>Produto:</strong> %d<br>"
                                    . "<strong>Quoificiente:</strong> %d<br>", 
                                    $n1 + $n2, $n1 - $n2, $n1 * $n2, intdiv($n1, $n2));
                        }
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


