<?php 
    session_start(); 
    if (isset($_SESSION['m_s'])) {
        $vel = $_SESSION['k_h'];
        $m_s = $_SESSION['m_s'];
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Km/h para m/s</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Km/h para m/s</h1>

        <form action="controle.php" method="post">
            <label for="vel">Digite a velocidade do veiculo (Km/h):</label>
            <input type="number" id="vel" name="vel" required value="<?= $vel?>">  
            <input type="submit" value="Calcular">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?= 
                    "$vel km/h correspondem a <strong>$m_s</strong> m/s"
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>

