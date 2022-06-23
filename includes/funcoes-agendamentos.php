<?php 
require_once "includes/conecta.php"; 

 function inserirAgendamentos(mysqli $conexao, string $estados, string $quadras, string $data, string $hora ){
$sql = "INSERT INTO agendamentos(nome, estados, quadras, data, hora)
            VALUES ('$estados', '$quadras', '$data', '$hora' )";

            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            }


function lerUmAgendamento(mysqli $conexao, int $id):array{
    $sql = "SELECT id, nome, estados, quadras, data, hora FROM agendamentos
    WHERE id = $id";
    
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado);

}

// Função atualizarUsuario: usada em usuario-atualiza.php

function atualizarAgendamento(mysqli $conexao, int $id, string $nome, string $email, string $senha, string $tipo) {
    $sql = "UPDATE usuarios SET nome = '$nome', email ='$email', senha = '$senha',tipo = '$tipo' WHERE id = $id";
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
// fim atualizarUsuario