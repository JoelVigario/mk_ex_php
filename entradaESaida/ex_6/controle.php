<?php

session_start();
require_once './Contador.php';

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $_SESSION['data_nasc'] = filter_input(INPUT_POST, 'data_nasc');
    
    $contador = new Contador($_SESSION['data_nasc']);
    $_SESSION['tot_dias'] = number_format($contador->getTotDias(), 0, ',', ' ');
    
    header('Location: index.php');
    exit();
}