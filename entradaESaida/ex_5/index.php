<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <?php 
        $x = $_POST['n1'];
        $y = $_POST['n2'];
    ?>
    
    <main class="corpo">
        <h1>Multiplicação</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="n1">Multiplicando:</label>
            <input type="number" name="n1" id="n1" required step="1" value="<?= $x?>">
            <label for="n2">Multiplicador:</label>
            <input type="number" name="n2" id="n2" required step="1" value="<?= $y?>">
            <input type="submit" value="Multiplicar">
        </form>
    </main>

    <article class="resultado">
        <p class="res">
            <?php 
                if (!empty($x) || !empty($y)) {
                    echo "O produto entre $x e $y é " . $x * $y;
                }
            ?>
        </p>
    </article>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>