<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>O seu nome</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
            $nome = $_POST['nome'];
        ?>
        
        <main class="corpo">
            <h1>O seu Nome</h1>
            
            <form action="index.php" method="post">
                <label for="nome">Digite o seu primeiro nome:</label>
                <input type="text" id="nome" name="nome" required maxlength="16" value="<?= $nome?>">
                <input type="submit" value="Click aqui!">
            </form>
            
            <article class="resultado">
                <p>
                    <?php 
                        echo "Olá <strong>$nome</strong>, seja Bem-Vindo!";
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


