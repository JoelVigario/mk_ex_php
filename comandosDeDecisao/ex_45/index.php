<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $gen = $_SESSION['gen'];
        $res = $_SESSION['res'];
        unset($_SESSION['gen']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senhor(a)</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Senhor(a)</h1>

        <form action="controle.php" method="post">
            <label for="gen">Informe o seu gênero (M/F):</label>
            <input type="text" id="gen" name="gen" required pattern="[MF]{1}" maxlength="1" value="<?= $gen?>">
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