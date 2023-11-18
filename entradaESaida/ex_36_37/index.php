<?php 
    session_start();
    if (isset($_SESSION['mat'])) {
        $mat = $_SESSION['mat'];
        $ano = $_SESSION['ano'];
        $sem = $_SESSION['semestre'];
        $ord= $_SESSION['ordem'];
        unset($_SESSION['mat']);
        
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Matricula</h1>

        <form action="controle.php" method="post">
            <label for="mat">Digite a Matricula (AASDDD):</label>
            <input type="text" name="mat" id="mat" required pattern="\d{2}[1-2]{1}[\da-z]{3}" value="<?= $mat?>">
            <input type="submit" value="Enviar">
        </form>

        <article class="resultado">
            <h2 style="text-align: left">Resultado</h2>
            <p style="text-align: left">
                <?php 
                    if (!empty($mat)) {
                        echo "<strong>Matricula:</strong> $mat<br>" .
                            "<strong>Ano:</strong> $ano<br>" .
                            "<strong>Semestre:</strong> $sem<br>" .
                            "<strong>Oredem:</strong> $ord<br>";
                    }
                ?>
            </p>
        </article>
    </main>

    <script src="../../estiloGeral/script.js"></script>
</body>
</html>