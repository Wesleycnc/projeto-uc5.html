<?php
require_once "../includes/funcoes-sessao.php";
require_once "../includes/funcoes-agendamentos.php";

verificaAcesso();
/* verificaAcessoAdmin(); */

$idAgendamentos = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];

excluirAgendamento($conexao, $idAgendamentos, $idUsuarioLogado, $tipoUsuarioLogado);

header("location:agendamentos.php");

