<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $ordenado = $_SESSION['ordenado'];
        $res = $_SESSION['res'];
        unset($_SESSION['ordenado']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento do ordenado</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Aumento do ordenado</h1>

        <form action="controle.php" method="post">
            <label for="ordenado">Digite o salário:</label>
            <input type="number" id="ordenado" name="ordenado" step=".01" required value="<?= $ordenado?>">
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