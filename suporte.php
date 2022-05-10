<?php require "includes/cabecalho.php" ?>

    <article>
        <h2>Contato</h2>
        <section>
            <form>
                <div>
                    <label>Nome:</label>
                    <input type="text" placeholder="Digite seu nome" name="nome" required>
                </div>

                <div>
                    <label>E-mail:</label>
                    <input type="text" placeholder="Digite seu nome" name="nome" required>
                </div>

                <div>
                    <label for="telefone">Telefone:</label>
                    <input type="tel" name="telefone" id="telefone" required>
                </div>
                <br>
                 <div >
                <label for="assunto">Assunto:</label>
                <select name="assunto" id="assunto">
                    <option></option>
                    <option>Dúvidas</option>
                    <option>Elogios</option>
                    <option>Reclamações</option>
                    <option>Outros</option>
                </select>
            </div>

            <div>
                <label for="mensagem">Reclamação:</label> <br>
                <textarea name="mensagem" id="mensagem" cols="30" rows="5"></textarea>
            </div>

            <button type="submit" class="enviar">Enviar</button>
                
            </form>
        </section>

       
    </article>

    <?php require "includes/rodape.php" ?>