<?php 
    session_start();
    
    if (isset($_SESSION['res'])) {
        $mes = $_SESSION['mes'];
        $res = $_SESSION['res'];
        unset($_SESSION['mes']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias do mês</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <main class="corpo">
        <h1>Dias do mês</h1>
        
        <form action="controle.php" method="post">
            <label for="mes">Digite o mês:</label>
            <input type="month" name="mes" id="mes" required value="<?= $mes?>">
            <input type="submit" value="Calcular">
        </form>


        <article class="resultado">
            <h2>Resultado</h2>
            <?php 
                if (!empty($res)) {
                    echo "O mês inserido têm <strong>$res</strong> dias";
                }
            ?>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>