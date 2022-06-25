<?php require "../includes/cabecalho-admin.php";
?> 
    

    <article class="jumbotron bg-white shadow">
      <h2 class="display-3">
      <?=$_SESSION['nome']?>
      </h2>
      <p class="lead">Você está na <b> sua página de usuário</b> do
      site Rent Sports <b>sua permissão é de</b> <span class="badge bg-secondary"><?=$_SESSION['tipo']?></span>.
      </p>
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-secondary" href="meu-perfil.php" >Meu perfil</a>

      <?php  if($_SESSION['tipo'] == 'editor'){?> 

        <a class="btn btn-secondary" href="../agendamento.php">Agendar</a>
       <?php } ?>
        <a class="btn btn-secondary" href="agendamentos.php">Ver agendamentos</a>

        <?php  if($_SESSION['tipo'] == 'editor'){?> 
        <a class="btn btn-secondary" href="https://t.me/rentsports" target="_blank">Comunidade</a>
        <?php } ?>
        
        <?php if($_SESSION['tipo'] == 'admin'){ 
          ?>

        <a class="btn btn-secondary" href="usuarios.php">Gerenciar Usuários</a>
          <?php } ?>
      </p>
    </article>
        
<?php require "../includes/rodape-admin.php" ?>


