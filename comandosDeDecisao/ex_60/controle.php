<?php
    session_start();
    
    $_SESSION['menu'] = "1 - Inserir<br>2 - Remover<br>3 - Consultar<br>4 - Gravar<br>5 - Sair";
    
    if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'POST') {
        $_SESSION['opcao'] = filter_input(INPUT_POST, 'opcao');
        
        switch ($_SESSION['opcao']) {
            case 1:
                $_SESSION['res'] = "Você escolheu Inserir";
                break;
            case 2:
                $_SESSION['res'] = "Você escolheu Remover";
                break;
            case 3:
                $_SESSION['res'] = "Você escolheu Consultar";
                break;
            case 4:
                $_SESSION['res'] = "Você escolheu Gravar";
                break;
            case 5: 
                $_SESSION['res'] = "Você escolheu sair";
                $_SESSION['menu'] = "Fim do Programa!<br><a href='../../' class='btn'>Voltar</a>";
                break;
            default:
                $_SESSION['res'] = "Opção inválida!";
        }
        
        header('Location: index.php');
        exit();
        
    }
    
   