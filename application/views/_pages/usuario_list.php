<div id="conteudo">    
    <h1>Cadastro de Usuários</h1>
    <h3><?php echo anchor('usuario/novo', 'Novo Usuário'); ?></h3>
    <br>
    <?php
    
    if ($this->session->flashdata('delete-ok')){
        echo '<p>'.$this->session->flashdata('delete-ok').'</p>';
    }
    
    $this->table->set_heading('ID','NOME','LOGIN', 'AÇÕES');
    foreach ($dbdata as $row) {
        $this->table->add_row($row->id, $row->nome, $row->usuario, anchor("usuario/editar/$row->id", 'EDITAR').' - '.anchor("usuario/excluir/$row->id", 'EXCLUIR'));
    }
    
    echo $this->table->generate();
    ?>
</div>
