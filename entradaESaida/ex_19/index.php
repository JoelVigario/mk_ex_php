<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="conpatiple" content="IE-edge">
        <title>Clock</title>
        <link rel="stylesheet" href="../../estiloGeral/geral.css"/>
        <link rel="stylesheet" href="../../estiloGeral/form.css"/>
    </head>
    <body>
        <?php 
             $s = filter_input(INPUT_POST, 's', FILTER_VALIDATE_INT);
        ?>
        
        <main class="corpo">
            <h1>Clock</h1>
            
            <form action="<?= filter_input(INPUT_SERVER, 'PHP_SELF')?>" method="post">
                <label for="s">Digite o valor em segundos:</label>
                <input type="number" id="s" name="s" required value="<?= $s?>">
                 <input type="submit" value="Calcular">
            </form>
            
            <article class="resultado">
                <p>
                    <?php
                        if (!empty($s)) {
                            // convertendo o valor em hora
                            $hb    = $s * 60 ** -2; // converte os segundos para horas
                            $h     = floor($hb); // filtra a hora para não ter nenhuma dízima
                            $resto = $hb - $h; 
                            
                            $mb    = $resto * 60;
                            $m     = floor($mb);
                            $resto = $mb - $m;
                            
                            $ssb = $resto * 60;
                            $ss  = floor($ssb);
                            
                            echo "<strong>$s</strong>s corresponde a:<br>"
                                    . "<strong>$h</strong>h "
                                    . "<strong>$m</strong>min "
                                    . "<strong>$ss</strong>s";
                            
//                            $res = [];
//                            /**
//                             * 
//                             * @param float $valor
//                             * @param int $multOuSub <p>O multiplo ou submultiplo necessário para converter</p>
//                             */
//                            function converta($valor = 0, $multOuSub = 0) {
//                                $res['resultadoBruto'] = $valor * $multOuSub;
//                                $res['resultadoFiltrado']  = floor($res['resultadoBruto']);
//                                $res['resto'] = $res['resultadoBruto'] - $res['resultadoFiltrado'];
//                                return $res['resultadoFiltrado'];
//                            }
//                            
//                            
//                            $h  = converta($s, 60 ** -2);
//                            $m  = converta($res['resto'], 60);
//                            $ss = converta($res['resto'], 60);
                            
                        }
                    ?>
                </p>
            </article>
        </main>
        
        <script src="../../estiloGeral/script.js"></script>
    </body>
</html>


