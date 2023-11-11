<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Trocando valores</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
            $x = $_POST['x'];
            $y = $_POST['y'];
            
            $aux = $x;
            $x = $y;
            $y = $aux;
        ?>
        
        <main class="corpo">
            <h1>Trocando valores</h1>
            
            <form action="index.php" method="post">
                <label for="x">Valor de <strong>X</strong>:</label>
                <input type="number" id="x" name="x" step="1" required value="<?= $x?>">
                <label for="y">Valor de <strong>Y</strong>:</label>
                <input type="number" id="y" name="y" step="1" required value="<?= $y?>">
                <input type="submit" value="Trocar">
            </form>
            
            <article class="resultado">
                <p>
                    <?php 
                        echo "Valor de X: $x <br>Valor de Y: $y";
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


