<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Número Real</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
            $num = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_FLOAT)
        ?>
        
        <main class="corpo">
            <h1>Número Real</h1>
            
            <form action="index.php" method="post">
                <label for="num">Digite um Número real:</label>
                <input type="number" id="num" name="num" step=".000000000001" required value="<?= $num?>">
                <input type="submit" value="Separar">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        printf("<strong>Parte inteira:</strong> %d<br>"
                            . "<strong>Parte fracionária:</strong> %s", floor($num), $num - floor($num))
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


