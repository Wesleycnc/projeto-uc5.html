<?php require "includes/cabecalho.php"; 
require "includes/conecta.php";
require "includes/funcoes-usuarios.php";

if (!isset($_POST['submit'])) {
    
   /*  print_r('Nome:' .$_POST['nome']);
    print_r('<br>');
    print_r('Email: :' .$_POST['email']);
    print_r('<br>');
    print_r('Senha :' .$_POST['senha']); */


$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);

$senha = codificaSenha($_POST['senha']);

$tipo = filter_input(INPUT_POST,'tipo', FILTER_SANITIZE_SPECIAL_CHARS);



$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha, tipo) VALUES ('$nome', '$email', '$senha', '$tipo')");
header("location:admin/usuarios.php");
}
?>

<body class="cor" >
    
    <div class="img">
    <img src="imagens/logo_size-removebg-preview.png" alt="">
    </div>

    <div class="box centralizar" >
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
                    <option value=""></option>
                    <option value="editor">Editor</option>
                    <option value="admin">Administrador</option>

                </select>
                 
                </div>
                <br><br>
               
                
                
                <input type="submit" value="Criar" id="submit">
            </fieldset>
        </form>

    </div>     


    <script src="js/main.js"></script>

    
</body>


</html>