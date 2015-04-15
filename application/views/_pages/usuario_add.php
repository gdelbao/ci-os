<div id="conteudo">
    <h1>Cadastro de Usuários</h1>
    <br/>
    <?php
    echo form_open('usuario/novo');
    echo validation_errors('<p>','</p>');
    ?>
    <label for="txtNome">Nome</label>
    <input type="text" name="txtNome"/>
    <label for="txtEmail">E-mail</label>
    <input type="text" name="txtEmail"/>
    <label for="txtUsuario">Usuário</label>
    <input type="text" name="txtUsuario">
    <label for="txtSenha">Senha</label>
    <input type="password" name="txtSenha">
    <input type="submit" name="btnSalvar" value="Salvar">
    <input type="reset" name="name" value="">
    </form>
</div>
