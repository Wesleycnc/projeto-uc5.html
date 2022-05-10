<?php
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

<link rel="stylesheet" href="projeto.css">
</head>
<body>
 
    <header id="header">
        <a id="logo" href="index-projeto-uc5.html"><img src="imagens/logo_size-removebg-preview (1).png" ></a>

        <nav id="nav">
            <button id="btn-mobile">Menu 
                <span id="hamburguer"></span>
            </button>
            <ul id="menu">
                <li><a href="index-projeto-uc5.php">Home</a></li>
                <li><a href="alugar.php">Alugar</a></li>
                <li><a href="">Campeonatos</a></li>
                <li><a href="">Comunidade</a></li>
                <li><a href="suporte.php">Suporte</a></li>
                <li><a href="login.php">Login</a></li>
               
                
            </ul>
        </nav>
    </header>

<main>