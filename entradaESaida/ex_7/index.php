<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Resto da divisão</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
        ?>
        
        <main class="corpo">
            <h1>Calcule o Resto da Divisão</h1>
            
            <form action="index.php" method="post">
                <label for="n1">Introduza o dividendo:</label>
                <input type="number" id="n1" name="n1" step="1" required value="<?= $n1?>">
                <label for="n2">Introduza o divisor:</label>
                <input type="number" id="n2" name="n2" step="1" required value="<?= $n2?>">
                <input type="submit" value="Calcular">
            </form>
            
            <article class="resultado">
                <p>
                    <?php 
                        if (!empty($n1)) {
                            printf("O resto da divisão de $n1 por $n2 é %d", $n1 % $n2);
                        }
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


