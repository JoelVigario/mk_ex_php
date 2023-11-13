<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Dimensão circular</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
              $raio = $_POST['raio'];
        ?>
        
        <main class="corpo">
            <h1>Dimensão circular</h1>
            <p>Descubra o <em>perimetro</em> e a <em>área</em> de uma circunferência.</p>
            
            <form action="index.php" method="post" autocomplete="on">
                <label for="raio">Digite o raio da circunferência:</label>
                <input type="number" id="raio" name="raio" step=".01" required placeholder="Raio" min="0" value="<?= $raio?>">
                <input type="submit" value="Calcular">
            </form>
            
            <article class="resultado">
                <p>
                    <?php 
                        if (!empty($raio)) {
                            printf("O <strong>perimetro</strong> da circunferência é <strong>%.2f</strong><br>"
                                    . "A <strong>área</strong> da circunferência é <strong>%.2f</strong>", 
                                    (M_PI * 2 * $raio), M_PI * $raio ** 2);
                        }
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


