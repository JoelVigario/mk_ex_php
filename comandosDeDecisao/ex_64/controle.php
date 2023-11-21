<?php

session_start();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
   $_SESSION['data'] = filter_input(INPUT_POST, 'data');
   
   if (empty($_SESSION['data'][9]) && $_SESSION['data'][9] != 0) {
       $_SESSION['res'] = "ERRO: Digitos insuficientes";
   } elseif($_SESSION['data'][2] == '/' && $_SESSION['data'][5] == '/') {
       $dia = substr($_SESSION['data'], 0, 2);
       $mes = substr($_SESSION['data'], 3, 2);
       $ano = substr($_SESSION['data'], 6, 4);
       if (is_numeric($dia) && is_numeric($mes) && is_numeric($ano)) {
        $_SESSION['res'] = "A data " . $_SESSION['data'] . " foi inserida com sucesso!";
       }
   } else {
       $_SESSION['res'] = "O caractere '/' está mau posicionado ou não existe!";
   }
  
    header('Location: index.php');
    exit();
}