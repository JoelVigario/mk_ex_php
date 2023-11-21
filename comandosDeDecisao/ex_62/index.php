<?php 
    session_start();
    
    if (isset($_SESSION['ano'])) {
        $ano = $_SESSION['ano'];
        $res = $_SESSION['res'];
        unset($_SESSION['ano']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se é Bissexto</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <main class="corpo">
        <h1>Se é Bissexto</h1>
        
        <form action="controle.php" method="post">
            <label for="ano">Digite o ano:</label>
            <input type="text" name="ano" id="ano" required pattern="[0-9]{4}" value="<?= $ano?>">
            <input type="submit" value="Calcular">
        </form>


        <article class="resultado">
            <h2>Resultado</h2>
            <?php 
                if (!empty($res)) {
                    echo "O ano $ano <strong>$res</strong>";
                }
            ?>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>