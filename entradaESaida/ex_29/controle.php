<?php 

session_start();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $_SESSION['tempo'] = filter_input(INPUT_POST, 'tempo');
    $_SESSION['vel']   = filter_input(INPUT_POST, 'vel');
    $_SESSION['distancia'] = $_SESSION['tempo'] * $_SESSION['vel'];
    $_SESSION['litros_usados'] = $_SESSION['distancia'] / 12;
    header('Location: index.php');
}