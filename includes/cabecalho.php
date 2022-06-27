<?php
require_once "includes/funcoes-sessao.php";
/* 
Parte)1 Identificar o arquivo aberto
$_SERVER["PHP-SELF"] -> traz os dados completos do endereço basenname($_SERVER['SELF']) -> extrai apenas o nome.extensão*/
$pagina = basename ($_SERVER['PHP_SELF']);

/* Parte:2 Condicional para avaliar qual página está aberta e definir qual titulo usar */
    switch($pagina){
        case 'index.php': $titulo = "Página Inicial"; break;
        case 'alugar.php': $titulo = "Alugar"; break;
        case 'campeonato.php': $titulo = "Campeonatos"; break;
        case 'comunidade.php': $titulo = "Comunidade"; break;
        case 'suporte.php': $titulo = "Suporte"; break;
        default: $titulo = "Login"; break; 
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - UC5</title>
    
    <!-- Bot css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bot js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/projeto.css">
<link rel="stylesheet" href="css/login.css">

</head>
<body>
 
    <header id="header">
        <a id="logo" href="index.php"><img src="imagens/logo_size-removebg-preview (1).png" ></a>

        <nav id="nav">
            <button id="btn-mobile">Menu 
                <span id="hamburguer"></span>
            </button>
            <ul id="menu">
           
                <li><a href="index.php">Página Inicial</a></li>

                
                <?php if(!isset($_SESSION['id'])){ ?>
                
                 <li><a href="login.php">Login</a></li>
               <?php } ?>
                <?php if(isset($_SESSION['id'])){ ?>
                 
                <li><a href="admin/index.php">Área exclusiva de <b><?=$_SESSION['nome']?></b></a></li>    

               <?php } ?>
               

            </ul>
        </nav>
    </header>

<main>