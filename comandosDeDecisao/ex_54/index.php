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
    <title>Imposto ao Gênero</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Imposto ao Gênero</h1>

        <form action="controle.php" method="post">
            <label>Informe o seu gênero:</label>
            <label for="M">Masculino</label>
            <input type="radio" id="M" name="gen" required value="M">
            <label for="F">Feminino</label>
            <input type="radio" id="F" name="gen" required value="F">
            <input type="submit" value="Verificar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php
                echo empty($gen) ? "Informe o seu gênero" : $res;
                ?>
            </p>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>