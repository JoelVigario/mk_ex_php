<?php

session_start();
require_once './Conversor.php';

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $_SESSION['k_h'] = filter_input(INPUT_POST, 'vel', FILTER_VALIDATE_FLOAT);
    $conv = new Conversor($_SESSION['k_h']);
    $_SESSION['m_s'] = $conv->converta();
    header('Location: index.php');
    exit();
}
