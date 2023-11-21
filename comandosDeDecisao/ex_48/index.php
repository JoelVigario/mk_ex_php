<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $x = $_SESSION['x'];
        $y = $_SESSION['y'];
        $z = $_SESSION['z'];
        $res = $_SESSION['res'];
        unset($_SESSION['x']);
        unset($_SESSION['y']);
        unset($_SESSION['z']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desigualdade triangular</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Desigualdade triangular</h1>

        <form action="controle.php" method="post">
            <label for="x">Digite o valor de x:</label>
            <input type="number" id="x" name="x" required value="<?= $x?>">
            <label for="x">Digite o valor de y:</label>
            <input type="number" id="y" name="y" required value="<?= $y?>">
            <label for="x">Digite o valor de z:</label>
            <input type="number" id="z" name="z" required value="<?= $z?>">
            <input type="submit" value="Verificar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php
                    if (!empty($res)) {
                        echo "$res";
                    }
                ?>
            </p>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>