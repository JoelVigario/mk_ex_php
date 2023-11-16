<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $n1 = $_SESSION['n1'];
        $n2 = $_SESSION['n2'];
        $res = $_SESSION['res'];
        unset($_SESSION['n1']);
        unset($_SESSION['n2']);
        unset($_SESSION['res']);
    }
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma e dobro</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <main class="corpo">
        <h1>Soma e Dobro</h1>

        <form action="controle.php" method="post">
            <label for="n1">Digite o primeiro número:</label>
            <input type="number" name="n1" id="n1" required value="<?= $n1?>">
            <label for="n2">Digite o segundo número:</label>
            <input type="number" name="n2" id="n2" required value="<?= $n2?>">
            <input type="submit" value="Calcular">
        </form>

        <article class="resultado">
            <p>
                <?= $res?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>