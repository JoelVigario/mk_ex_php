<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="../../estiloGeral/geral.css">
    <link rel="stylesheet" href="../../estiloGeral/form.css"/>
</head>
<body>
    <?php 
        $data = $_POST['data_nasc'];
        $data_nasc = strtotime($data);
        $ano_n = date('Y', $data_nasc);
        $mes_n = date('m', $data_nasc);
        $dia_n = date('d', $data_nasc);  
        
    ?>

    <main class="corpo">
        <h1>Seus dias de vida</h1>
        
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="data_nasc">Quando você nasceu?</label>
            <input type="date" name="data_nasc" id="data_nasc" required value="<?= $data?>">
            <input type="submit" value="Calcular">
        </form>


        <article class="resultado">
            <?php 
                if (!empty($data_nasc)) {
                    $cbissexto = function($ano) {
                        if ($ano % 400 == 0 || ($ano % 4 == 0 && $ano % 100 != 0)) {
                            return 366;
                        } else {
                            return 365;
                        }
                    };
                    
                    /**
                     * Recebe a diferença entre o total de dias do mês e o dia em pessoa nasceu
                     * cal_days_in_month: calcula o total de dias que tem no mês
                     * CAL_GREGORIAN: utiliza o calendário gregoriano, o mais utilizado
                     */

                    $totDias = cal_days_in_month(CAL_GREGORIAN, $mes_n, $ano_n) - $dia_n;
                    


                    /**
                     *  Caso a pesso não tenha nascido em dezembro esta função será
                     *  usada para calcular a soma dos dias 
                     *  de cada mês restante do ano de nascimento
                    */ 

                    $tdiasMeses = function (int $próximomês): int {
                        if ($próximomês == 12) {
                            return 31;
                        } else if ($próximomês >= 13) {
                            return 0;
                        } else {
                            return cal_days_in_month(CAL_GREGORIAN, $próximomês, $ano_n) + $tdiasMeses(++$próximomês);
                        }
                    };

                    echo  $totDias + $tdiasMeses($mes_n + 1);
                    $ndiasnomês = '';
                    // cal_days_in_month(CAL_GREGORIAN, mes, ano)
                }

                //echo $cbissexto($ano_n);
            ?>
        </article>
    </main>
    
    <script src="../../estiloGeral/script.js"></script>
</body>
</html>