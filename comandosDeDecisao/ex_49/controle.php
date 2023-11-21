<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        
        $_SESSION['num'] = filter_input(INPUT_POST, 'num');
        $_SESSION['res'] = $_SESSION['num'] % 5 === 0 ? 'É multiplo de 5' : 'Não é multiplo de 5';
        header('Location: index.php');
        exit();
        
    }