<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Operação binária</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
            $expressão = filter_input(INPUT_POST, 'exp')
        ?>
        
        <main class="corpo">
            <h1>Operação binária</h1>
            
            <form action="<?= filter_input(INPUT_SERVER, 'PHP_SELF')?>" method="post">
                <label for="exp">Digite a expressão (ex: a + b):</label>
                <input type="text" id="exp" name="exp" required pattern="[0-9] [\+\-\*\/\^\%] [0-9]" value="<?= $expressão?>">
                <input type="submit" value="Calcular">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        $exp = explode(" ", $expressão);
                        
                        switch ($exp[1]) {
                            case '+':
                                echo "$exp[0] + $exp[2] = " . $exp[0] + $exp[2];
                                break;
                            case '-':
                                echo "$exp[0] - $exp[2] = " . $exp[0] - $exp[2];
                                break;
                            case '*':
                                echo "$exp[0] * $exp[2] = " . $exp[0] * $exp[2];
                                break;
                            case '/':
                                if ($exp[2] != 0) {
                                    echo "$exp[0] / $exp[2] = " . $exp[0] / $exp[2];
                                } else {
                                    echo "Infinito";
                                }
                                break;
                            case '^':
                                echo "$exp[0] ^ $exp[2] = " . $exp[0] ^ $exp[2];
                                break;
                            case '%':
                                echo "$exp[0] % $exp[2] = " . $exp[0] % $exp[2];
                                break;
                            case '<':
                                echo "$exp[0] < $exp[2] = " . $exp[0] < $exp[2];
                                break;
                            default: 
                                echo "esxpressão inválida!";
                        }
                        
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


