<?php 
require "../includes/cabecalho-admin.php"; 
require "../includes/funcoes-agendamentos.php";


/* verificaAcessoAdmin(); */

$usuarios = lerAgendamentos($conexao);
$quantidade = count($agendamento);


?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Usuários <span class="badge rounded-pill bg-primary"><?= $quantidade?></span>
		</h2>

		<p class="lead text-right">
				<a class="btn btn-primary" href="usuario-insere.php">Inserir novo usuário</a>
		</p>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Tipo</th>
						<th colspan="2" class="text-center">Operações</th>
					</tr>
				</thead>

				<tbody>

<?php foreach( $agendamentos as $agendamento ) { ?>
					<tr>
						<td> <?=$agendamento['nome']?> </td>
						<td> <?=$agendamento['estados']?> </td>
						<td> <?=$agendamento['quadras']?> </td>
						<td> <?=$agendamento['data']?> </td>
						<td> <?=$agendamento['hora']?> </td>
						<td class="text-center">
							<a class="btn btn-success" 
							href="usuario-atualiza.php?id=<?=$agendamento['id']?>">
								Atualizar
							</a>
						</td>
						<td class="text-center">
							<a class="btn btn-danger btn-sm excluir" 
							href="usuario-exclui.php?id=<?=$agendamento['id']?>">
								Excluir
							</a>
						</td>
					</tr>
<?php } ?>
				</tbody>                
			</table>
	</div>
		
	</article>
</div>

<?php require "../includes/rodape-admin.php" ?>