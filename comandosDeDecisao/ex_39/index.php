<?php 
    session_start();
    if (isset($_SESSION['num'])) {
        $num = $_SESSION['num'];
        $res = $_SESSION['res'];
        unset($_SESSION['num']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Zero</h1>

        <form action="controle.php" method="post">
            <label for="num">Digite um número:</label>
            <input type="number" name="num" id="num" required value="<?= $num?>">
            <input type="submit" value="Enviar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php 
                    if (!empty($res)) {
                        echo "O número é: <strong>$res</strong>";
                    }
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>