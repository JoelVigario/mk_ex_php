<?php 
    session_start();
    if (isset($_SESSION['clima'])) {
        $temp = $_SESSION['temp'];
        $clima = $_SESSION['clima'];
        unset($_SESSION['temp']);
        unset($_SESSION['clima']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clima &#x1F324;</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Clima &#x1F324;</h1>

        <form action="controle.php" method="post">
            <label for="temp">Digite a temperatura (ºC):</label>
            <input type="number" id="temp" name="temp" required value="<?= $temp?>">
            <input type="submit" value="Verificar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php
                    if (!empty($clima)) {
                        echo "O clima está $clima";
                    }
                ?>
            </p>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>