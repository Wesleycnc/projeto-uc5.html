<?php
require "funcoes-sessao.php";
verificaAcesso();

if (isset($_GET['sair'])) {
    logout();
}


$pagina = basename ($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bot css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bot js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Cabeçalho-Admin</title>

     <link rel="stylesheet" href="../css/projeto.css">
</head>
<body>

<header id="header">
        <a id="logo" href="../index-projeto-uc5.php"><img src="../imagens/logo_size-removebg-preview (1).png" ></a>

        <nav id="nav">
            <button id="btn-mobile">Menu 
                <span id="hamburguer"></span>
            </button>
            <ul id="menu">
               
                <li><a href="../index-projeto-uc5.php">Pagina incial</a></li>
                <?php 
                    if($_SESSION['tipo'] == 'admin'){                    
                ?>           
              <li><a href="../admin/usuarios.php">Usuários</a></li>
            <?php } ?>

            <?php if($_SESSION['tipo'] == 'editor'){  ?> 
                <li><a href="../agendamento.php">Alugar</a></li>    
            <?php } ?>    
                <li><a href="../admin/index.php">Área exclusiva de <b><?=$_SESSION['nome']?></b></a></li>    
               <li class="nav-item"><a href="?sair">&times; Sair</a></li>
                
            </ul>
        </nav>
    </header>
<main class="container-sm">
