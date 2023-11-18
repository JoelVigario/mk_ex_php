<?php 
    session_start();
    if (isset($_SESSION['sal'])) {
        $salB = $_SESSION['salB'];
        $sal  = $_SESSION['sal'];
        unset($_SESSION['sal']);
        unset($_SESSION['salB']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto salarial</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Desconto salarial</h1>

        <form action="controle.php" method="post">
            <label for="sal">Digite o seu salário:</label>
            <input type="number" name="sal" id="sal" required step=".01" value="<?= $salB?>">
            <input type="submit" value="Calcular">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php 
                    if (!empty($sal)) {
                        $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
                        $salF = NUMFMT_FORMAT_CURRENCY($padrao, $sal, "AOA");
                        echo "Descontando os 10% da providência social e 5% de imposto, seu salário líquido será de <strong>$salF</strong>";
                    }
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>