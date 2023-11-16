<?php

session_start();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
    $_SESSION['hora'] = filter_input(INPUT_POST, 'h', FILTER_VALIDATE_INT);
    $_SESSION['segundos'] = $_SESSION['hora'] * 60 ** 2;
    header('Location: index.php');
    exit();
}