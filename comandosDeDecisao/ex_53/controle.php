<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['sal'] = filter_input(INPUT_POST, 'sal');
        $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);
        if ($_SESSION['sal'] < 100000) {
            $_SESSION['res'] = numfmt_format_currency($padrao, $_SESSION['sal'] + 1000, "AOA");
        } else {
            $_SESSION['res'] = numfmt_format_currency($padrao, $_SESSION['sal'], "AOA");
        }
        header('Location: index.php');
        exit();
        
    }