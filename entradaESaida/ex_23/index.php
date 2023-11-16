<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data formatada</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <?php 
        $data =  filter_input(INPUT_POST, 'data')
    ?>

    <main class="corpo">
        <h1>Data formatada</h1>
        
        <form action="<?= filter_input(INPUT_SERVER, 'PHP_SELF')?>" method="post">
            <label for="data">Introduza uma data:</label>
            <input type="date" name="data" id="data" required value="<?= $data?>">
            <input type="submit" value="Formatar">
        </form>
    </main>

    <article class="resultado">
        <?php 
            if (!empty($data)) {
                echo date('d/m/Y', strtotime($data));
            }
        ?>
    </article>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>