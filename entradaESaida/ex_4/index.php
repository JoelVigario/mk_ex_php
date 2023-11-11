<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <?php 
        $_val = $_POST['$_val'];
    ?>

    <main class="corpo">
        <h1>Encontre o antecessor</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="$_val">Digite um Número:</label>
            <input type="number" name="$_val" id="$_val" required step="1" value="<?= $_val?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <article class="resultado">
        <?php 
            if (!empty($_val)) {
                printf("<p class='res'>O Antecessor de $_val é <span class='amrl'>%d</span></p>", --$_val);
            }
        ?>
    </article>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>