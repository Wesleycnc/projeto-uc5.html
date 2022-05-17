<?php require "includes/cabecalho.php" ?>
<body class="cor">
    <div class="img">
    
    </div>
    <div class="centro">
        <h1>Login</h1>
        <!-- O atributo method define qual o método HTTP para enviar os dados -->
        <form method="publicar">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>E-mail</label>
              </div>
              <div class="txt_field">
                <input type="senha" required>
                <span></span>
                <label>Senha</label>
              </div>
              <div class="e-senha"><a href="recuperar-senha.php">Esqueceu a senha?</a></div>
              <input type="submit" value="Login">
              <div class="signup_link">
                  Não tem conta? <a href="criar-conta.php">Criar</a>
               
              </div>
      </form>
    </div>

    
    <script src="js/main.js"></script>

</body>
</html>