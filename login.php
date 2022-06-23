<?php 
require_once "includes/cabecalho.php";
require_once "includes/funcoes-sessao.php";
require_once "includes/funcoes-usuarios.php";


if( isset($_GET['acesso_proibido']) ){
  $feedback = "Você deve logar primeiro!";
} elseif( isset($_GET['logout']) ) {
  $feedback = "Você saiu do sistema!";
} elseif( isset($_GET['nao_encontrado']) ) {
  $feedback = "Usuário não encontrado!";
} elseif( isset($_GET['senha_incorreta']) ) {
  $feedback = "A senha está errada!";          
} elseif( isset($_GET['campos_obrigatorios']) ) {
  $feedback = "Você deve preencher todos os campos!";
} else {
  $feedback = "";
}

if (isset($_POST['entrar'])) {
 
  if (empty($_POST['email']) || empty($_POST['senha']) ) {
    header("location:login.php?campos_obrigatorios");

  }else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    $usuario = buscarUsuario($conexao, $email);

    if($usuario != null){
      if(password_verify($senha, $usuario['senha'])){
        login(
          $usuario ['id'], $usuario['nome'],
          $usuario ['email'], $usuario['tipo']);
        header("location:admin/index.php");
        } else {
          header("location:login.php?senha_incorreta");
        }
        } else {
          header("location:login.php?nao_encontrado");
        }
    }
}
?>

<body>
    <div class="img">
    
    </div>
    <div class="centro shadow-lg p-3 mb-5 bg-white rounded">
        <h1>Login</h1>
        <!-- O atributo method define qual o método HTTP para enviar os dados -->
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="email" id="email" required>
                <span></span>
                <label>E-mail</label>
              </div>
              <div class="txt_field">
                <input type="password" name="senha" id="senha" required>
                <span></span>
                <label>Senha</label>
              </div>
              <input type="submit" name="entrar" value="Login">
              <div class="signup_link">
                  Não tem conta? <a href="criar-conta.php">Criar</a>
               
              </div>
      </form>
    </div>

    
    <script src="js/main.js"></script>

</body>
</html>

<?php require "includes/rodape.php" ?>