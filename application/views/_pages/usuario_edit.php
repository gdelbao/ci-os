<div id="conteudo">
    <h1>Cadastro de Usuários</h1>
    <br/>
    <?php
    $iduser = $this->uri->segment(3);
    if($iduser == NULL){
        redirect('usuario');
    } else {
        echo "<h2>Usuário Carregado com ID: $iduser</h2>";
    }
    
    $query = $this->usuario_model->getById($iduser)->row();
    
    echo form_open("usuario/editar/$iduser");
    echo validation_errors('<p>','</p>');
    
    if ($this->session->flashdata('add-ok')){
        echo '<p>'.$this->session->flashdata('add-ok').'</p>';
    }
    ?>
    <label for="id">ID</label>
    <input type="text" name="id" value="<?php echo $iduser; ?>" readonly="readonly">
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php echo $query->nome; ?>">
    <label for="email">E-mail</label>
    <input type="text" name="email" value="<?php echo $query->email; ?>">
    <label for="usuario">Usuário</label>
    <input type="text" name="usuario" value="<?php echo $query->usuario; ?>">
    <label for="senha">Senha</label>
    <input type="password" name="senha" value="<?php echo set_value('senha'); ?>">
    <label for="senha2">Repetir Senha</label>
    <input type="password" name="senha2" value="<?php echo set_value('txtSenha2'); ?>">
    <input type="submit" name="btnSalvar" value="Salvar">
    <input type="reset" name="btnCancelar" value="Cancelar">
    </form>
</div>
