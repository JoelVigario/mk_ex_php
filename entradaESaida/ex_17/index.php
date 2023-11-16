<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>One char</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
              $char = filter_input(INPUT_POST, 'char')
        ?>
        
        <main class="corpo">
            <h1>One char</h1>
            
            <form action="index.php" method="post">
                <label for="char">Digite um caractere:</label>
                <input type="text" id="char" name="char" maxlength="1" required value="<?= $char?>">
                <input type="submit" value="Converter">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        echo "$char";
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


