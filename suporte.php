<?php require_once "includes/cabecalho.php" ?>
<body >
    
    <div class="img">
    <img src="imagens/logo_size-removebg-preview.png" alt="">
    </div>

    <div class="box centro shadow-lg p-3 mb-5 bg-white rounded">
        <form action="https://formspree.io/f/xnqwonvn" method="post">
            
                <legend><b>Contato Suporte</b></legend>
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
                    <input type="tell" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>                    
                </div>
                <br><br>
                <div>
                    <label for="assunto">Assunto:</label>
                    <select name="assunto " >
                        <option></option>
                        <option> Dúvidas</option>
                        <option>Elogios</option>
                        <option>Reclamações</option>
                        <option>Outros</option>
                    </select>                    
                </div>
                <br><br>
                <div>
                    <!-- INÍCIO HTML PARA MENSAGEM -->
                    <label for="mensagem">Mensagem: 
                    <span id="maximo"> (restam <b id="caracteres">100</b> caracteres)</span>
                    </label> <br>
    
                    <!-- /FIM HTML PARA MENSAGEM -->
    
                    <textarea maxlength="100" name="mensagem" id="mensagem" cols="30" rows="5"></textarea>
                </div>
                <br><br>
                <input type="submit"  id="submit">
  
        </form>

    </div>     


    </main> <!-- fechamento Cabeçalho -->


    
</body>
</html>
