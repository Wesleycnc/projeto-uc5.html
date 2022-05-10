<?php require "includes/cabecalho.php" ?>

<body class="cor" >
    
    <div class="img">
    <img src="imagens/logo_size-removebg-preview.png" alt="">
    </div>

    <div class="box centralizar" >
        <form action="">
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
                    <input type="password" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Senha</label>                    
                </div>

                <br><br>
                <div class="inputBox">
                    <input type="password" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Confirmar Senha</label>                    
                </div>
                
                <br><br>
               
                
                
                <input type="submit" value="Criar" id="submit">
            </fieldset>
        </form>

    </div>     


    <script src="js/main.js"></script>

    
</body>


</html>