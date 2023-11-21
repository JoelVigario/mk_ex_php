<?php 
    require_once './Controle.php';
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu...</title>
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
        <h1>Menu...</h1>

        <article class="resultado">
            <h2>Menu</h2>
            
            <p>
                <?php 
                    $menu = new Controle();
                    echo $menu->getMenu();
                ?>
            </p>
                        
        </article>
    </main>
    
</body>
</html>