<?php 

    session_start();

    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['n1'] = filter_input(INPUT_POST, 'n1');
        $_SESSION['n2'] = filter_input(INPUT_POST, 'n2');
        $_SESSION['res'] = "A soma entre os valores é " . $_SESSION['n1'] + $_SESSION['n2'] . "<br>" 
        . "O dobro de " . $_SESSION['n1'] . " é " . $_SESSION['n1'] * 2 . "<br>" 
        . "O dobro de " . $_SESSION['n2'] . " é " . $_SESSION['n2'] * 2;
        header("Location: index.php");
    }

?>