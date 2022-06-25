<?php 
require "../includes/cabecalho-admin.php"; 
require "../includes/funcoes-agendamentos.php";


/* verificaAcessoAdmin(); */

$idUsuarioLogado = $_SESSION['id'];
$tipoUsuarioLogado = $_SESSION['tipo'];
// echo $idUsuarioLogado;
// echo $tipoUsuarioLogado;

$agendamentos = lerAgendamentos($conexao, $idUsuarioLogado, $tipoUsuarioLogado);
/* echo "<pre>";
var_dump($agendamentos);
echo "</pre>";
die();
 */
$quantidade = count($agendamentos);

?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		agendamentos <span class="badge rounded-pill bg-primary"><?= $quantidade?></span>
		</h2>
				
		<div class="table-responsive">
		
			<table class="table table-hover">
				<thead class="thead-light">
					<tr>
					<?php if($tipoUsuarioLogado == 'admin'){ ?>
						<th>Cliente</th>
						<?php } ?>

						<th>Estados</th>
						<th>Quadras</th>
						<th>Data</th>
						<th>Tempo na quadra</th>
					</tr>
				</thead>

				<tbody>

<?php foreach( $agendamentos as $agendamento ) { ?>
					<tr>
						<?php if($tipoUsuarioLogado == 'admin'){ ?>
            			<td> <?=$agendamento['autor']?> </td>
            			<?php } ?>

						<td> <?=$agendamento['estados']?> </td>
						<td> <?=$agendamento['quadras']?> </td>

						<td> <?=formataData($agendamento['data'])?> </td>

						<td> <?=$agendamento['hora']?> </td>
						
						</td>
            			<td class="text-center">
              			<a class="btn btn-danger btn-sm excluir"
              			href="agendamento-exclui.php?id=<?=$agendamento['id']?>">
                  Cancelar
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