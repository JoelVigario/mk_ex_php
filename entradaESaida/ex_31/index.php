<?php 
    session_start();
    if (isset($_SESSION['soma']) && isset($_SESSION['produto'])) {
        $A = $_SESSION['A'];
        $B = $_SESSION['B'];
        $C = $_SESSION['C'];
        $D = $_SESSION['D'];
        $soma = $_SESSION['soma'];
        $produto = $_SESSION['produto'];
        unset($_SESSION['A']);
        unset($_SESSION['B']);
        unset($_SESSION['C']);
        unset($_SESSION['D']);
        unset($_SESSION['soma']);
        unset($_SESSION['produto']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propriedade distribuitiva</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Propriedade distribuitiva</h1>

        <form action="Calculador.php" method="post">
            <label for="A">Digite o valor de A:</label>
            <input type="text" name="A" id="A" required value="<?= $A?>">
            <label for="B">Digite o valor de B:</label>
            <input type="text" name="B" id="B" required value="<?= $B?>">
            <label for="C">Digite o valor de C:</label>
            <input type="text" name="C" id="C" required value="<?= $C?>">
            <label for="D">Digite o valor de D:</label>
            <input type="text" name="D" id="D" required value="<?= $D?>">
            <input type="submit" value="Calcular">
        </form>

        <article class="resultado">
            <p>
                <?= 
                    "A soma é <strong>$soma</strong> e o produto é <strong>$produto</strong>"
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>