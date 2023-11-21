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
    <title>Imposto a pagar</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Imposto a pagar</h1>

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
                        echo "<strong>Imposto a pagar:</strong> $res";
                    }
                ?>
            </p>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>