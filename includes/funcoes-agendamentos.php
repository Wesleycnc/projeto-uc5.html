<?php 
require_once "conecta.php"; 

// Inserir dados no banco de dados
function inserirAgendamentos(mysqli $conexao, string $estados, string $quadras, string $data, string $hora, int $idUsuarioLogado ){
$sql = "INSERT INTO agendamentos(estados, quadras, data, hora, usuario_id)
            VALUES ('$estados', '$quadras', '$data', '$hora', '$idUsuarioLogado' )";

            mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            }

/* Usada em posts.php */
function lerAgendamentos(mysqli $conexao, int $idUsuarioLogado, string $tipoUsuarioLogado):array {
    // Se o tipo de usuário for admin
    if ($tipoUsuarioLogado == 'admin') {
        // Montamos um SQL que traga todos os posts (de qualquer um)
        $sql = "SELECT agendamentos.id, agendamentos.estados, agendamentos.quadras, agendamentos.data, agendamentos.hora, usuarios.nome AS autor FROM agendamentos INNER JOIN usuarios 
        ON agendamentos.usuario_id = usuarios.id ORDER BY data DESC";
    } else {
        // Senão, montamos um SQL que traga os posts apenas do editor
        $sql = "SELECT id, estados, quadras, data, hora FROM agendamentos WHERE usuario_id = $idUsuarioLogado ORDER BY data DESC"; 
    }

    $resultado = mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
    $agendamentos = [];
    while($agendamento = mysqli_fetch_assoc($resultado)){
        array_push($agendamentos, $agendamento);
    }
    return $agendamentos;
} // fim lerPosts


// formato da data
function formataData(string $data):string{ 
    return date("d/m/Y", strtotime($data));
} // fim formataData


//

/* Usada em post-exclui.php */
function excluirAgendamento(mysqli $conexao, int $idAgendamento, int $idUsuarioLogado, string $tipoUsuarioLogado ){    
    if ($tipoUsuarioLogado == 'admin') {
        $sql = "DELETE FROM agendamentos WHERE id = $idAgendamento";
    }else {
        $sql = "DELETE FROM agendamentos WHERE id = $idAgendamento AND usuario_id = $idUsuarioLogado";
    }
    


	mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
} // fim excluirPost


