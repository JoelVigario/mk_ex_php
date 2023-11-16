<?php session_start();
    if (isset($_SESSION['segundos'])) {
        $h = $_SESSION['hora']; 
        $s = $_SESSION['segundos'];
        unset($_SESSION['segundos']);
        unset($_SESSION['hora']);
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Conversor de Horas</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>        
        <main class="corpo">
            <h1>Conversor de Horas</h1>
            
            <form action="conversor.php" method="post">
                <label for="h">Digite o tempo em horas:</label>
                <input type="number" id="h" name="h" required value="<?= $h?>">
                <input type="submit" value="Converter">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        if (!empty($s)) {
                            echo "$h hora(s) corresponde a $s segundo(s)";
                        }
                        
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


