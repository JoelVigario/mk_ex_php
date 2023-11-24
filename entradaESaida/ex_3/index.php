<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <?php 
        $_val = $_POST['$_val'];
    ?>

    <main class="corpo">
        <h1>Encontre o sucessor</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="$_val">Digite um Número:</label>
            <input type="number" name="$_val" id="$_val" required step="1" value="<?= $_val?>">
            <input type="submit" value="Calcular">
        </form>

        <article class="resultado">
            <?php 
                if (!empty($_val)) {
                    printf("<p class='res'>O sucessor de $_val é %d</p>", ++$_val);
                }
            ?>
        </article>
    </main>
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>