<?php 
require_once "includes/conecta.php"; 

 function inserirAgendamentos(mysqli $conexao, string $estados, string $quadras, string $data, string $hora ){
$sql = "INSERT INTO agendamentos(estados, quadras, data, hora)
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


// fim atualizarUsuario