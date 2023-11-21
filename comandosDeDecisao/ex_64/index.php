<?php 
    session_start();
    
    if (isset($_SESSION['res'])) {
        $data = $_SESSION['data'];
        $res = $_SESSION['res'];
        unset($_SESSION['data']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data verificada</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <main class="corpo">
        <h1>Data verificada</h1>
        
        <form action="controle.php" method="post">
            <label for="data">Digite a data (dd/mm/aaaa):</label>
            <input type="text" name="data" id="data" required value="<?= $data?>">
            <input type="submit" value="Calcular">
        </form>


        <article class="resultado">
            <h2>Resultado</h2>
            <?php 
                if (!empty($res)) {
                    echo "<strong>$res</strong>";
                }
            ?>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>