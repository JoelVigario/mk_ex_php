<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Idade</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php
            $data_nasc = $_POST['data_nasc'];
        ?>
        
        <main class="corpo">
            <h1>Idade</h1>
            
            <form action="index.php" method="post" autocomplete="on">
                <label for="data_nasc">Quando você nasceu?</label>
                <input type="date" id="data_nasc" name="data_nasc" required max="<?= date('Y-m-d')?>" value="<?= $data_nasc?>">
                <input type="submit" value="Enviar">
            </form>
            
            <article class="resultado">
                <p>
                    <?php 
                        if (!empty($data_nasc)) {
                            // calcula a quantidade de anos que já viveu
                            $idd = date('Y') - date('Y', strtotime($data_nasc));
                             
                            // verifica se a pessoa já completou o aniversário
                            if (date('m', strtotime($data_nasc)) > date('m')) {
                                $idd--;
                            } else if (date('m', strtotime($data_nasc)) == date('m')) {
                                if (date('d', strtotime($data_nasc)) > date('d')) {
                                    $idd--;
                                } 
                            }
                            
                            echo "Quem nasceu em " . date('d/M/Y', strtotime($data_nasc)) . ", está com <strong>$idd anos</strong> em " . date("d/M/Y");
                            
                        }
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


