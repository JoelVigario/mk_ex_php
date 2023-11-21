<?php 
    session_start();
    if (isset($_SESSION['n1'])) {
        $n1  = $_SESSION['n1'];
        $n2  = $_SESSION['n2'];
        unset($_SESSION['n1']);
        unset($_SESSION['n2']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Ordem Crescente</h1>

        <form action="controle.php" method="post">
            <label for="n1">Digite um número 1:</label>
            <input type="number" name="n1" id="n1" required value="<?= $n1?>">
            <label for="n2">Digite um número 2:</label>
            <input type="number" name="n2" id="n2" required value="<?= $n2?>">
            <input type="submit" value="Ordenar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php 
                    if (!empty($n1) && !empty($n1)) {
                        echo "<strong>{ $n1, $n2 }</strong>";
                    }
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>