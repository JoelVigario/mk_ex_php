<?php 
    session_start();
    if (isset($_SESSION['data'])) {
        $data = $_SESSION['data'];
        $dataF  = $_SESSION['dataF'];
        unset($_SESSION['data']);
        unset($_SESSION['dataF']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date formater</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Date formater</h1>

        <form action="controle.php" method="post">
            <label for="data">Digite a data (DDMMAA):</label>
            <input type="text" name="data" id="data" required pattern="[0-9]{6}" value="<?= $data?>">
            <input type="submit" value="Formatar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php 
                    if (!empty($data)) {
                        echo "<strong>Data formatada:</strong> $dataF";
                    }
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>