<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $sal = $_SESSION['sal'];
        $res = $_SESSION['res'];
        unset($_SESSION['sal']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxa</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Taxa</h1>

        <form action="controle.php" method="post">
            <label for="sal">Digite o salário:</label>
            <input type="number" id="sal" name="sal" step=".01" required value="<?= $sal?>">
            <input type="submit" value="Verificar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php
                    if (!empty($res)) {
                        echo "<strong>Salário Bruto:</strong> " . number_format($sal, 2, ',', '.') .
                            "<br><strong>Imposto a pagar:</strong> " . $res['imp'] .
                            "<br><strong>Salário Líquido:</strong> " . number_format($res['liq'], 2, ',', '.');
                    }
                ?>
            </p>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>