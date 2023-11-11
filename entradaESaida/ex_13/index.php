<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Coleta de dados</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
             $nome = $_POST['nome'];
             $endereço = $_POST['endereco'];
             $tel = $_POST['tel'];
        ?>
        
        <main class="corpo">
            <h1>Coleta de dados</h1>
            
            <form action="index.php" method="post" autocomplete="on">
                
                <input type="text" id="nome" name="nome" maxlength="50" required autocomplete="user-name" placeholder="Digite o seu nome" value="<?= $nome?>">
                <input type="text" id="endereco" name="endereco" required placeholder="Digite o seu endereço" value="<?= $endereço?>">
                <input type="tel" id="tel" name="tel" required pattern="9[0-9]{8}" placeholder="Digite o seu número" value="<?= $tel?>">
                <input type="submit" value="Enviar">
            </form>
            
            <article class="resultado" style="max-width: 700px">
                <p>
                    <?php 
                        echo "<strong>Nome:</strong> $nome, <strong>endereço:</strong> $endereço, <strong>telefone:</strong> $tel";
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


