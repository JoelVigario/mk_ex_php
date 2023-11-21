<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $num  = $_SESSION['num'];
        $res = $_SESSION['res'];
        unset($_SESSION['res']);
        unset($_SESSION['num']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero ou não</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Zero ou não</h1>

        <form action="controle.php" method="post">
            <label for="num">Digite o número:</label>
            <input type="number" name="num" id="num" required step="1" value="<?= $num?>">
            <input type="submit" value="Verificar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php 
                    if (!empty($res)) {
                        echo "<strong>$res</strong>";
                    }
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>