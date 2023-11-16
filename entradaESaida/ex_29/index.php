<?php 
    session_start();
    
    if (isset($_SESSION['litros_usados'])) {
        $tempo = $_SESSION['tempo'];
        $vel = $_SESSION['vel'];
        $distancia = $_SESSION['distancia'];
        $litros_usados = number_format($_SESSION['litros_usados'], 2, ",", " ");
        unset($_SESSION['litros_usados']);
        unset($_SESSION['distancia']);
        unset($_SESSION['tempo']);
        unset($_SESSION['vel']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litros por viagem</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Litros por viagem</h1>

        <form action="controle.php" method="post">
            <label for="tempo">Quato tempo fará a viagem? (horas)</label>
            <input type="number" name="tempo" id="tempo" required value="<?= $tempo?>">
            <label for="vel">Qual é a velocidade média que será usada? (Km/h)</label>
            <input type="number" name="vel" id="vel" required value="<?= $vel?>">
            <input type="submit" value="Calcular">
        </form>

        <article class="resultado">
            <p>
                <?= "Velocidade média: $vel Km/h<br>Tempo gasto: $tempo h<br>Distância a percorrida: $distancia Km<br>Quatidade de litros a usar: $litros_usados l"?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>