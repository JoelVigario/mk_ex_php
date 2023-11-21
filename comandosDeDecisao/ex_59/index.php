<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $n1 = $_SESSION['n1'];
        $n2 = $_SESSION['n2'];
        $res = $_SESSION['res'];
        unset($_SESSION['n1']);
        unset($_SESSION['n2']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora textual</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Calculadora textual</h1>

        <form action="controle.php" method="post">
            <label for="n1">Digite o valor 1:</label>
            <input type="number" id="n1" name="n1" required value="<?= $n1?>">
            <label for="n2">Digite o valor 2:</label>
            <input type="number" id="n2" name="n2" required value="<?= $n2?>">
            <select id="operacao" name="operacao" required>
                <option value="1">Adição</option>
                <option value="2">Subtração</option>
                <option value="3">Multiplicação</option>
                <option value="4">Divisão</option>
            </select>

            <input type="submit" value="Enviar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php
                    if (!empty($res)) {
                        echo "<strong>Dia da semana:</strong> $res";
                    }
                ?>
            </p>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>