<?php 

    session_start();
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['A'] = filter_input(INPUT_POST, 'A');
        $_SESSION['B'] = filter_input(INPUT_POST, 'B');
        $_SESSION['C'] = filter_input(INPUT_POST, 'C');
        $_SESSION['D'] = filter_input(INPUT_POST, 'D');
        $_SESSION['soma'] = ($_SESSION['A'] + $_SESSION['B']) + ($_SESSION['A'] + $_SESSION['C']) + ($_SESSION['A'] + $_SESSION['D']) + ($_SESSION['B'] + $_SESSION['C']) + ($_SESSION['B'] + $_SESSION['D']) + ($_SESSION['C'] + $_SESSION['D']);
        $_SESSION['produto'] = ($_SESSION['A'] * $_SESSION['B']) + ($_SESSION['A'] * $_SESSION['C']) + ($_SESSION['A'] * $_SESSION['D']) + ($_SESSION['B'] * $_SESSION['C']) + ($_SESSION['B'] * $_SESSION['D']) + ($_SESSION['C'] * $_SESSION['D']);
        header('Location: index.php');
        exit();
    }

?>