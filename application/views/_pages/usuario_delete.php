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
    
    echo form_open("usuario/excluir/$iduser");
    ?>
    <label for="id">ID</label>
    <input type="text" name="idUsuario" value="<?php echo $iduser; ?>" readonly="readonly">
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php echo $query->nome; ?>">
    <label for="email">E-mail</label>
    <input type="text" name="email" value="<?php echo $query->email; ?>">
    <label for="usuario">Usuário</label>
    <input type="text" name="usuario" value="<?php echo $query->usuario; ?>">
    <input type="submit" name="btnExcluir" value="Excluir Cadastro">
    <input type="reset" name="btnCancelar" value="Cancelar">
</div>
    