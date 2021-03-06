<?php require_once "includes/cabecalho.php"; 
require_once "includes/conecta.php";
require_once "includes/funcoes-usuarios.php";
require_once "includes/funcoes-sessao.php";

if (isset($_POST['submit'])) {
    
   /*  print_r('Nome:' .$_POST['nome']);
    print_r('<br>');
    print_r('Email: :' .$_POST['email']);
    print_r('<br>');
    print_r('Senha :' .$_POST['senha']); */


$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);

$senha = codificaSenha($_POST['senha']);

$tipo = filter_input(INPUT_POST,'tipo', FILTER_SANITIZE_SPECIAL_CHARS);

inserirUsuario($conexao, $nome, $email, $senha, $tipo);

header("location:login.php?conta_criada");
}
?>

<body class="cor" >
    
    <div class="img">
    <img src="imagens/logo_size-removebg-preview.png" alt="">
    </div>

    <div class="box centralizar shadow-lg p-3 mb-5 bg-white rounded" >
        <form action="criar-conta.php" method="POST">
            <fieldset>
                <legend><b>Crie sua conta</b></legend>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>                    
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="email" class="labelInput">Senha</label>      

                </div>
                <br><br>
                <div class="inputBox">
                
              
                 <label for="tipo">Tipo: </label> 
                <select class="custom-select" name="tipo"  id="tipo" required>

                    <option value="editor" selected>Editor</option>

                </select>
                
                </div>
                <br><br>
               
                
                
                <input type="submit" name="submit" value="Criar" id="submit">
            </fieldset>
        </form>

    </div>     


    <script src="js/main.js"></script>

    
</body>


</html>