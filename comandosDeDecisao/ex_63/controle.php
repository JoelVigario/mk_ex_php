<?php

session_start();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
   $_SESSION['mes'] = filter_input(INPUT_POST, 'mes');
   $mes = date('m', strtotime($_SESSION['mes']));
   $ano = date('Y', strtotime($_SESSION['mes']));
   $_SESSION['res'] = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);
    
    
    header('Location: index.php');
    exit();
}