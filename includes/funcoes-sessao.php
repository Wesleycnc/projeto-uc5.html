<?php

/* Verificar se não existe uma sessão em funcionamento */
if(!isset($_SESSION)){
    session_start();
}


function verificaAcesso() {
    /*Se não existe uma variável de sessão relacionada ao id do usuário logado */
    if(!isset($_SESSION['id'])) {
        /* Então significa que ele não está logado, portanto apague qualquer resquício de sessão
        e force o usuário a ir para o login */
        session_destroy();
        header("location:../login.php");
        die();
    }
}


/* Usado na página login.php */
function login (int $id, string $nome,string $email,string $tipo) {
    /* Váriáves de sessão ao logar */
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['tipo'] = $tipo;
}

/* Usado nas páginas administrativas quando clicamos em sair */
function logout () {
session_start();
session_destroy();
header("location:../login.php?logout");
die();
}

function verificaAcessoAdmin () {
    /* SE o usuário não for admin */
    if($_SESSION['tipo'] !='admin'){
    /* Redirecione para a página nao-autorizado */
    header("location:nao-autorizado.php");
    die(); //ou exit
    }
}