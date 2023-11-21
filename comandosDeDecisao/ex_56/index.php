<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $ec = $_SESSION['ec'];
        $res = $_SESSION['res'];
        unset($_SESSION['ec']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxa ao estado cívil</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Taxa ao estado cívil</h1>

        <form action="controle.php" method="post">
            <label for="cas">Casado</label>
            <input type="radio" id="cas" name="ec" required value="casado">
            <label for="solt">Solteiro</label>
            <input type="radio" id="solt" name="ec" required value="solteiro">
            <input type="submit" value="Verificar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php
                    echo empty($res) ? "Escolha um estado" : "Imposto a pagar: $res";
                ?>
            </p>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>