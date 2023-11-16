<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Suas frases</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
             $texto = $_POST['frase'];
        ?>
        
        <main class="corpo">
            <h1>Suas frases</h1>
            
            <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
                <label for="frase">Digite uma frase:</label>
                <textarea id="frase" name="frase" rows="5" cols="10" style="width: 100%; font-family: Arial, sans-serif; text-align: center; padding: 10px;" ></textarea>
                <input type="submit" value="Ver">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        echo "$texto";
                    ?>
                </p>
            </article>
        </main>
        
    </body>
</html>


