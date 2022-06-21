<?php require "../includes/cabecalho-admin.php"; ?> 
    

    <article class="jumbotron bg-white shadow">
      <h2 class="display-4">
      <?=$_SESSION['nome']?>
      </h2>
      <p class="lead">Você está na <b> sua pagina de usuário</b> do
      site Rent Sports <b>Sua permissão é de</b> <span class="badge bg-secondary"><?=$_SESSION['tipo']?></span>.
      </p>
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-primary" href="meu-perfil.php" >Meu perfil</a>
        <a class="btn btn-primary" href="posts.php">Gerenciar Posts</a>
        <?php if($_SESSION['tipo'] == 'admin'){ ?>
        <a class="btn btn-primary" href="usuarios.php">Gerenciar Usuários</a>
          <?php } ?>
      </p>
    </article>
        
<?php require "../includes/rodape-admin.php" ?>


