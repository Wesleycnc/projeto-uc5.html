<?php
require "../includes/funcoes-usuarios.php";
require "../includes/funcoes-sessao.php";
verificaAcesso();
verificaAcessoAdmin();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
excluirUsuario($conexao, $id);
header("location:usuarios.php");