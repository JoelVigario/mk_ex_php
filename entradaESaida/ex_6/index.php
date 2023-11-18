<?php 
    session_start();
    
    if (isset($_SESSION['data_nasc'])) {
        $data_nasc = $_SESSION['data_nasc'];
        $tot_dias = $_SESSION['tot_dias'];
        unset($_SESSION['data_nasc']);
        unset($_SESSION['tot_dias']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias de vida</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <main class="corpo">
        <h1>Seus dias de vida</h1>
        
        <form action="controle.php" method="post">
            <label for="data_nasc">Quando você nasceu?</label>
            <input type="date" name="data_nasc" id="data_nasc" required max="<?= date('Y-m-d')?>" value="<?= $data_nasc?>">
            <input type="submit" value="Calcular">
        </form>


        <article class="resultado">
            <h1>Resultado</h1>
            <?= 
                "Você tem exatamente <strong>$tot_dias</strong> dias de vida!"
            ?>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>