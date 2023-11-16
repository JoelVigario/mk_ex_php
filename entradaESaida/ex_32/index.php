<?php 
    session_start();
    if (isset($_SESSION['volume'])) {
        $comp = $_SESSION['comp'];
        $larg = $_SESSION['larg'];
        $alt = $_SESSION['alt'];
        $volume = $_SESSION['volume'];
        unset($_SESSION['volume']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo do Volume</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Calculo do Volume</h1>

        <form action="Calculador.php" method="post">
            <label for="comp">Digite o comprimento da caixa:</label>
            <input type="number" name="comp" id="comp" required step=".01" value="<?= $comp?>">
            <label for="larg">Digite a largura:</label>
            <input type="number" name="larg" id="larg" required step=".01" value="<?= $larg?>">
            <label for="alt">Digite a altura:</label>
            <input type="text" name="alt" id="alt" required step=".01" value="<?= $alt?>">
            <input type="submit" value="Calcular">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?= 
                    "O volume da caixa é de <strong>$volume</strong> l"
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>