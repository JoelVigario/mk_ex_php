<?php 
    session_start();
    if (isset($_SESSION['v1']) && isset($_SESSION['v2'])) {
        $v1 = $_SESSION['v1'];
        $v2 = $_SESSION['v2'];
        unset($_SESSION['v1']);
        unset($_SESSION['v2']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trocador de valores</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Trocador de valores</h1>

        <form action="Trocador.php" method="post">
            <label for="v1">Digite o valor 1:</label>
            <input type="text" name="v1" id="v1" required value="<?= $v1?>">
            <label for="v2">Digite o valor 2:</label>
            <input type="text" name="v2" id="v2" required value="<?= $v2?>">
            <input type="submit" value="Trocar">
        </form>

        <article class="resultado">
            <p>
                <?= 
                    "O valor 1 é <strong>$v1</strong> e o valor 2 é <strong>$v2</strong>"
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>