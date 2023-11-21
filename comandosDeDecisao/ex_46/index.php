<?php 
    session_start();
    if (isset($_SESSION['res'])) {
        $ec = $_SESSION['ec'];
        $res = $_SESSION['res'];
        unset($_SESSION['ec']);
        unset($_SESSION['res']);
    }
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado Cívil</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css">
</head>
<body>
    <main class="corpo">
        <h1>Estado Cívil</h1>

        <form action="controle.php" method="post">
            <label for="ec">Informe o seu Estado Cívil:</label>
            <select id="ec" name="ec">
                <option value="S">Solteiro(a)</option>
                <option value="C">Casado(a)</option>
                <option value="U">União de Facto</option>
            </select>
            <input type="submit" value="Verificar">
        </form>

        <article class="resultado">
            <h2>Resultado</h2>
            <p>
                <?php
                    echo empty($res) ? "Escolha um Estado!" : "<strong>Estado Cívil:</strong> $res";
                ?>
            </p>
        </article>
    </main>

    
    
    <script>
        input = document.getElementsByTagName('select')[0];
        res = document.getElementsByClassName('resultado')[0];

        if (input.value == '' || input.value === null) {
            res.style.display = 'none';
        } else {
        res.style.display = 'block';
        res.innerHTML += '<a href="../../" class="btn">Voltar</a>';
}
    </script>
</body>
</html>