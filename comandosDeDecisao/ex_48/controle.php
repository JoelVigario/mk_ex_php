<?php
    session_start();
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        
        $x = filter_input(INPUT_POST, 'x');
        $y = filter_input(INPUT_POST, 'y');
        $z = filter_input(INPUT_POST, 'z');
        
        $condições[0] = $x + $y > $z;
        $condições[1] = $x + $z > $y;
        $condições[2] = $y + $z > $x;
        
        if ($condições[0] && $condições[1] && $condições[2]) {
            
            if ($x == $y && $x == $z && $y == $z) {
                $_SESSION['res'] = 'Os comprimentos inseridos formam um triângulo Equilátero';
            } elseif ($x == $y || $x == $z || $y == $z) {
                $_SESSION['res'] = 'Os comprimentos inseridos formam um triângulo Isósceles';
            } else {
                $_SESSION['res'] = 'Os comprimentos inseridos formam um triângulo Escaleno';
            }
            
        } else {
            $_SESSION['res'] = 'Os comprimentos inseridos não formam um triângulo';
        }
        
        $_SESSION['x'] = $x;
        $_SESSION['y'] = $y;
        $_SESSION['z'] = $z;
        
        header('Location: index.php');
        exit();
        
    }