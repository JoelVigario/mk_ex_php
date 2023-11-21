<?php 
    session_start();
    require_once './controle.php';
    
    if (isset($_SESSION['res'])) {
        $opcao = $_SESSION['opcao'];
        $res = $_SESSION['res'];
        unset($_SESSION['opcao']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu vertical</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
    <style>
        h2, p {
            text-align: left;
        }
        
        .btn {text-align: center}
    </style>
</head>
<body>
    <main class="corpo">
        <h1>Menu vertical</h1>

        <article class="resultado">
            <h2>Menu</h2>
            
            <p>
                <?php
                    echo $_SESSION['menu'];
                    echo "<br><br>$res";
                ?>
            </p>
                        
            <form action="controle.php" method="post">
                
            <label for="opcao">Escolha a opção:</label>
            <input type="number" id="opcao" name="opcao" required value="<?= $opcao?>">
            <input type="submit" value="Enviar">
            
            </form>
        </article>
    </main>
    
</body>
</html>