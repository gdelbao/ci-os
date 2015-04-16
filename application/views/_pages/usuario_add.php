<div id="conteudo">
    <h1>Cadastro de Usuários</h1>
    <br/>
    <?php
    echo form_open('usuario/novo');
    echo validation_errors('<p>','</p>');
    
    if ($this->session->flashdata('add-ok')){
        echo '<p>'.$this->session->flashdata('add-ok').'</p>';
    }
    ?>
    <label for="txtNome">Nome</label>
    <input type="text" name="nome" value="<?php echo set_value('nome'); ?>">
    <label for="txtEmail">E-mail</label>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>">
    <label for="txtUsuario">Usuário</label>
    <input type="text" name="usuario" value="<?php echo set_value('usuario'); ?>">
    <label for="txtSenha">Senha</label>
    <input type="password" name="senha" value="<?php echo set_value('senha'); ?>">
    <label for="txtSenha2">Repetir Senha</label>
    <input type="password" name="txtSenha2" value="<?php echo set_value('txtSenha2'); ?>">
    <input type="submit" name="btnSalvar" value="Salvar">
    <input type="reset" name="btnCancelar" value="Cancelar">
    </form>
</div>
